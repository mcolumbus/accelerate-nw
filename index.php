<?php 
$ip = $_SERVER['REMOTE_ADDR'];
// display it back
echo "<h1>Accelerate Network Lab</h1>";
echo "<h2>Client IP</h2>";
echo "Your IP address : " . $ip;
echo "<h2>Hostname</h2>";
echo "Server Hostname: " . php_uname("n");
?>
