<?php 
session_start();
// header('Content-Type: application/json');
include_once "db.php";
if($_SESSION['pin']=='9883239022')
{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // $_POST = json_decode(file_get_contents("php://input"),true);
    $sid=$conn->real_escape_string($_POST['id']);
    $class=$conn->real_escape_string($_POST['class']);
    $sec=$conn->real_escape_string($_POST['sec']);
    $roll=$conn->real_escape_string($_POST['roll']);

    $sql = $conn->query("SELECT * FROM pinku_umarks WHERE sid='$sid' AND class='$class' AND section='$sec' AND roll='$roll'");

    if($sql->num_rows>0)
    {
        $output=$sql->fetch_all(MYSQLI_ASSOC);
        echo json_encode($output);
    }
    else{
        echo json_encode(array('message'=>'No Record Found.', 'status'=>false));
    }
}
else{
    echo json_encode(array('message'=>'Invalid Request.', 'status'=>false));
}

?>
