<?php
$servername = "localhost";
$username = "newuser";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=life-planner", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "<!---Connection failed: " . $e->getMessage()."--->";exit("mysql couln't connect, servers temporarily down");
}
?>
