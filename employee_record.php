<?php
include('../inc/topbar.php');
if(empty($_SESSION['admin-username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Records | <?php echo $sitename; ?></title>
  <link rel="icon" type="image/png" sizes="16x16" href="../<?php echo $logo; ?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <script type="text/javascript">
    function Activate(fullname) {
      if(confirm("ARE YOU SURE YOU WISH TO ACTIVATE " + fullname + " FROM THE DATABASE?")) {
        return true;
      } else {
        return false;
      }
    }
    function Deactivate(fullname) {
      if(confirm("ARE YOU SURE YOU WISH TO DEACTIVATE " + fullname + " FROM THE DATABASE?")) {
        return true;
      } else {
        return false;
      }
    }
    function deldata(fullname) {
      if(confirm("ARE YOU SURE YOU WISH TO DELETE " + fullname + " FROM THE DATABASE?")) {
        return true;
      } else {
        return false;
      }
    }
  </script>

  <style type="text/css">
    .style7 {
      vertical-align: middle; 
      cursor: pointer; 
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none; 
      border: 1px solid transparent; 
      padding: .375rem .75rem; 
      line-height: 1.5; 
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      display: inline-block; 
      color: #212529; 
      text-align: center;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../<?php echo $row_admin['photo']; ?>" alt="User Image" width="140" height="141" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row_admin['fullname']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php include('sidebar.php'); ?>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">&nbsp;</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Records</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <p>&nbsp;</p>
          <table width="1204" height="227" border="0" align="center">
            <tr>
              <td width="1090" height="184"><div class="card">
                <div class="card-header">
                <div class="card-footer">
                  <a class="btn btn-primary" href="../Account/registration.php">Add Employee</a>

                </div>
                 </div>
                <!-- /.card-header -->
              <div class="card-body">
                <table width="85%" align="center" class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th><div align="center"><span class="style1">#</span></div></th>
                      <th><div align="center"><span class="style1">Photo</span></div></th>
                      <th><div align="center"><span class="style1">Employee ID</span></div></th>
                      <th><div align="center"><span class="style1">Full Name</span></div></th>
                      <th><div align="center"><span class="style1">Email</span></div></th>
                      <th><div align="center"><span class="style1">Phone</span></div></th>
                      <th><div align="center"><span class="style1">Department</span></div></th>
                      <th><div align="center"><span class="style1">Action</span></div></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = $dbh->query("SELECT * FROM tblemployee ORDER BY employeeID DESC")->fetchAll();
                    $cnt = 1;
                    foreach ($data as $row) {
                    ?>
                      <tr class="gradeX">
                        <td><div align="center" class="style2"><?php echo $cnt; ?></div></td>
                        <td><div align="center" class="style2"><img src="../<?php echo $row['photo']; ?>" width="50" height="43" border="2"/></div></td>
                        <td><div align="center" class="style2"><?php echo $row['employeeID']; ?></div></td>
                        <td><div align="center" class="style2"><?php echo $row['fullname']; ?></div></td>
                        <td><div align="center" class="style2"><?php echo $row['email']; ?></div></td>
                        <td><div align="center" class="style2"><?php echo $row['phone']; ?></div></td>
                        <td><div align="center" class="style2"><?php echo $row['dept']; ?></div></td>
                        <td>
                          <div align="center">
                            <a href="delete-employee.php?eid=<?php echo $row['employeeID']; ?>" onClick="return deldata('<?php echo $row['fullname']; ?>');">Delete</a>
                          </div>
                        </td>
                      </tr>
                    <?php $cnt = $cnt + 1; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <p>&nbsp;</p>
          </td>
        </tr>
      </table>
    </div>
  </div>
</section>
</div> <!-- /.content-wrapper --> <!-- Footer --> <footer class="main-footer"> <?php include('../inc/footer.php'); ?> 
</footer> <!-- Control Sidebar --> <aside class="control-sidebar control-sidebar-dark"></aside> 
</div> <!-- ./wrapper --> <!-- Scripts --> <script src="plugins/jquery/jquery.min.js"></script>
 <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
     <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 
     <script src="dist/js/adminlte.min.js"></script> 
     <script> $(function () { $("#example1").DataTable({ "responsive": true, "autoWidth": false, }); }); </script>
     </body> 
     </html>