<?php 
include('../inc/topbar.php'); 

if(isset($_POST["btnsubmit"])) {

    $employeeID = 'STAFF/ADUSTECH/' . date("Y") . '/' . rand(1000, 5009);
    $sql = 'INSERT INTO tblemployee(employeeID, fullname, password, sex, email, dob, phone, address, qualification, dept, employee_type, date_appointment, basic_salary, gross_pay, status, leave_status, photo) 
            VALUES(:employeeID, :fullname, :password, :sex, :email, :dob, :phone, :address, :qualification, :dept, :employee_type, :date_appointment, :basic_salary, :gross_pay, :status, :leave_status, :photo)';
    
    $statement = $dbh->prepare($sql);
    $statement->execute([
        ':employeeID' => $employeeID,
        ':fullname' => $_POST['txtfullname'],
        ':password' => $_POST['txtpassword'],
        ':sex' => $_POST['cmdsex'],
        ':email' => $_POST['txtemail'],
        ':dob' => $_POST['dob'],
        ':phone' => $_POST['txtphone'],
        ':address' => $_POST['address'],
        ':qualification' => $_POST['qualification'],
        ':dept' => $_POST['cmddept'],
        ':employee_type' => $_POST['cmdemployeetype'],
        ':date_appointment' => $_POST['appointmentdate'], 
        ':basic_salary' => $_POST['txtbasic_salary'],
        ':gross_pay' => $_POST['txtgross_pay'],
        ':status' => 1,
        ':leave_status' => 'Not Available',
        ':photo' => 'uploadImage/Profile/default.png'
    ]);

    if ($statement) {
        $_SESSION['success'] = 'Registration was Successful';
    } else {
        $_SESSION['error'] = 'Something went Wrong';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from verify.waeconline.org.ng/Individual/IndividualRegistration by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 15:21:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration - <?php echo $sitename ;?></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../css/iofrm-theme13.css">
    <link href="../css/auth.css" rel="stylesheet" />
    <link href="../plugin/TelPlugin/build/css/intlTelInput.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/switchery.min.css">
    <link href="../css/doublesided.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="../image/logo.jpeg">

</head>

<body style="height:100vh;overflow-y:auto;" class="d-flex flex-column">

    <div class="form-body">
        <div class="row">
            <div class="img-holder d-flex flex-column">
                <div class="aa"></div>
                <div class="bb"></div>
                <div class="info-holder" style="z-index:4;">
                    <br />
                    <a class=" btn btn-outline-light text-white" style="z-index: 10000;position: relative;" href="../Admin/employee_record.php">← Back</a>

                </div>
                <section class="footer pt-0 mt-auto bg-dark" style="z-index:1000">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center footer-alt my-1">
                                    <p class="f-15">
                                        <?php include('../inc/footer2.php'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="form-holder" style="height: 100%;overflow-y: auto; max-height:unset;">
                <div class="aa"></div>
                <div class="bb"></div>

                <div class="form-content" style="max-height: unset;">

                    <div class="form-items card" style="z-index:100">
                    <img src="../image/logo.png" alt="" class="logo-light" height="81">

                        <div class="card-header d-flex flex-wrap">
                            <h4 class="mr-auto my-auto text-center">Employee Registration</h4>
                            <div class="ml-auto"></div>
                        </div>

                        <div class="card-body">
                        <form method="post" id="regForm" class="form form-horizontal" novalidate autocomplete="off" action="">
                            <div class="form-body">
                                <div class="row">
                                    <!-- Fullname -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="text" placeholder="Fullname" required 
                                                data-validation-required-message="Fullname is required" id="txtfullname" name="txtfullname" value="">
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="text" placeholder="Mobile Number" required 
                                                data-validation-required-message="Mobile Number is required" id="txtphone" name="txtphone" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Sex -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <select class="form-control" required data-validation-required-message="Select Sex" 
                                                id="cmdsex" name="cmdsex">
                                                <option value="">Select Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input type="email" autocomplete="off" class="form-control" required 
                                                data-validation-required-message="Email Address is required" 
                                                placeholder="Email Address" id="txtemail" name="txtemail" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Password -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="Password" placeholder="Password" required 
                                                data-validation-required-message="Password is required" id="txtpassword" name="txtpassword">
                                        </div>
                                    </div>
                                    <!-- Department -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <select class="form-control" required data-validation-required-message="Select Employee Department" 
                                                id="cmddept" name="cmddept">
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Computer Science">Software Engineering</option>
                                                <option value="Computer Science">Cyber Security</option>
                                                <option value="Computer Science">Information Technology</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Employee Type -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <select class="form-control" required data-validation-required-message="Select Employee Type" 
                                                id="cmdemployeetype" name="cmdemployeetype">
                                                <option value="">Select Employee Type</option>
                                                <option value="Academic">Academic</option>
                                                <option value="Non-Academic">Non-Academic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Basic Salary -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="number" placeholder="Basic Salary" required 
                                                data-validation-required-message="Basic Salary is required" id="txtbasic_salary" name="txtbasic_salary" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Gross Pay -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="number" placeholder="Gross Pay" required 
                                                data-validation-required-message="Gross Pay is required" id="txtgross_pay" name="txtgross_pay" value="">
                                        </div>
                                    </div>
                                    <!-- Date of Birth -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="date" placeholder="Date of Birth" required 
                                                data-validation-required-message="Date of Birth is required" id="dob" name="dob" value="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Fields (Address, Qualification, Appointment Date) -->
                                <div class="row">
                                    <!-- Address -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="text" placeholder="Address" required 
                                                data-validation-required-message="Address is required" id="address" name="address" value="">
                                        </div>
                                    </div>
                                    <!-- Qualification -->
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="text" placeholder="Qualification" required 
                                                data-validation-required-message="Qualification is required" id="qualification" name="qualification" value="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Date of Appointment -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 form-group mb-2">
                                        <div class="controls">
                                            <input class="form-control" type="date" placeholder="Date of Appointment" required 
                                                data-validation-required-message="Date of Appointment is required" id="appointmentdate" name="appointmentdate" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex flex-wrap">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <button name="btnsubmit" type="submit" class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="../app-assets/js/form-validation.js" type="text/javascript"></script>
    <script src="../../www.google.com/recaptcha/api6979.js?render=6Lf3z9wUAAAAAPTC6tPRnbU73Vnq_OGvNHzEgFxi"></script>
    <script src="../plugin/TelPlugin/build/js/intlTelInput.min.js"></script>
    <script src="../plugin/TelPlugin/build/js/intlTelInput-jquery.min.js"></script>
    <script src="../app-assets/vendors/js/switchery.min.js" type="text/javascript"></script>
    <script src="../app-assets/js/switch.min.js" type="text/javascript"></script>
    <script src="../js/doublesided.js"></script>
    
    <script src="../js/IndividualRegistration.js"></script>



    <link rel="stylesheet" href="../css/popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong> 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong> 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>

<!-- Mirrored from verify.waeconline.org.ng/Individual/IndividualRegistration by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 15:21:31 GMT -->
</html>