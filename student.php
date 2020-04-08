<?php

require_once 'DbOperations.php';

$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['id_driver'])){
        $db = new DbOperations();

        if($db->getStudentInfo($_POST['id_driver'])){
            $user = $db->getStudent($_POST['id_driver']);


    $response['child_name']=$user["child_name"];

        }else{

            $response[] = "wrong input";
        }

    }else{

        $response[] = "null";
    }
}

echo json_encode($response);
