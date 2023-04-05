<?php
include("conn.php");

if (isset($_GET['SubmitForm'])) {
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['number'];
$message = $_GET['message'];


$sql = "INSERT INTO php_form (name, email, number, message) 
        VALUES ('$name', '$email', '$number', '$message')";


if (mysqli_query($conn, $sql)) {
    
    header("Location: index.php");
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>