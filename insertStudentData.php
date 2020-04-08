
<?php
include_once 'Constants.php';

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Unable to Connect');
if(mysqli_connect_error($con))
{
  echo "fail";
}

  $health=$_POST['health'];
  $phone = $_POST['phone'];
  $user_id=$_POST['id_parent'];
$name = $_POST['first_name'];
$sql = "UPDATE parent_table SET  health = '$health' , phone = '$phone'  WHERE username = '$user_id' AND child_name = '$name' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
