<?php
/**
 * Class for getting remote IPv4 address in browser.
 *
 * @package	IPv4-package
 * @author	Cosmin
 * @version	Version-1.0
 */

Class IPv4Addr {
	
	// Properties
	private $remoteAddr;
	
	// Methods
	function __construct() {
	        $this->remoteAddr = $_SERVER["REMOTE_ADDR"];
	}

	function GetRemoteAddr() {
		return $this->remoteAddr;
	}

	function FormatRemoteAddr() {
	        return "Yourssssiiss Remote IPV4 address is:" . $this->GetRemoteAddr();
	}	

}


?>
