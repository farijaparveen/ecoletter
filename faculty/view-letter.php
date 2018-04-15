<?php

include('../session.php');
role_check($_SESSION['role'], 2);
include('../custom-functions.php');
?>

<?php

$letterid = $_GET['id'];

$sql8 = "SELECT name from faculty_data WHERE faculty_id='" . $_SESSION['login_user'] . "'";
$result8 = mysqli_query($db, $sql8);
if (mysqli_num_rows($result8) > 0) {
    $row = mysqli_fetch_assoc($result8);
    $fname = $row['name'];

} else {
    echo "0 results";
}
$sts = "SELECT receiver from letter_content where letter_id=" . $letterid;
$runsts = mysqli_query($db, $sts);
$stst = mysqli_fetch_array($runsts);


if (isset($_POST['approved'])) {
    $runsql1 = "update letter_index SET name='$fname', role='Faculty', status=2, comments='" . $_POST['comments'] . "' WHERE faculty_id='" . $_SESSION['login_user'] . "' AND letter_id=" . $letterid;
    $runsql2 = "update letter_content SET status=1 WHERE letter_id=" . $letterid;

    $res = mysqli_query($db, $runsql1);
    $res2 = mysqli_query($db, $runsql2);


    if ($stst['receiver'] == 1) {

        $runsql4 = "update letter_content SET status=2 WHERE letter_id=" . $letterid;
        $res4 = mysqli_query($db, $runsql4);
    } else {

        $runsql5 = "update letter_content SET hod=1 WHERE letter_id=" . $letterid;
        $res5 = mysqli_query($db, $runsql5);
    }


    if ($res) {
        $msg = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Approved!</h4>
                Success alert preview. This alert is dismissable.
              </div>';


    } else {

        $new = mysqli_error($db);
        $msg = '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Problem ar!</h4>
                Warning alert preview. This alert is dismissable. ' . $new . '
              </div>';

    }


}

if (isset($_POST['rejected'])) {

    $runsql1 = "update letter_index SET name='$fname', role='Faculty',  status=3, comments='" . $_POST['comments'] . "' WHERE faculty_id='" . $_SESSION['login_user'] . "' AND letter_id=" . $letterid;
    $runsql2 = "update letter_content SET status=3 WHERE letter_id=" . $letterid;

    $res = mysqli_query($db, $runsql1);
    $res2 = mysqli_query($db, $runsql2);

    if ($res) {
        $msg = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div>';


    } else {
        $msg = '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Warning alert preview. This alert is dismissable.
              </div>';

    }


}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/favicon.png" rel="icon" type="image/x-icon"/>
    <title>Eco Letter| Dashboard</title>
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
<body class="hold-transition skin-blue sidebar-mini fixed">
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
                <div class="pull-left info"><p><?php
                        $sql = "SELECT name from faculty_data WHERE faculty_id='" . $_SESSION['login_user'] . "'";
                        $result = mysqli_query($db, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['name'];

                        } else {
                            echo "0 results";
                        }


                        ?></p>          </p>                    <a href="#"><i
                                class="fa fa-circle text-success"></i> Faculty</a></div>
            </div>
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>


                <li><a href="index.php"><i class="fa fa-pie-chart"></i><span>Dashboard</span></a></li>
                <li><a href="new-letter.php"><i class="fa fa-plus-square"></i> <span>New Letter</span></a></li>
                <li class="active"><a href="manage-letter.php?option=pending"><i class="fa fa-tasks"></i> <span>Manage Letters</span></a>
                </li>
                <li><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
                <li><a href="profile.php"><i class="fa fa-user-circle"></i> <span>Profile</span></a></li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <?php

        $letterid = $_GET['id'];


        $lsql = "SELECT * FROM `letter_content` WHERE letter_id=" . $letterid . " AND status>0";

        $res1 = mysqli_query($db, $lsql);

        $letter = mysqli_fetch_array($res1);


        $studsql = "SELECT * FROM `student_data` WHERE student_id=" . $letter['sender'];

        $res2 = mysqli_query($db, $studsql);

        $student = mysqli_fetch_array($res2);


        ?>


        <section class="content-header">
            <h1>
                Read or Approve Letter
                <small><?php echo $letter['letter_id']; ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">View Letter</li>
            </ol>
        </section>

        <!-- Main content -->


        <section class="container">

            <div class="row" style="padding: 10px;">
                <div class="col-md-6" style="background: #fff;padding: 10px;">

                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-envelope-open text-blue"></i> <?php echo $letter['type']; ?>.
                                <small class="pull-right">Applied Date: <?php echo $letter['timestamp']; ?></small>
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong><?php echo $student['name']; ?>.</strong><br>
                                <?php echo $student['year']; ?> Year <?php echo $student['section']; ?><br>
                                <?php echo $student['department']; ?><br>

                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong><?php if ($letter['receiver'] > 1) {
                                        echo "The Principal";
                                    } else if ($letter['receiver'] > 0) {
                                        echo "The HOD<br>";
                                        echo $letter['department'];

                                    } else {

                                        echo "Faculty(s)";
                                    }


                                    ?></strong><br>
                                Saveetha Engineering College<br>

                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">

                            <b><i class="fa fa-calendar-times-o"></i> Number of Days :</b>
                            <?php echo $letter['days']; ?><br>

                            <b><i class="fa fa-calendar-check-o"></i> Date :</b><br>
                            <?php echo $letter['duration']; ?>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row text-muted well well-sm no-shadow">
                        <b><i class="fa fa-calendar-check-o"></i> Subject : <?php echo $letter['subject']; ?></b>


                    </div>


                    <p style="font-size: large;">
                        <?php echo $letter['message']; ?>
                    </p>

                    <!-- this row will not appear when printing -->

                    <form id="comment" method="post" action="">

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="manage-letter.php?option=pending" class="btn btn-default"><i
                                            class="fa fa-clock-o"></i> May be
                                    Later</a>
                                <button type="submit" name="approved" value="approve"
                                        class="btn btn-success pull-right"><i class="fa fa-check"></i> Approve
                                    Letter
                                </button>
                                <button type="submit" name="rejected" value="reject" class="btn btn-danger pull-right"
                                        style="margin-right: 5px;">
                                    <i class="fa fa-ban"></i> Reject Letter
                                </button>
                            </div>
                        </div>

                        <HR>
                        <div class="box-footer">
                            <img class="img-responsive img-circle img-sm" src="../dist/img/faculty.png" alt="Alt Text">
                            <!-- .img-push is used to add margin to elements next to floating images -->
                            <div class="img-push">
                                <textarea class="form-control" name="comments" placeholder="Enter comment"></textarea>
                            </div>
                        </div>


                        <?php if (isset($msg)) {
                            echo $msg;
                        } ?>
                    </form>
                </div>


                <div class="col-md-6">
                    <h2 class="page-header">People associated with this letter</h2>


                    <div class="box-footer box-comments">

                        <?php

                        $sql = "SELECT * FROM `letter_index` WHERE letter_id=" . $letterid;
                        $res = mysqli_query($db, $sql);
                        while ($comment = mysqli_fetch_array($res)) {

                            echo '<div class="box-comment">

                            
                            <img class="img-circle img-sm" src="../dist/img/faculty.png" alt="User Image">

                            <div class="comment-text">
                      <span class="username">
                        ' . facultyname($comment["faculty_id"], $db) . ' ' . status($comment['status']) . '
                        <span class="text-muted pull-right">' . datetime($comment["timestamp"]) . '</span>
                      </span><!-- /.username -->
                                
                                ' . $comment['comments'] . '
                                
                                
                                
                            </div>
                            <!-- /.comment-text -->
                        </div><br>';

                        }


                        ?>


                        <!-- /.box-comment -->

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
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
    $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>

<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>
