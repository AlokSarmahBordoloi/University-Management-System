<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "university";

$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check if the form is submitted for updating the row
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the updated values from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $subject = $_POST['subject'];

    // Perform the update query
    $updateQuery = "UPDATE teachers SET name='$name', username='$username', password='$password', subject='$subject' WHERE id='$id'";
    mysqli_query($connection, $updateQuery);

    // Redirect back to the original page after updating
    header("Location: outputadmin.php");
    exit();
}

// Retrieve the row's data based on the provided id
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM teachers WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vanguard University - Update/Edit</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <!-- Header -->
    <section class="header">
        <a href="home.html" class="top">Vanguard University</a>
        <nav class="navbar">
            <a href="home.html">Home</a>
            <a href="academics.php">Academics</a>
            <a href="admission.php">Admission</a>
            <a href="faculty.php">Faculty</a>
            <a href="admin.php">Admin</a>
            <a href="login.php">Login</a>
        </nav>

        <div id="menubtn" class="fas fa-bars"></div>
    </section>

    <section class="update">
        <h1>Update Data</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="flex">
                <div class="inputBox">
                    <h1>Teacher Details: <?php echo $row["name"]; ?></h1>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </div>
                <div class="inputBox">
                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
                </div>
                <div class="inputBox">
                    <label>Username:</label>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
                </div>
                <div class="inputBox">
                    <label>Password:</label>
                    <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
                </div>
                <div class="inputBox">
                    <label>Subject:</label>
                    <input type="text" name="subject" value="<?php echo $row['subject']; ?>"><br>
                </div>

            </div>
            <input type="submit" value="Update">
        </form>
    </section>
    <!-- Footer -->
    <section class="footer">
        <div class="container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
                <a href="academics.php"><i class="fas fa-angle-right"></i>Academics</a>
                <a href="admission.php"><i class="fas fa-angle-right"></i>Admission</a>
                <a href="faculty.php"><i class="fas fa-angle-right"></i>Faculty</a>
                <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
            </div>
            <div class="box">
                <h3>Queries</h3>
                <a href="#">
                    <i class="fas fa-angle-right"></i>Ask Questions
                </a>
                <a href="#"><i class="fas fa-angle-right"></i>Technical</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Service</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
            </div>
            <div class="box">
                <h3>Contact Us</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 9187654321</a>
                <a href="#"><i class="fas fa-phone"></i>+123 456 78900</a>
                <a href="#"><i class="fas fa-envelope"></i>vangaurd@rediffmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i>uniofvanguard@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Union Park, Delhi</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
                <a href="#"><i class="fab fa-whatsapp"></i>whatsapp</a>
                <a href="#"><i class="fab fa-telegram"></i>telegram</a>
            </div>
        </div>
        <div class="credit">
            <div>
                &copy; <span>Vanguard University</span>, All Rights Reserved
            </div>
            <div>Developed by <span>Abhilash | Alok</span></div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>