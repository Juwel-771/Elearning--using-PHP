<?php
include_once('../dbconnection.php');

    if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['password'])){

        $stuname = $_POST['stuname'];
        $stuemail = $_POST['stuemail'];
        $password = $_POST['password'];

        $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ($stuname, $stuemail, $password)";

        if($conn->query($sql) == TRUE){
            echo json_encode('ok');
        }else{
            echo json_encode('failed');
        }
    }
    ?>