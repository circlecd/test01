<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

include_once ("../src/IPv4.php");

$yourAddr = "";

$remoteAddrObj = new IPv4Addr();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$yourAddr = $remoteAddrObj->FormatRemoteAddr(); 
}

?>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="submit" name="submit" value="Get your IPv4 address">  
</form>

<?php 

echo $yourAddr;

?>

</body>
</html>
