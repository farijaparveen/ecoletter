<?php
function status($sts){

    if($sts==1)
    {
        return '<span class="label label-warning">Pending</span>';
    }
    if($sts==2)
    {
        return '<span class="label label-success">Approved</span>';
    }

    if($sts==3)
    {
        return '<span class="label label-danger">Rejected</span>';
    }


}

function displaydate($date)
{
    $date= new DateTime($date) ;
    return $date->format('d-m-Y');


}
function datetime($date)
{
    $date= new DateTime($date) ;
    return $date->format('d-m-Y g:i A');





}

function displaytime($time)
{
    $time= new DateTime($time) ;

    return $time->format( 'g:i A');
}

function facultyname($fid, $db)
{
    $sql4="SELECT name FROM `faculty_data` WHERE faculty_id=".$fid;


    $res4=mysqli_query($db, $sql4);
    $fac=mysqli_fetch_array($res4);
    return $fac['name'];
}

function studentname($lid, $db)
{
    $namesql="SELECT name from student_data WHERE student_id=".$lid;
    $lresult=mysqli_query($db, $namesql);
    $name=mysqli_fetch_array($lresult);
    return $name['name'];


}


function  hoddepartment($id, $db)
{
    $depsql="SELECT department from hod_data WHERE hod_id=".$id;
    $lresult=mysqli_query($db, $depsql);
    $name=mysqli_fetch_array($lresult);
    return $name['department'];

}

?>