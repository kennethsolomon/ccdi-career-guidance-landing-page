<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<?php
include_once('./assets/includes/connection.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CCDI Sorsogon City</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php include_once('./assets/includes/navfixed.php'); ?>

    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Requirements for Enrolment:</h3>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>HS Report Card (F138) or Transcript of Record for Transferees.</li>
                        <li>Certificate of Good Moral Character.</li>
                        <li>Pictures:</li>
                        <ol>
                            <li type="a">1x1, color, 2 copies, blue background.</li>
                            <li type="a">2x2, color, 2 copies, blue background.</li>
                        </ol>
                        <li>NSO Birth Certificate (True Copy)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2 class="aboutSection">BACKGROUND</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">
                        More then <strong>two decades</strong> of quality education this is CCDI's legacy to the Bicolanos!
                    </p>
                    <p class="description">
                        Inspired by the founder, Hon. Felix R. Alfelor, Jr.'s mission of providing affordable quality computer
                        education to he underprivileged, CCDI continues to soar and satisfy the needs of the Bicolano youth amidst
                        rapid technological advancement and globalization.
                    </p>
                    <p class="description">
                        CCDI is a non-profit, private education institution that offers I.T. related programs at affordable rate.
                        It is dedicated and committed to providing quality education with heart for community and national development.
                    </p>
                    <p class="description">
                        CCDI is a specialized computer college recognized by the Comission on Higher Education (CHED) and accredited by the Technical
                        Education and Skills Development Authority (TESDA) and the Department of Education. It offers not only I.T. courses but
                        also short-term training programs for proffesionals and skilled workers.
                    </p>
                </div>
                <div class="title-area">
                    <h2>PHILOSOPHY</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">
                        Excellent education is best attained through <em>QUALITY</em> and <em>AFFORDABILITY</em>.
                    </p>
                </div>
                <div class="title-area">
                    <h2>VISION</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">
                        CCDI envisions of providing a service of leadership through excellent instructions that will produce empowered
                        and world-class I.T. graduates.
                    </p>
                </div>
                <div class="title-area">
                    <h2>MISSION</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">
                        We empower the lives we touch!
                    </p>
                </div>
                <div class="title-area">
                    <h2>CORE VALUES</h2>
                    <div class="separator separator-danger">✻</div>
                    <ul>
                        <li>EXCELLENCE</li>
                        <li>INTEGRITY</li>
                        <li>LEADERSHIP</li>
                        <li>SERVICE</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

    <!-- 
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image" style="background-image: url('assets/img/office-1.jpeg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Do you want to work with us?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> We are keen on creating a second skin for anyone with a sense of style! We design our clothes having our customers in mind and we never disappoint!</p>
                </div>

                <div class="button-get-started">
                    <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div> -->


    <footer class="footer footer-small footer-color-black" data-color="black">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">Find offers</a>
                                </li>
                                <li>
                                    <a href="#">Discover Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-dribbble"></i> Dribbble
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 
            <hr> -->
            <div class="copyright">
                © <script>
                    document.write(new Date().getFullYear())
                </script> CCDI, Sorsogon City
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>