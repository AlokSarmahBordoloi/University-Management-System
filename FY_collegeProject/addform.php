<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['send'])) {
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $fundamentals_of_computer = $_POST['fundamentals_of_computer'];
    $programming_in_c = $_POST['programming_in_c'];
    $databases_management = $_POST['databases_management'];
    $computer_graphics = $_POST['computer_graphics'];
    $operations_research = $_POST['operations_research'];
    $software_engineering = $_POST['software_engineering'];

    $request = " INSERT INTO `bcamarks` (`roll`, `name`, `password`, `fundamentals_of_computer`, `programming_in_c`, `databases_management`, `computer_graphics`, `operations_research`, `software_engineering`) VALUES ('$roll', '$name', '$password', '$fundamentals_of_computer', '$programming_in_c', '$databases_management', '$computer_graphics', '$operations_research', '$software_engineering');";

    if ($connection->query($request) == true) {
        $insert = true;
    } else {
        echo "ERROR: sql <br> $connection->error";
    };

    // Close the database connection

    $connection->close();

    header('location:outputteacher.php');
} else {
    echo 'something went wrong. try again';
};
