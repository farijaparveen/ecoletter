<?php

include('../../session.php');
role_check($_SESSION['role'],6);


?>
<?php

$message = "";

if(isset($_POST['submit'])) {
    $userid = $_POST['regnum'];
    $password = $_POST['regnum'];
    $stdntid = $_POST['regnum'];
    $stdname = $_POST['name'];
    $stdtyp = $_POST['studenttype'];
    $year = $_POST['year'];
    $dept = $_POST['department'];
    $sec = $_POST['section'];
    $gender = $_POST['gender'];
    $email = $_POST['mailid'];
    $dob = $_POST['dob'];
    $phnno = $_POST['mobno'];
    $fathername = $_POST['fathername'];
    $fathermob = $_POST['fmobno'];
    $bloodgrp = $_POST['bldgrp'];
    $address = $_POST['address'];


    $sql1="INSERT into student_data (student_id, name, studenttype, year, department, section,  gender, email, dob, phno, fathernam, fathermob, bldgrp, address) 
VALUES ('$stdntid', '$stdname','$stdtyp', '$year','$dept','$sec','$gender','$email','$dob','$phnno','$fathername','$fathermob','$bloodgrp','$address')";
    $res1 = mysqli_query($db, $sql1);



    $sql = "INSERT into login (userid, password, role) VALUES ('$userid', '$password', 1)";
    $res = mysqli_query($db, $sql);
    if($res)
    {

        $message="
<div class=\"callout callout-success\">
                <h4>Successfull!</h4>

                <p>New student is added</p>
              </div>";
    }else{

        $message='<div class="callout callout-danger">
                <h4>unsuccesfull!</h4>

                <p>Error occured!Check the details properly.</p>
              </div>';

    }


}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="/favicon.png" rel="icon" type="image/x-icon" />    <title>Eco Letter| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/jvectormap/jquery-jvectormap.css">

    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo $baseurl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>E</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Eco</b>Letter</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="/logout.php"><i class="fa fa-sign-out"></i> Log out</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <div class="user-panel">
                <div class="pull-left image"><img src="<?php echo $baseurl; ?>/dist/img/admin.png" class="img-circle"
                                                  alt="User Image"></div>
                <div class="pull-left info"><p>Admin Name</p>                    <a href="#"><i
                                class="fa fa-circle text-success"></i> Admin</a></div>
            </div>
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li><a href="../index.php"><i class="fa fa-area-chart"></i><span>Dashboard</span></a></li>


                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Student</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="add-student.php"><i class="fa  fa-user-plus"></i> Add </a></li>
                        <li><a href="remove-student.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-graduation-cap"></i> <span> Faculty</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../faculty/add-faculty.php"><i class="fa fa-user-plus"></i> Add </a></li>
                        <li><a href="../faculty/remove-faculty.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-university"></i> <span> Warden</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../warden/add-warden.php"><i class="fa  fa-user-plus"></i> Add </a></li>
                        <li><a href="../warden/remove-warden.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>

                <li><a href="../notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>



            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add
                <small>Add Student to Eco Letter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="row">

                <div class="col-md-12">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Adding New Student</h3>
                        </div>
                        <?php if(isset($message)){ echo $message;} ?>

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="" method="post" class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Name of the Student">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="reg" class="col-sm-2 control-label">Register Number</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="reg" name="regnum"
                                               placeholder="Register Number of the Student">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gender</label>

                                    <div class="col-sm-10">

                                        <select name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Student type</label>

                                    <div class="col-sm-10">

                                <select name="studenttype" class="form-control">
                                    <option value="hosteller">Hosteller</option>
                                    <option value="dayscholar">Day scholar</option>

                                </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date</label>

                                    <div class="col-sm-10">


                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="dob" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Year of Study</label>

                                    <div class="col-sm-10">

                                        <select name="year" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Department</label>

                                    <div class="col-sm-10">

                                        <select name="department" class="form-control">
                                            <option value="CSE">B.E-Computer Science and Engineering</option>
                                            <option value="IT">B.Tech-Information Technology</option>
                                            <option value="ECE">B.E-Electronics and Communication Engineering/option>
                                            <option value="EEE">B.E-Electronics and Electrical Engineering</option>
                                            <option value="MECH">B.E-Mechanical Engineering</option>
                                            <option value="CIVIL">B.E-Civil Engineering</option>
                                            <option value="EI">B.E-Electronics and Instrumentation Engineering</option>
                                            <option value="MBA">Master of Buisness Administration</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="section" class="col-sm-2 control-label">Section</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="section" name="section"
                                               placeholder="Section of the Student">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="mailid" class="col-sm-2 control-label">EMail ID</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="mailid"
                                               placeholder="Mail id of the student">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mobno" class="col-sm-2 control-label">Mobile Number</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="mobno" name="mobno"
                                               placeholder="Mobile number of the student">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="fathername" class="col-sm-2 control-label">Father Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fathername" name="fathername"
                                               placeholder=" Father name of the Student">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fmobno" class="col-sm-2 control-label">Father Mobile Number</label>

                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="fmobno" name="fmobno"
                                               placeholder="Father's phone number of the student">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Blood Group</label>

                                    <div class="col-sm-10">

                                        <select name="bldgrp" class="form-control">
                                            <option value="O+">O positive</option>
                                            <option value="O-">O negative</option>
                                            <option value="A+">A positive</option>
                                            <option value="A-">A negative</option>
                                            <option value="B+">B positive</option>
                                            <option value="B-">B negative</option>
                                            <option value="AB+">AB positive</option>
                                            <option value="AB-">AB negative</option>

                                        </select>
                                    </div>
                                </div>







                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">

                                        <textarea name="address" class="form-control" rows="3"
                                                  placeholder="Enter the address"></textarea>

                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" name="submit" value="submit" class="btn btn-info pull-right">Submit</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>




                    </div>
                    <!-- /.box -->


                </div>


            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; Eco Letter.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $baseurl; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $baseurl; ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->



<script src="<?php echo $baseurl; ?>/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo $baseurl; ?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo $baseurl; ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo $baseurl; ?>/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo $baseurl; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $baseurl; ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $baseurl; ?>/bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $baseurl; ?>/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseurl; ?>/dist/js/demo.js"></script>


<script src="<?php echo $baseurl; ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<script src="<?php echo $baseurl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>
