<?php
$conn = mysqli_connect('localhost','root','','elearning') or die(mysqli_error());
$mysqli = new mysqli("localhost","root","","elearning");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>