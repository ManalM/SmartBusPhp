<?php
include_once 'Constants.php';
$user_id=$_POST['id_driver'];
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Unable to Connect');
if(mysqli_connect_error($con))
{
  echo "fail";
}


$sql="SELECT child_name FROM drivers_student where username = '$user_id'";

$result = $con->query($sql);
if($result)
{
while($row = mysqli_fetch_assoc($result))
$response[] = $row;
echo json_encode($response);
}

mysqli_close($con);

?>
