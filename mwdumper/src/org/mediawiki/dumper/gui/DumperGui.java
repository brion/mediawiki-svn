package org.mediawiki.dumper.gui;

import java.sql.SQLException;
import javax.swing.JFrame;
import java.io.IOException;
import java.io.InputStream;
import java.sql.Connection;
import java.sql.DriverManager;

import org.mediawiki.dumper.Tools;
import org.mediawiki.importer.DumpWriter;
import org.mediawiki.importer.MultiWriter;
import org.mediawiki.importer.XmlDumpReader;

public class DumperGui {
	private DumperWindow gui;
	private boolean running = false;
	XmlDumpReader reader;
	Connection conn;
	
	void connect(String host, String port, String username, String password) {
		try {
			Class.forName("com.mysql.jdbc.Driver").newInstance();
		} catch (ClassNotFoundException ex) {
			ex.printStackTrace();
		} catch (InstantiationException ex) {
			ex.printStackTrace();
		} catch (IllegalAccessException ex) {
			ex.printStackTrace();
		}
		try {
			// fixme is there escaping? is this a url? fucking java bullshit
			conn = DriverManager.getConnection(
					"jdbc:mysql://" + host +
					":" + port +
					// "/" + dbname +
					"?user=" + username + 
					"&password" + password);
			gui.connectionSucceeded();
		} catch (SQLException ex) {
			conn = null;
			ex.printStackTrace();
			gui.connectionFailed();
		}
	}

	void startImport(String inputFile) throws IOException {
		// TODO work right ;)
		final InputStream stream = Tools.openInputFile(inputFile);
		DumpWriter writer = new MultiWriter();
		DumpWriter progress = gui.getProgressWriter(writer, 1000);
		reader = new XmlDumpReader(stream, progress);
		new Thread() {
			public void run() {
				running = true;
				gui.start();
				gui.setProgress("Starting import...");
				try {
					reader.readDump();
					stream.close();
				} catch(IOException e) {
					gui.setProgress("FAILED: " + e.getMessage());
				}
				running = false;
				reader = null;
				gui.stop();
			}
		}.start();
	}
	
	void abort() {
		// Request an abort!
		gui.setProgress("Aborting import...");
		reader.abort();
	}

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		DumperGui manager = new DumperGui();
	}
	
	public DumperGui() {
		gui = new DumperWindow(this);
		gui.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui.setVisible(true);
	}
}