<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home - Employee Leave Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="P" />
    <meta name="keywords" content="" />
    <meta content="" name="author" />

    <!-- Pixeden Icon -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7.css" />

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" sizes="16x16" href="image/logo.jpeg">
    
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/toastr.css">

</head>
<body style="height:100vh;" class="d-flex flex-column">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-light">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    <li class="nav-item">
                        <a href="Employee/index.php" class="nav-link">Employee Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin/index.php">Admin Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
<section class="hero-7-bg position-relative bg-gradient-primary" id="home">
    <div class="hero-7-bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-title">
                    <h3 class="hero-7-title">
                        <span class="text-wrapper">
                            <span class="text-light font-weight-normal"> Employee Leave Management System </span></span></h3>
                    <p class="text-light-70 mb-4 pb-2">
                    Employee leave management is the process by which employers ensure that staff absences are properly tracked and managed to maintain departmental efficiency. It involves handling leave requests, monitoring leave balances, and ensuring that the absence of any employee does not disrupt the department's goals.       The system helps build and maintain good relationships with staff by ensuring fairness and transparency in leave approvals. It also involves monitoring the department’s workforce, measuring the impact of absences, and identifying any areas for improvement. This way, department heads can recognize patterns in employee leave, ensure fair distribution, and celebrate achievements like consistent attendance.

                    By using a leave management system, the department can improve planning, reduce disruptions, and create a supportive environment where both organizational goals and staff well-being are prioritized.
                        
                    </p>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="hero-login-form mx-auto p-4 rounded mt-5 mt-lg-0 bg-white">
                    <div class="text-center">
                        <h6 class="form-title mb-4">A Case Study of Alqalam University Katsina</h6>
                    </div>
                    <img src="images/img1.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    
</section>

    <!-- Footer Start -->
    <section class="footer pt-0 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center footer-alt my-1">
                        <p class="f-15">
                            <?php include('inc/footer2.php') ; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->
    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- anime -->
    <script src="js/anime.min.js"></script>
    <!-- COUNTER -->
    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
    
    <script src="js/site.js"></script>
    <script src="js/general.js"></script>
    <script src="app-assets/vendors/js/toastr.min.js" type="text/javascript"></script>
    <script src="lib/jquery-validation/dist/jquery.validate.js"></script>
    
</body>
</html>
