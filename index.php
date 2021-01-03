<?php 

if(isset($_POST['user']) && isset($_POST['pass']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $data = [];

    $data[] = array("u" => $user . "good", "p" => $pass . "boy");
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($data);

}

?>