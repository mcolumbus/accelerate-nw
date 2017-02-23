<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$headers = apache_request_headers();
$xff = $headers['X-Forwarded-For'];
// display it back
echo "<h1>Accelerate Network Lab</h1>";
echo "<h2>Real Client IP</h2>";
echo "X-Forwarded-For Header : " . $xff;
echo "<h2>Client IP</h2>";
echo "Client IP : " .$ip;
echo "<h2>Hostname</h2>";
echo "Server Hostname: " . php_uname("n");
echo "<h2>Server Location</h2>";
echo "Region and Zone: " . "region-here";
?>
