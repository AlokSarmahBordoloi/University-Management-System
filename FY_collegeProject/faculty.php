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
            <a href="admin.php">Admin</a>
            <a href="login.php">Login</a>
        </nav>

        <div id="menubtn" class="fas fa-bars"></div>
    </section>

    <!-- Faculty -->
    <section class="faculty">
        <div class="administrators">
            <h3>Administrators</h3>
            <ul>
                <li><img src="images/principal.jpg" alt="Principal">
                    <h4>Dr. Utpal Jyoti Mahanta</h4>
                    <p>Principal</p>
                </li>
                <li><img src="images/viceprincipal.jpg" alt="Vice Principal">
                    <h4>Dr. Nurul Amin</h4>
                    <p>Vice-Principal</p>
                </li>
            </ul>

        </div>

        <div class="professors">
            <h3>Computer Professors</h3>
            <ul>
                <li>
                    <img src="images/GautamAadhyapak.jpg" alt="Professor 1">
                    <h4>Gautam K. Adhyapak</h4>
                    <p>Head of Dept.</p>
                </li>
                <li>
                    <img src="images/NirbidBikash.jpg" alt="Professor 1">
                    <h4>Nribid Bikash Dutta</h4>
                    <p>Fundamentals</p>
                </li>
                <li>
                    <img src="images/ChandanChakraborty.jpg" alt="Professor 1">
                    <h4>Chandan Chakraborty</h4>
                    <p>Cloud Computing</p>
                </li>
                <li>
                    <img src="images/AjoyPegu.jpg" alt="Professor 1">
                    <h4>Ajoy Kumar Pegu</h4>
                    <p>Data Science</p>
                </li>
                <li>
                    <img src="images/PalashMudoi.jpg" alt="Professor 2">
                    <h4>Palash Mudoi</h4>
                    <p>Database</p>
                </li>
                <li>
                    <img src="images/KajuriBordoloi.jpg" alt="Professor 3">
                    <h4>Kajuri Bordoloi</h4>
                    <p>Graphics</p>
                </li>
                <li>
                    <img src="images/RatulDutta.jpg" alt="Professor 4">
                    <h4>Ratul Dutta</h4>
                    <p>Database</p>
                </li>
                <li>
                    <img src="images/ChampakBora.jpg" alt="Professor 4">
                    <h4>Champak Bora</h4>
                    <p>Mathematics</p>
                </li>
            </ul>
            <div class="btncontainer">
                <a href="teacher.php" class="btn">Login</a>
            </div>
        </div>

        <div class="professors">
            <h3>Science Professors</h3>
            <ul>
                <li>
                    <img src="images/professor1.jpg" alt="Professor 1">
                    <h4>Dr. Rajesh Sharma</h4>
                    <p>Physics</p>
                </li>
                <li>
                    <img src="images/professor2.jpg" alt="Professor 2">
                    <h4>Dr. Amit Chatterjee</h4>
                    <p>Chemistry</p>
                </li>
                <li>
                    <img src="images/professor3.jpg" alt="Professor 3">
                    <h4>Dr. Nisha Gupta</h4>
                    <p>Biology</p>
                </li>
                <li>
                    <img src="images/professor4.jpg" alt="Professor 4">
                    <h4>Dr. Radhika Sharma</h4>
                    <p>Mathematics</p>
                </li>
            </ul>
            <div class="btncontainer">
                <input type="submit" value="Login" class="btn" name="send">
            </div>
        </div>

        <div class="professors">
            <h3>Arts Professors</h3>
            <ul>
                <li>
                    <img src="images/arts1.jpg" alt="Professor 1">
                    <h4>Mukesh Sharma</h4>
                    <p>History of Arts</p>
                </li>
                <li>
                    <img src="images/arts2.jpg" alt="Professor 2">
                    <h4>Shrivastav Chatterjee</h4>
                    <p>Literature</p>
                </li>
                <li>
                    <img src="images/arts3.jpg" alt="Professor 3">
                    <h4>Ankita Gupta</h4>
                    <p>Film Study</p>
                </li>
                <li>
                    <img src="images/arts4.jpg" alt="Professor 4">
                    <h4>Priya Sharma</h4>
                    <p>Creative Writing</p>
                </li>
            </ul>
            <div class="btncontainer">
                <input type="submit" value="Login" class="btn" name="send">
            </div>
        </div>
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