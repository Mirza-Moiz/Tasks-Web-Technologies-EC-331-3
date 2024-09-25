<?php
require './connectdb.php';

$loadingMessage = '';
$errorMessage = '';
$successMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Get the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the input (basic validation)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $errorMessage = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email format.";
    } else {
        // Execute the statement
        if ($stmt->execute()) {
            $successMessage = "Message sent successfully!";
            // Clear the form fields
            $name = $email = $subject = $message = '';
        } else {
            $errorMessage = "Error: " . $stmt->error;
        }
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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
                                    <p><a href="./index.html">Home</a> <a href="#"><i class="ti-user"></i> Login</a></p>
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
                                        <a href="index.html">
                                            <img style="height: 60px; width: auto;" src="img/logo.svg"
                                                alt="University Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav id="navmenu" class="navmenu">
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Admissions </span><i
                                                            class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="admissions/announcements.html">Announcements</a>
                                                        </li>
                                                        <li><a href="admissions/forms.html">Forms</a></li>
                                                        <li><a href="admissions/merit-lists.html">Merit Lists</a></li>
                                                        <li><a href="admissions/fee-structure.html">Fee Structure</a>
                                                        </li>
                                                        <li><a href="admissions/scholarships.html">Scholarships</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Academics </span><i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="academics/departments.html">Departments</a></li>
                                                        <li><a href="academics/programs.html">Programs</a></li>
                                                        <li><a href="academics/faculty.php">Faculty</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Campus Life </span><i
                                                            class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="campus-life/facilities.html">Facilities</a></li>
                                                        <li><a href="campus-life/societies.html">Societies</a></li>
                                                        <li><a href="campus-life/events.html">Events</a></li>
                                                        <li><a href="campus-life/gallery.html">Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="notices.html">Notices</a></li>
                                                <li><a href="downloads.html">Downloads</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li class="active"><a href="contact.html">Contact</a></li>
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
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contact Us</h3>
                        <p><a href="index.html">Home /</a> Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13507.441494555347!2d74.15357683961489!3d32.18103969392899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2916d2863087%3A0x5f782204afdc2622!2sUniversity%20Of%20The%20Punjab%20-%20Gujranwala%20Campus!5e0!3m2!1sen!2sus!4v1727006109011!5m2!1sen!2sus"
                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                 <form
  action="contact.php"
  method="post"
  class="form-contact contact_form"
  data-aos="fade-up"
  data-aos-delay="200"
  id="contactForm"
  novalidate="novalidate">
  
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <input
          type="text"
          name="name"
          class="form-control valid"
          placeholder="Enter your name"
          value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
          required="">
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
        <input
          type="email"
          class="form-control valid"
          name="email"
          placeholder="Email"
          value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
          required="">
      </div>
    </div>

    <div class="col-12">
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          name="subject"
          placeholder="Enter Subject"
          value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>"
          required="">
      </div>
    </div>

    <div class="col-12">
      <div class="form-group">
        <textarea
          class="form-control w-100"
          name="message"
          cols="30"
          rows="9"
          placeholder="Message"
          required=""><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
      </div>
    </div>

    <div class="col-12 text-center">
      <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
      </div>
    </div>

    <div class="col-12 text-center">
      <div class="loading" style="display: <?php echo $loadingMessage ? 'block' : 'none'; ?>;">
        <?php echo $loadingMessage; ?>
      </div>
      <div class="error-message" style="display: <?php echo $errorMessage ? 'block' : 'none'; ?>;">
        <?php echo $errorMessage; ?>
      </div>
      <div class="sent-message" style="display: <?php echo $successMessage ? 'block' : 'none'; ?>;">
        <?php echo $successMessage; ?>
      </div>
    </div>
  </div>
</form>





                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3> Ali Pur Chowk, Rawalpindi Bypass, </h3>
                            <p>Gujranwala
                                Punjab, PK 52250</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>
                                <a href="tel:+92559201222">

                                    +92 (055) 9201222
                                </a>
                            </h3>
                            <p>Mon to Fri 9am to 5pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>
                                <a href="mailto:infocell@pu.edu.pk">
                                    infocell@pu.edu.pk
                                </a>

                            </h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">Stay Updated</h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">Follow Us</h3>
                                <div class="socail_links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/UniversityOfThePunjabGujranwala/"><i
                                                    class="ti-facebook"></i></a></li>
                                        <li><a href="https://x.com/pugc_official?lang=en"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a
                                                href="https://www.linkedin.com/company/university-of-the-punjab-gujranwala/"><i
                                                    class="fa fa-linkedin"></i></a></li>
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
                            <h3 class="footer_title">About Us</h3>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="campus-life/facilities.html">Facilities</a></li>
                                <li><a href="about.html#mission">Our Mission</a></li>
                                <li><a href="campus-life/societies.html">Societies</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Campus Column -->
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Campus</h3>
                            <ul>
                                <li><a href="campus-life/events.html">Events</a></li>
                                <li><a href="campus-life/gallery.html">Gallery</a></li>
                                <li><a href="notices.html">Notices</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Study Column -->
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Study</h3>
                            <ul>
                                <li><a href="admissions/merit-lists.html">Merit Lists</a></li>
                                <li><a href="admissions/fee-structure.html">Fee Structure</a></li>
                                <li><a href="admissions/scholarships.html">Scholarships</a></li>
                                <li><a href="admissions/forms.html">Admission Forms</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Support Column -->
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Support</h3>
                            <ul>
                                <li><a href="contact.html">Contact Us</a></li>
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
                            &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | University
                            of the Punjab, Gujranwala Campus
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>
</body>

</html>