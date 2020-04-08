
<?php
include_once 'Constants.php';

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Unable to Connect');
if(mysqli_connect_error($con))
{
  echo "fail";
}
//if($_SERVER['REQUEST_METHOD']=='POST'){

  $comment=$_POST['comment'];
  $rating_starts = $_POST['stars'];
  $driver_name=$_POST['driver_name'];
$name = $_POST['student_name'];
//$time=$_POST['time'];
$formatted_time = date('Y-m-d');

//$sql = "UPDATE rate_student set comment = '$comment' ,stars ='$rating_starts',time = '$formatted_time' where student_name = '$name' and driver_name ='$driver_name';";
$sql = "Insert into  rate_student (student_name , driver_name,comment,stars,time) values ('$name','$driver_name','$comment','$rating_starts','$formatted_time') ";
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
