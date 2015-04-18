<?php

 
$hostname = "localhost";  
$database = "urldb";  
$username = "root"; 
$password = "";  
//
$site = mysql_connect($hostname, $username, $password); 
mysql_select_db($database, $site);
//
 

$server_name = "http://".$_SERVER['HTTP_HOST']."/";
?>