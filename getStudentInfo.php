<?php

require_once 'DbOperations.php';

$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){
        $db = new DbOperations();

  
            $user = $db->getStudentInfo($_POST['first_name']);
            $response['last_name'] = $user['name'];
            $response['phone'] = $user['phone'];
            $response['first_name'] = $user['child_name'];
            $response['adress'] = $user['address'];
            $response['health'] = $user['health'];

}

echo json_encode($response);
