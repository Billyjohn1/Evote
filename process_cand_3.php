<?php
$candId = $_REQUEST['CandId'];
$studid = $_REQUEST['StudId'];
$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$email   = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$course =  $_REQUEST['Course'];
$department =  $_REQUEST['Department'];
$position=  $_REQUEST['Position'];
$platform =  $_REQUEST['Platform'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into candidates(studid,lname,fname,email,contact,course,department,position,platform)
 values(:StudId,:lname,:fname,:email,:contact,:course,:department,:position,:platform)";





header('location: pending.php');
$conn -> close();
?>
