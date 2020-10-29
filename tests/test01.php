<?php

include_once ("../src/IPv4.php");

$yourAddr = "";

$remoteAddrObj = new IPv4Addr();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$yourAddr = $remoteAddrObj->FormatRemoteAddr(); 
}

?>
