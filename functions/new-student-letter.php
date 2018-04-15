<?php

include('../config.php');
include ('../custom-functions.php');

$through=$_POST['through'];
$department=$_POST['department'];
if(isset( $_POST['principal'])) {
    $principal = $_POST['principal'];
}else{ $principal = 0;}
if(isset($_POST['hod'])) {
    $hod = $_POST['hod'];
}else{$hod = 0;
}



$type=$_POST['type'];
$duration=$_POST['duration'];
$subject=$_POST['subject'];
$content=$_POST['content'];
$user=$_POST['user'];
$day=$_POST['days'];



$curentid="SELECT `letter_id` from `letter_content` ORDER BY letter_id DESC LIMIT 1";
$cid=mysqli_query($db, $curentid);
$rw=mysqli_fetch_array($cid);
$letterid=$rw['letter_id']+1;


$sql="Insert into `letter_content`(`letter_id`, `sender`, `receiver`, `type`, `subject`, `message`, `department`, `duration`, `days`, `status`) VALUES ('$letterid', '$user','', '$type', '$subject', '$content', '$department', '$duration', '$day', 1 )";
$result=mysqli_query($db, $sql);



foreach ($through as $value) {
    $letter = "INSERT INTO letter_index (letter_id, faculty_id, role, status) VALUES ('$letterid', '$value', 'Faculty', 0)";
    $result1=mysqli_query($db, $letter);

}

if($hod!=1 && $principal!=1){
$s1="update letter_content SET receiver=1 where letter_id=".$letterid;
mysqli_query($db, $s1);
}
if($hod==1){
    $s1="update letter_content SET receiver=2 where letter_id=".$letterid;
    mysqli_query($db, $s1);
}
if($principal==1){
    $s1="update letter_content SET receiver=3 where letter_id=".$letterid;
    mysqli_query($db, $s1);
}








if($result1)
{

    echo '<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times; </span></button>
  <h4 class="modal-title">Success ! New Letter Submitted.</h4>
  </div>
  <div class="modal-footer">
  <button type="button"  class="btn btn-outline" data-dismiss="modal">Close</button>
  </div>
  </div>
  </div>
  </div>
  <script>
  $(\'#modal-success\').modal(\'show\');
  </script>';
}else{

    echo '<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times; </span></button>
  <h4 class="modal-title">Success ! Letter Submitted.</h4>
  </div>
  <div class="modal-footer">
  <button type="button"  class="btn btn-outline" data-dismiss="modal">Close</button>
  </div>
  </div>
  </div>
  </div>
  <script>
  $(\'#modal-danger\').modal(\'show\');
  </script>';

}


