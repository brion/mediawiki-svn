<?php

/**
 * File holding the Filesystem class.
 * Based on the WordPress 3.0 class WP_Filesystem_Base.
 *
 * @file Filesystem.php
 * @ingroup Deployment
 * @ingroup Filesystem
 *
 * @author Jeroen De Dauw
 */

/**
 * This documenation group collects source code files with Filesystem related features.
 *
 * @defgroup Filesystem Filesystem
 */

/**
 * Base class providing a way to access filesystems.
 * 
 * @author Jeroen De Dauw
 */
abstract class Filesystem {
	
	/**
	 * Creates a connection to the filesystem.
	 * 
	 * @return boolean Indicates whether the connection has been established.
	 */
	public abstract function connect();
	
	/**
	 * Reads entire file into a string.
	 * 
	 * @return string or false
	 */
	public abstract function getContents();
	
	/**
	 * Writes a string to a file.
	 * 
	 * @param string $file Path to the file.
	 * @param string $contents
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function writeToFile( $file, $contents );
	
	/**
	 * Gets the current working directory.
	 * 
	 * @return string or false
	 */
	public abstract function getCurrentWorkingDir();
	
	/**
	 * Changes the current directory.
	 * 
	 * @param $dir string
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function changeDir( $dir );

	/**
	 * Changes 
	 * 
	 * @param string $file Path to the file.
	 * @param mixed $group A group name or number.
	 * @param boolean $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function changeFileGroup( $file, $group, $recursive = false );
	
	/**
	 * Changes filesystem permissions.
	 * 
	 * @param string $file Path to the file.
	 * @param mixed $mode The permissions as octal number, usually 0644 for files, 0755 for dirs.
	 * @param boolean $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function chmod( $file, $mode = false, $recursive = false );
	
	/**
	 * Changes file owner.
	 * 
	 * @param string $file Path to the file.
	 * @param mixed $owner A user name or number.
	 * @param boolran $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function chown( $file, $owner, $recursive = false );
	
	/**
	 * Gets the name of the file owner.
	 * 
	 * @param string $file Path to the file.
	 * 
	 * @return string
	 */
	public abstract function getOwner( $file );
	
	/**
	 * Returns file permissions. 
	 * 
	 * @param string $file Path to the file.
	 * 
	 * @return string Mode of the file (last 4 digits).
	 */
	public abstract function getChmod( $file );
	
	/**
	 * Gets the name of the files group.
	 * 
	 * @param string $file Path to the file.
	 * 
	 * @return string
	 */	
	public abstract function getGroup( $file );

	/**
	 * Does a delete operation.
	 * 
	 * @param string $path Path to the file or directory.
	 * @param boolean $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return TODO
	 */
	public abstract function delete( $path, $recursive = false );
	
	/**
	 * Returns if a file exists.
	 * 
	 * @param string $file
	 * 
	 * @return boolean
	 */
	public abstract function exists( $file );
	
	/**
	 * Returns if the provided path is a file.
	 * 
	 * @param string $path
	 * 
	 * @return boolean
	 */	
	public abstract function isFile( $path );
	
	/**
	 * Returns if the provided path is a directory.
	 * 
	 * @param string $path
	 * 
	 * @return boolean
	 */		
	public abstract function isDir( $path );
	
	/**
	 * Returns if a file is readable.
	 * 
	 * @param $file
	 * 
	 * @return boolean
	 */
	public abstract function isReadable( $file );
	
	/**
	 * Returns if a file is writable.
	 * 
	 * @param $file
	 * 
	 * @return boolean
	 */	
	public abstract function isWritable( $file );
	
	/**
	 * Returns the modification time of a file.
	 * 
	 * @param $file
	 * 
	 * @return integer or false
	 */		
	public abstract function getModificationTime( $file );
	
	/**
	 * Returns the creation time of a file.
	 * 
	 * @param $file
	 * 
	 * @return integer or false
	 */		
	public abstract function getCreationTime( $file );
	
	/**
	 * Returns the size of a file in bytes, or false in case of an error.
	 * 
	 * @param $file
	 * 
	 * @return integer or false
	 */		
	public abstract function getSize( $file );
	
	/**
	 * Sets access and modification time of file.
	 * 
	 * @param string $file The name of the file being touched. 
	 * @param integer $time The touch time. If time is not supplied, the current system time is used. 
	 * @param integer $atime If present, the access time of the given filename is set to the value of atime. Otherwise, it is set to time. 
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function touch( $file, $time = 0, $atime = 0 );
	
	/**
	 * Creates a directory.
	 * 
	 * @param string $path The directory path.
	 * @param integer $chmod
	 * @param unknown_type $chown
	 * @param unknown_type $chgrp
	 * 
	 * @return boolean Success indicator
	 */
	public abstract function makeDir( $path, $chmod = false, $chown = false, $chgrp = false );
	
	/**
	 * Returns a list with the directories contents.
	 * 
	 * @param string $path The directory path.
	 * @param boolean $includeHidden Indicates if hidden files should be returned. Defaults to True.
	 * @param boolean $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return array
	 */
	public abstract function listDir( $path, $includeHidden = true, $recursive = false );
	
	/**
	 * Does a copy operation.
	 * 
	 * @param string $from
	 * @param string $to
	 * 
	 * @return boolean Success indicator
	 */
	protected abstract function doCopy( $from, $to );
	
	/**
	 * Does a move operation.
	 * 
	 * @param string $from
	 * @param string $to
	 * 
	 * @return boolean Success indicator
	 */
	protected abstract function doMove( $from, $to );	
	
	/**
	 * Constructor
	 */
	public function __construct() {
		// TODO
	}		
	
	public static function findFolder() {
		// TODO
	}
	
	private static function searchForFolder() {
		// TODO
	}
	
	public function getContentsArray() {
		return explode( "\n", $this->getContents() );
	}
	
	/**
	 * Does a copy operation.
	 * 
	 * @param string $from
	 * @param string $to
	 * @param boolean $overwrite
	 * 
	 * @return boolean Success indicator
	 */
	public final function copy( $from, $to, $overwrite = false ) {
		if ( !$overwrite && $this->exists( $to ) ) {
			return false;
		}
		
		return $this->doCopy();
	}
	
	/**
	 * Does a move operation.
	 * 
	 * @param string $from
	 * @param string $to
	 * @param boolean $overwrite
	 * 
	 * @return boolean Success indicator
	 */
	public final function move( $from, $to, $overwrite = false ) {
		if ( !$overwrite && $this->exists( $to ) ) {
			return false;
		}
		
		return $this->doMove();
	}	
	
	/**
	 * Does a delete operation. Alias for the delete method.
	 * 
	 * @param string $path Path to the directory.
	 * @param boolean $recursive If set to true, the function will be applied recursvily. Defaults to False.
	 * 
	 * @return boolean Success indicator
	 */	
	public function removeDir( $path, $recursive = false ) {
		$this->delete( $path, $recursive );
	}	
	
}