<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Database</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Create Table for Contact Me</h1>
    <?php
    //Create New Connection
    $DBConnect = new mysqli("localhost", "root", "", "my1stDatabase");
    //Check new Connection
    if ($DBConnect->connect_error) {
        die("You are not connected!!!" . $DBConnect->connect_error);
    }
    //Create New Table
    $myQueryName = "CREATE TABLE contacts (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(30) NOT NULL,
        lname VARCHAR(30) NOT NULL,
        email VARCHAR(30),
        message VARCHAR(100),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if ($DBConnect->query($myQueryName) === TRUE) {
        echo "Your Table is Created Successfully";
    } else {
        echo "Your Table is not created: " . $DBConnect->error;
    }
    //Close Database
    $DBConnect->close();
    ?>
</body>

</html>