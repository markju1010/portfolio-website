<?php
// connect to database
$DBConnect = mysqli_connect("localhost", "root", "", "my1stdatabase");

if ($DBConnect->connect_error) {
    die("You are not connected to Database!!!" . $DBConnect->error);
}

// Get the contact Details
if ((isset($_POST["submit"]))) {
    // receive all input values from the form
    $fname = $DBConnect->real_escape_string($_POST['fname']);
    $lname = $DBConnect->real_escape_string($_POST['lname']);
    $email = $DBConnect->real_escape_string($_POST['email']);
    $message = $DBConnect->real_escape_string($_POST['message']);

    // Save to database
    $sql = "INSERT INTO contacts (fname, lname, email, message) VALUES('" . $fname . "', '" . $lname . "','" . $email . "','" . $message . "')";
    if (!$result = $DBConnect->query($sql)) {
        die('Error Saving to Database [' . $Conn->error . ']');
    } else
        header("location: /cognate3/myportfolio/index.php?page=ThankYou"); // Go to any web page you like.
}
