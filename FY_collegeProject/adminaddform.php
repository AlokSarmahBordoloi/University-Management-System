<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $subject = $_POST['subject'];

    $request = " INSERT INTO `teachers` (`name`, `username`, `password`, `subject`) VALUES ('$name', '$username', '$password', '$subject');";

    if ($connection->query($request) == true) {
        $insert = true;
    } else {
        echo "ERROR: sql <br> $connection->error";
    };

    // Close the database connection

    $connection->close();

    header('location:outputadmin.php');
} else {
    echo 'something went wrong. try again';
};
