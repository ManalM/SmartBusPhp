<?php

require_once 'DbOperations.php';

$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){
        $db = new DbOperations();

  
            $user = $db->getDriver($_POST['child_name']);
            $response['name']= $user['username'];
       

}

echo json_encode($response);