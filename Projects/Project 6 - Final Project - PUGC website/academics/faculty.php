<?php require '../connectdb.php'; ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Faculty - University of the Punjab, Gujranwala Campus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Meta Info -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
 <header>
    <div class="header-area">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p><span>University of the Punjab, Gujranwala Campus</span></p>
                            </div>
                            <div class="text_wrap">
                                <p><a href="../index.html">Home</a> <a href="#"><i class="ti-user"></i> Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_wrap d-flex justify-content-between align-items-center">
                            <div class="header_left">
                                <div class="logo">
                                    <a href="../index.html">
                                        <img style="height: 60px; width: auto;" src="../img/logo.svg" alt="University Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="header_right d-flex align-items-center">
                                <div class="main-menu d-none d-lg-block">
                                    <nav id="navmenu" class="navmenu">
                                        <ul id="navigation">
                                            <li><a href="../index.html">Home</a></li>
                                            
                                            <!-- Admissions Dropdown -->
                                            <li class="dropdown">
                                                <a href="#"><span>Admissions </span><i class="ti-angle-down"></i></i></a>
                                                <ul class="submenu">
                                                    <li><a href="../admissions/announcements.html">Announcements</a></li>
                                                    <li><a href="../admissions/forms.html">Forms</a></li>
                                                    <li><a href="../admissions/merit-lists.html">Merit Lists</a></li>
                                                    <li><a href="../admissions/fee-structure.html">Fee Structure</a></li>
                                                    <li><a href="../admissions/scholarships.html">Scholarships</a></li>
                                                </ul>
                                            </li>

                                            <!-- Academics Dropdown -->
                                            <li class="dropdown">
                                                <a href="#"><span>Academics </span><i class="ti-angle-down"></i></i></a>
                                                <ul class="submenu">
                                                    <li><a href="./departments.html">Departments</a></li>
                                                    <li><a href="./programs.html">Programs</a></li>
                                                    <li><a href="./faculty.php">Faculty</a></li>
                                                </ul>
                                            </li>

                                            <!-- Campus Life Dropdown -->
                                            <li class="dropdown">
                                                <a href="#"><span>Campus Life </span><i class="ti-angle-down"></i></i></a>
                                                <ul class="submenu">
                                                    <li><a href="../campus-life/facilities.html">Facilities</a></li>
                                                    <li><a href="../campus-life/societies.html">Societies</a></li>
                                                    <li><a href="../campus-life/events.html">Events</a></li>
                                                    <li><a href="../campus-life/gallery.html">Gallery</a></li>
                                                </ul>
                                            </li>

                                            <!-- Other Links -->
                                            <li><a href="../notices.html">Notices</a></li>
                                            <li><a href="../downloads.html">Downloads</a></li>
                                            <li><a href="../about.html">About</a></li>
                                            <li><a href="../contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- Page Content -->
 <div class="container py-5">
    <h1 class="text-center">Faculty</h1>
    <hr>
<div class="row">
    <?php
        // Fetch all faculty members from the correct table
        $sql = "SELECT * FROM faculty_members"; // corrected table name
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through each faculty member and display their information
            while ($row = $result->fetch_assoc()) {
                // Get the initials
                $nameParts = explode(" ", $row['name']);
                $initials = strtoupper(substr($nameParts[0], 0, 1) . (isset($nameParts[1]) ? substr($nameParts[1], 0, 1) : ''));

                echo '<div class="col-md-4">
                        <div class="card mb-4 shadow-sm" style="position: relative;">
                            <div class="image-container" style="width: 100%; height: auto; min-height: 500px; display: flex; justify-content: center; align-items: center; background-color: gray;">
                ';

                // Check if the image path exists
                if (!empty($row['image_path']) && file_exists($row['image_path'])) {
                    echo '<img src="'.$row['image_path'].'" class="card-img-top" alt="'.$row['name'].'" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">';
                } else {
                    // Display initials if image is not available
                    echo '<div style="width: 150px; height: 150px; border-radius: 50%; background-color: #232637; color: white; display: flex; justify-content: center; align-items: center; font-size: 72px; font-weight: semi-bold; position: absolute;">'.$initials.'</div>';
                }

                echo '      </div>
                            <div class="card-body">
                                <h5 class="card-title">'.$row['name'].'</h5>
                                <p class="card-text">'.$row['position'].'</p>
                                <p class="card-text">'.$row['department'].'</p>
                                <p class="card-text">'.$row['email'].'</p>
                                <p class="card-text">'.$row['phone'].'</p>
                            </div>
                        </div>
                      </div>';
            }
        } else {
            // In case there are no faculty members in the database
            echo '<p>No faculty members found.</p>';
        }
    ?>
</div>




</div>



    <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="newsLetter_wrap">
                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Stay Updated
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Follow Us
                            </h3>
                            <div class="socail_links">
                                <ul>
                                    <li><a href="https://www.facebook.com/UniversityOfThePunjabGujranwala/"><i class="ti-facebook"></i></a></li>
                                    <li><a href="https://x.com/pugc_official?lang=en"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/university-of-the-punjab-gujranwala/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- About Us Column -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            About Us
                        </h3>
                        <ul>
                            <li><a href="../about.html">About Us</a></li>
                            <li><a href="../campus-life/facilities.html">Facilities</a></li>
                            <li><a href="../about.html#mission">Our Mission</a></li>
                            <li><a href="../campus-life/societies.html">Societies</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Campus Column -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Campus
                        </h3>
                        <ul>
                            <li><a href="../campus-life/events.html">Events</a></li>
                            <li><a href="../campus-life/gallery.html">Gallery</a></li>
                            <li><a href="../notices.html">Notices</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Study Column -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Study
                        </h3>
                        <ul>
                            <li><a href="merit-lists.html">Merit Lists</a></li>
                            <li><a href="fee-structure.html">Fee Structure</a></li>
                            <li><a href="scholarships.html">Scholarships</a></li>
                            <li><a href="forms.html">Admission Forms</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Support Column -->
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Support
                        </h3>
                        <ul>
                            <li><a href="../contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | University of the Punjab, Gujranwala Campus
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JS here -->
<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../js/vendor/jquery-1.12.4.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script src="../js/ajax-form.js"></script>
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/scrollIt.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/nice-select.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/gijgo.min.js"></script>

<!--contact js-->
<script src="../js/contact.js"></script>
<script src="../js/jquery.ajaxchimp.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/mail-script.js"></script>

<script src="../js/main.js"></script>

</body>

</html>
