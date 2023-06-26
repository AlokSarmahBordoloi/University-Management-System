<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $graduation = $_POST['graduation'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $guardianname = $_POST['guardianname'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $motheroccupation = $_POST['motheroccupation'];
    $guardianoccupation = $_POST['guardianoccupation'];
    $nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pin = $_POST['pin'];
    $housenumber = $_POST['housenumber'];
    $postoffice = $_POST['postoffice'];

    $request = " INSERT INTO `admission` (`name`, `email`, `gender`, `username`, `password`, `phone`, `dob`, `graduation`, `fathername`, `mothername`, `guardianname`, `fatheroccupation`, `motheroccupation`, `guardianoccupation`, `nationality`, `state`, `district`, `pin`, `housenumber`, `postoffice`) VALUES ('$name', '$email', '$gender', '$username', '$password', '$phone', '$dob', '$graduation', '$fathername', '$mothername', '$guardianname', '$fatheroccupation', '$motheroccupation', '$guardianoccupation', '$nationality', '$state', '$district', '$pin', '$housenumber', '$postoffice');";

    if ($connection->query($request) == true) {
        $insert = true;
    } else {
        echo "ERROR: sql <br> $connection->error";
    };

    // Close the database connection

    $connection->close();

    header('location:home.html');
} else {
    echo 'something went wrong. try again';
};
