#include "smstdinc.hxx"
#include "smcsmplex.hxx"
#include "smthr.hxx"
#include "smcfg.hxx"
#include "smtmr.hxx"
#include "smirc.hxx"

void
test_event(void)
{
	static int count = 0;
	SMI(smirc::cfg)->conn()->msg(b::io::str(b::format("test event ran at %d (count %d)") % std::time(0) % ++count));
}

int
main(int argc, char *argv[])
{
	instance<smcfg::cfg>(); // force reading
	SMI(smtmr::evthdlr)->install(smtmr::evtp(new smtmr::evt("test event", 5, true, &test_event)));
	SMI(smirc::cfg)->initialise();
	csmplex::csmplexd cm;
	cm.start();
	SMI(smnet::smpx)->run();
}
