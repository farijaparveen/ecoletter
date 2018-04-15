<?php

include('../session.php');
role_check($_SESSION['role'],1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="/favicon.png" rel="icon" type="image/x-icon" />    <title>Eco Letter| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/iCheck/all.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


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
<body class="hold-transition skin-red sidebar-mini fixed">
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
                <div class="pull-left image"><img src="../dist/img/student.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info"><p> <?php
                        $sql = "SELECT name from student_data WHERE student_id='".$_SESSION['login_user']."'";
                        $result = mysqli_query($db, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['name'];

                        } else {
                            echo "0 results";
                        }


                        ?></p>                    <a href="#"><i
                                class="fa fa-circle text-success"></i> Student</a></div>
            </div>
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>


                <li><a href="index.php"><i class="fa fa-pie-chart"></i><span>Dashboard</span></a></li>
                <li class="active"><a href="new-letter.php"><i class="fa fa-plus-square"></i>
                        <span>New Letter</span></a></li>
                <li><a href="manage-letter.php?option=pending"><i class=" fa fa-tasks"></i> <span>Manage Letters</span></a></li>
                <li><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
                <li><a href="profile.php"><i class="fa fa-user-circle"></i> <span>Profile</span></a></li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                New letter
                <small>Create new letter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">New Letter</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Letter</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form id="letter" role="form">
                            <div class="box-body">


                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Through</label>
                                            <select class="form-control select2" name="through[]" multiple="multiple" data-placeholder="Select the faculty"
                                                    style="width: 100%;">

                                                <?php
                                                $sql4="SELECT faculty_id, name from `faculty_data`";
                                                $ress=mysqli_query($db,$sql4);
                                                while ($rwo=mysqli_fetch_array($ress)) {
                                                    echo '<option value="'.$rwo['faculty_id'].'">'.$rwo['name'].' [faculty]</option>';
                                                }
                                                ?>


                                                <?php


                                                $std="SELECT studenttype from student_data WHERE studenttype=2 AND student_id='".$_SESSION['login_user']."'";
                                                $rstd=mysqli_query($db, $std);
                                                $or=mysqli_fetch_array($rstd);

                                                if($or[0]==2) {
                                                    $sql5 = "SELECT wardenid, name FROM `warden_data`";
                                                    $ress5 = mysqli_query($db, $sql5);
                                                    while ($rwo = mysqli_fetch_array($ress5)) {
                                                        echo '<option value="' . $rwo['wardenid'] . '">' . $rwo['name'] . ' [warden]</option>';
                                                    }
                                                }
                                                ?>





                                            </select>
                                        </div>

                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="to[]" value="prinicipal" class="minimal">
                                                    Principal </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="to[]" value="hod"  class="minimal-red">
                                                    HOD
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Days</label>
                                            <input type="number" class="form-control" name="days" id="exampleInputEmail1"
                                                   placeholder="Number of days">
                                        </div>


                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date and time:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <input type="text" name="duration" class="form-control pull-right" id="lettertime">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Letter Type</label>
                                            <select class="form-control select2" name="type" style="width: 100%;">
                                                <option value="leave">Leave Letter</option>
                                                <option value="pleave">Permission Letter</option>
                                                <option value="oleave">OD letter</option>
                                                <option value="sleave">Special Permission</option>
                                                <option value="eleave">Emergency</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="exampleInputEmail1"
                                           placeholder="Enter the subject">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="compose-textarea" name="content" class="form-control" style="height: 300px">
                      <h1><u>BODY OF LETTER</u></h1>
                    </textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <input type="hidden" value="<?php echo $_SESSION['login_user'] ; ?>" name="user" >

                            <?php

                            $sql="SELECT department FROM `student_data` WHERE student_id='".$_SESSION['login_user']."'";
                            $res=mysqli_query($db, $sql);
                            $row=mysqli_fetch_array($res);

                            ?>

                            <input type="hidden" value="<?php echo $row['department'] ; ?>" name="department" >

                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Submit Letter</button>
                            </div>
                        </form>


                        <div id="response"></div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
                        <script>
                            $(document).ready(function(){
                                $('#letter').submit(function(){

// show that something is loading
                                    $('#response').html('<b><i class="fa fa-spin fa-refresh"></i> Submitting Letter...</b>');

// Call ajax for pass data to other place
                                    $.ajax({
                                        type: 'POST',
                                        url: '/functions/new-student-letter.php',
                                        data: $(this).serialize() // getting filed value in serialize form
                                    })
                                        .done(function(data){ // if getting done then call.

// show the response
                                            $('#response').html(data);

                                        })
                                        .fail(function() { // if fail then getting message

// just in case posting your form failed
                                            alert( "Posting failed." );

                                        });

// to prevent refreshing the whole page page
                                    return false;

                                });
                            });
                        </script>





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
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>

<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->

<script>
    $(function () {

        $('.select2').select2()
//iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        $('input[name="duration"]').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'DD/MM/YYYY h:mm A'
            }
        });


        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>

<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>
