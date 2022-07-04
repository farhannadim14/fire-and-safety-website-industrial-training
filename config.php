<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "file_upload";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/IOCL%20FIRE%20AND%20SAFETY/upload1.php"; // Website url

?>