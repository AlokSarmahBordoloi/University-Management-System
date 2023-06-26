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

    <!-- Admission -->
    <section class="admission">
        <h1 class="title">Admission Form</h1>
        <form name="form" action="admissionform.php" onsubmit="return validateForm()" method="post" class="admission-form">
            <div class="form">
                <div class="personal-details">
                    <h3 class="title">Personal Details</h3>
                    <div class="fields">
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" name="name" placeholder="Enter your name" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="text" name="email" placeholder="Enter your email" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>gender :</span>
                            <input type="text" name="gender" placeholder="Enter your gender" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>username :</span>
                            <input type="text" name="username" placeholder="Enter your username" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>password :</span>
                            <input type="password" name="password" placeholder="Enter your password" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>phone :</span>
                            <input type="number" name="phone" placeholder="Enter your number" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>date of birth :</span>
                            <input type="date" name="dob">
                        </div>
                        <div class="inputBox">
                            <span>date of graduation :</span>
                            <input type="date" name="graduation">
                        </div>
                    </div>
                </div>

                <div class="family-details">
                    <h3 class="title">Family Details</h3>
                    <div class="fields">
                        <div class="inputBox">
                            <span>father's name :</span>
                            <input type="text" name="fathername" placeholder="Enter your father's name" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>mother's name :</span>
                            <input type="text" name="mothername" placeholder="Enter your mother's name" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>guardian's name :</span>
                            <input type="text" name="guardianname" placeholder="Enter your guardian's name" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>father's occupation :</span>
                            <input type="text" name="fatheroccupation" placeholder="Enter your father's occupation" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>mother's occupation :</span>
                            <input type="text" name="motheroccupation" placeholder="Enter your mother's occupation" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>guardian's occupation :</span>
                            <input type="text" name="guardianoccupation" placeholder="Enter your guardian's occupation" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="address-details">
                    <h3 class="title">Address Details</h3>
                    <div class="fields">
                        <div class="inputBox">
                            <span>nationality :</span>
                            <input type="text" name="nationality" placeholder="Enter your nationality" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" name="state" placeholder="Enter your state" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>District :</span>
                            <input type="text" name="district" placeholder="Enter your district" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>pin code :</span>
                            <input type="number" name="pin" placeholder="Enter your pin code" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>house number :</span>
                            <input type="number" name="housenumber" placeholder="Enter your house number" autocomplete="off">
                        </div>
                        <div class="inputBox">
                            <span>post office :</span>
                            <input type="text" name="postoffice" placeholder="Enter your post office" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

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