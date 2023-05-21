<?php
 
/* x-www-form-urlencoded */
//$user_id = isset($_POST['user_id'])? $_POST['user_id']: '';
//print_r($_POST);

/* Raw json */
$data = json_decode(file_get_contents('php://input'));

print_r(json_encode($data));
