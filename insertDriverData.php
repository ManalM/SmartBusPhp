
<?php
include_once 'Constants.php';

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Unable to Connect');
if(mysqli_connect_error($con))
{
  echo "fail";
}
$user_id=$_POST['id_driver'];
  $phone = $_POST['phone'];
  
$email = $_POST['email'];

$sql = "UPDATE drivers SET  phone = '$phone' , email ='$email'  WHERE username = '$user_id' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
