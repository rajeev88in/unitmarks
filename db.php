<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitmarks";
// $servername = "localhost";
// $username = "u663555798_mnsnhs";
// $password = "Michaeleng@123";
// $dbname = "u663555798_mnsnhs";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$logo = "img\mnsnhs_logo.png";
$topic = "Unit Test Marks for Class V - IX, 2022";
$school_name = "Michaelnagar Shikshaniketan (H.S.)";
$school_address = "1 No. Sarani, Michaelnagar, Kolkata - 700133";
$school_dise = "UDISE: 19112601702 | Index No. B2-216 | H.S. Index No. 103700"; 
$school_mail = "contact@mnsnhs.in";
$mail_link = "If you have problems filling application email at <a href='mailto: $school_mail'> $school_mail</a>";
?> 