<?php
include_once 'Constants.php';
$user_id=$_POST['student_name'];
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Unable to Connect');
if(mysqli_connect_error($con))
{
  echo "fail";
}


$sql="SELECT driver_name,stars, comment,time FROM rate_student WHERE student_name = '$user_id' ";

$result = $con->query($sql);
if($result)
{
while($row = mysqli_fetch_assoc($result))
$response[] = $row;
echo json_encode($response);
}

mysqli_close($con);

?>
