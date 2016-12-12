<?php

//get form values
$firstname = Trim(stripslashes($_POST['firstname']));
$lastname = Trim(stripslashes($_POST['lastname']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));


//Insert into database

//create db connection
include "inc/db-info.php";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//error check
if(! $connection) {
	die("Could not connect");
}

//Do db query
$query = "INSERT INTO people (first_name, last_name, phone, email, message) VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";
$result = mysqli_query($connection, $query);

//more error check
$numRowsAffected = mysqli_affected_rows($connection);
if($numRowsAffected < 1) {
	die('No records were written into the database');
}

//Close db connection
mysqli_close($connection);

//send email
$subject = "Project 3 - Message Received";
$emailTo = "amai2@u.rochester.edu";
$body = ""; //initialize body

$body .= "Name: ";
$body .= $firstname . " " . $lastname;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n\n";

$body .= "Message: \n";
$body .= $message;
$body .= "\n";

mail($emailTo, $subject, $body, "From: <$email>");

//go to thank you note
header("Location: contact-thanks.html");

?>