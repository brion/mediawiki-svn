#include <iostream>
#include <map>
#include <stdint.h>
#include <boost/lexical_cast.hpp>
#include <cstring>
#include <time.h>
#include <stdlib.h>
#include <math.h>

using std::strtok;

typedef std::map<std::string, uint64_t>::iterator SeqIterator;

struct HostData {
	HostData() : received(1), sent(0) {}

	// Number of packets received (sampled)
	int64_t received;

	// Number of packets sent, estimated from sequence numbers (unsampled)
	int64_t sent;
};
typedef std::map<std::string, HostData>::iterator HostIterator;

struct SampleData {
	SampleData() : total(0), outOfOrder(0), invalid(0) {}

	// Number of sampled lines received
	int64_t total;

	// Number of sampled lines out of order
	int64_t outOfOrder;

	// Number of sampled lines which were invalid
	int64_t invalid;

	std::map<std::string, HostData> hosts;

	void Report(const struct tm * timeStruct, int sampleRate);
	void PrintRatio(int64_t numerator, int64_t denominator, double numeratorError);

};

const time_t reportInterval = 600;


int main(int argc, char** argv)
{
	using namespace std;
	const size_t bufSize = 65536;
	map<string, uint64_t> seqs;
	char buffer[bufSize];
	int sampleRate;

	SampleData initialData;
	SampleData currentData;
	time_t lastReportTime = 0;
	time_t currentTime;
	struct tm timeStruct;

	if (argc < 2) {
		cerr << "usage: packet-loss <sample-rate>\n";
		exit(1);
	}

	try {
		sampleRate = boost::lexical_cast<int>(argv[1]);
	} catch (...) {
		cerr << "packet-loss: invalid sample rate\n";
		exit(1);
	}
	if (sampleRate < 1) {
		cerr << "packet-loss: invalid sample rate\n";
		exit(1);
	}

	while (cin.good()) {
		cin.getline(buffer, bufSize);
		if (!cin.gcount()) {
			continue;
		}
		currentData.total++;
		if (cin.gcount() > (streamsize)(bufSize - 2)) {
			// Oversize
			currentData.invalid++;
			continue;
		}
		char * strConn = strtok(buffer, " ");
		char * strSeq = strtok(NULL, " ");
		char * strTime = strtok(NULL, " ");
		char * restOfLine = strtok(NULL, "\n");
		if (!strConn || !strSeq || !strTime || !restOfLine) {
			// Invalid line
			currentData.invalid++;
			continue;
		}
		uint64_t seq;
		try {
			seq = boost::lexical_cast<uint64_t>(strSeq);
		} catch (...) {
			// Non-numeric sequence number
			currentData.invalid++;
			continue;
		}

		if (!strptime(strTime, "%Y-%m-%dT%H:%M:%S", &timeStruct)) {
			// Invalid date/time
			currentData.invalid++;
			continue;
		}
		currentTime = mktime(&timeStruct);

		SeqIterator seqIter = seqs.find(strConn);
		HostIterator hostIter = currentData.hosts.find(strConn);
		if (hostIter == currentData.hosts.end()) {
			// First instance of this host since the last report, or first instance overall
			initialData.hosts[strConn] = HostData();
			currentData.hosts[strConn] = HostData();
			if (seqIter != seqs.end()) {
				std::cerr << "packet-loss: unexpected host entry\n";
				abort();
			}
			seqs[strConn] = seq;
		} else {
			if (seqIter == seqs.end()) {
				std::cerr << "packet-loss: unexpected lack of host entry\n";
				abort();
			} else if (seqIter->second == (uint64_t)-1) {
				// First instance of this host since out-of-order data
				seqs[strConn] = seq;
			} else if (seqIter->second > seq) {
				// Out-of-order, suspend counting until we resync
				currentData.outOfOrder++;
				seqIter->second = (uint64_t)-1;
			} else {
				// Normal case: sequence number increased
				int64_t delta = (int64_t)(seq - seqIter->second);
				hostIter->second.sent += delta;
				hostIter->second.received ++;
				seqIter->second = seq;
			}
		}

		if (currentTime - lastReportTime >= reportInterval) {
			lastReportTime = currentTime;
			currentData.Report(&timeStruct, sampleRate);
			currentData = initialData;
		}
	}
	// Final report
	currentTime = time(NULL);
	currentData.Report(&timeStruct, sampleRate);
}

void SampleData::Report(const struct tm * timeStruct, int sampleRate) {
	using namespace std;
	char timebuf[256];

	strftime(timebuf, sizeof(timebuf), "[%Y-%m-%dT%H:%M:%S] ", timeStruct);

	cout << timebuf << "invalid: ";
	PrintRatio(invalid, total, sqrt(total));
	cout << "\n";

	cout << timebuf << "out of order: ";
	PrintRatio(outOfOrder, total, sqrt(total));
	cout << "\n";

	HostIterator iter;
	int64_t totalSent = 0, totalReceived = 0;
	for (iter = hosts.begin(); iter != hosts.end(); iter++) {
		if (iter->second.received < 10) {
			// Sample size too small
			continue;
		}
		cout << timebuf << iter->first << " lost: ";
		PrintRatio(
			iter->second.sent - iter->second.received * sampleRate, 
			iter->second.sent,
			sqrt(iter->second.received) * sampleRate
		);
		cout << "\n";
		totalSent += iter->second.sent;
		totalReceived += iter->second.received;
	}

	cout << timebuf << "total lost: ";
	PrintRatio(
		totalSent - totalReceived * sampleRate, 
		totalSent,
		sqrt(totalReceived) * sampleRate
	);
	cout << "\n";
}

void SampleData::PrintRatio(int64_t numerator, int64_t denominator, double numeratorError) {
	using namespace std;
	if (denominator == 0) {
		cout << "(0 +/- 0)%";
	} else {
		double percent = (double)numerator / denominator * 100;
		double percentError = numeratorError / denominator * 100;
		cout.precision(5);
		cout.flags(ios::fixed);
		cout << "(" << percent << " +/- ";
		cout.precision(5);
		cout.flags(ios::fixed);
		cout <<  percentError << ")%";
	}
}

// vim: ts=4 sw=4:

