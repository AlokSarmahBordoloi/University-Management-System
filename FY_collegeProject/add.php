<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vanguard University</title>

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
            <a href="login.php">Login</a>
        </nav>

        <div id="menubtn" class="fas fa-bars"></div>
    </section>

    <!-- Admission -->
    <section class="admission">
        <h1 class="title">Add a new entry</h1>
        <form action="addform.php" method="post" class="add-form">
            <div class="form">
                <div class="Student Marksheet Entry">
                    <h3 class="title">Student marksheet Entry</h3>
                    <div class="fields">
                        <div class="inputBox">
                            <span>roll :</span>
                            <input type="text" name="roll" placeholder="Enter roll">
                        </div>
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" name="name" placeholder="Enter name">
                        </div>
                        <div class="inputBox">
                            <span>password :</span>
                            <input type="text" name="password" placeholder="Enter password">
                        </div>
                        <div class="inputBox">
                            <span>fundamentals_of_computer :</span>
                            <input type="text" name="fundamentals_of_computer" placeholder="Enter Fundamentals of Computer Marks">
                        </div>
                        <div class="inputBox">
                            <span>programming_in_c :</span>
                            <input type="text" name="programming_in_c" placeholder="Enter Programming in C Marks">
                        </div>
                        <div class="inputBox">
                            <span>databases_management :</span>
                            <input type="number" name="databases_management" placeholder="Enter Databases Management Marks">
                        </div>
                        <div class="inputBox">
                            <span>computer_graphics :</span>
                            <input type="number" name="computer_graphics" placeholder="Enter Computer Graphics Marks">
                        </div>
                        <div class="inputBox">
                            <span>operations_research :</span>
                            <input type="number" name="operations_research" placeholder="Enter Operations Research Marks">
                        </div>
                        <div class="inputBox">
                            <span>software_engineering :</span>
                            <input type="number" name="software_engineering" placeholder="Enter Software Engineering Marks">
                        </div>
                        <div class="btncontainer">
                            <input type="submit" value="Submit" class="btn" name="send">
                        </div>
                    </div>
                </div>
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

    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>