<?php

class SqliteInstaller extends InstallerDBType {
	var $globalNames = array(
		'wgDBname',
		'wgSQLiteDataDir'
	);

	function getName() {
		return 'sqlite';
	}

	function isCompiled() {
		return $this->checkExtension( 'pdo_sqlite' );
	}

	function getGlobalNames() {
		return $this->globalNames;
	}

	function getGlobalDefaults() {
		if ( isset( $_SERVER['DOCUMENT_ROOT'] ) ) {
			return array( 'wgSQLiteDataDir' => dirname( $_SERVER['DOCUMENT_ROOT'] ) . '/data' );
		} else {
			return array();
		}
	}

	function getConnectForm() {
		return 
			$this->getTextBox( 'wgSQLiteDataDir', 'config-sqlite-dir' ) .
			$this->parent->getHelpBox( 'config-sqlite-dir-help' ) .
			$this->getTextBox( 'wgDBname', 'config-db-name' ) .
			$this->parent->getHelpBox( 'config-sqlite-name-help' );			
	}

	function submitConnectForm() {
		global $wgSQLiteDataDirMode, $wgSQLiteDataDir;
		$newValues = $this->setVarsFromRequest( array( 'wgSQLiteDataDir', 'wgDBname' ) );
		$dir = $newValues['wgSQLiteDataDir'];
		if ( !is_dir( $dir ) ) {
			if ( !is_writable( dirname( $dir ) ) ) {
				return Status::newFatal( 'config-sqlite-parent-unwritable', $dir, dirname( $dir ) );
			}
			wfSuppressWarnings();
			$ok = wfMkdirParents( $dir, $wgSQLiteDataDirMode );
			wfRestoreWarnings();
			if ( !$ok ) {
				return Status::newFatal( 'config-sqlite-mkdir-error', $dir );
			}
			# Put a .htaccess file in in case the user didn't take our advice
			file_put_contents( "$dir/.htaccess", "Deny from all\n" );
		}
		if ( !is_writable( $dir ) ) {
			return Status::newFatal( 'config-sqlite-unwritable', $dir );
		}
		return Status::newGood();
	}

	function getConnection() {
		$status = Status::newGood();
		$dir = $this->getVar( 'wgSQLiteDataDir' );
		$dbName = $this->getVar( 'wgDBname' );

		try {
			# FIXME: need more sensible constructor parameters, e.g. single associative array
			# Setting globals kind of sucks
			$wgSQLiteDataDir = $dir;
			$this->conn = new DatabaseSqlite( false, false, false, $dbName );
			return $this->conn;
		} catch ( DBConnectionError $e ) {
			$status->fatal( 'config-sqlite-connection-error', $e->getMessage() );
		}
		return $status;
	}

	function needsUpgrade() {
		$dir = $this->getVar( 'wgSQLiteDataDir' );
		$dbName = $this->getVar( 'wgDBname' );
		// Don't create the data file yet
		if ( !file_exists( "$dir/$dbName.sqlite" ) ) {
			return false;
		}

		// If the data file exists, look inside it
		return parent::needsUpgrade();
	}

	function getSettingsForm() {
		return false;
	}

	function submitSettingsForm() {
		return Status::newGood();
	}

	function install() {
		echo "TODO";
	}
}
