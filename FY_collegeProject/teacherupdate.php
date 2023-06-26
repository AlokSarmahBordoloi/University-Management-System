<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "university";

$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $subject = $_POST["subject"];

    $query = "UPDATE teachers SET name='$name', username='$username',password='$password', subject='$subject' WHERE id=$id";

    if (mysqli_query($connection, $query)) {
        header("Location: teacheroutput.php"); // Redirect to the desired page after update
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
} elseif (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM teachers WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: faculty.php");
}
?>

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

    <!-- Update/Edit Form -->
    <section class="update">
        <h1>Update/Edit Information</h1>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="flex">
                <div class="inputBox">
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>" required /><br />
                </div>
                <div class="inputBox">
                    <label for="name">username:</label>
                    <input type="text" name="username" id="username" value="<?php echo $row["username"]; ?>" required /><br />
                </div>
                <div class="inputBox">
                    <label for="name">password:</label>
                    <input type="password" name="password" id="password" value="<?php echo $row["password"]; ?>" required /><br />
                </div>
                <div class="inputBox">
                    <label for="name">subject:</label>
                    <input type="text" name="subject" id="subject" value="<?php echo $row["subject"]; ?>" required /><br />
                </div>
            </div>
            <input type="submit" value="Update" class="btn" />
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