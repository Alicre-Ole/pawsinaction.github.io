<?php
    include_once('../utilities/dbconnect.php');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $aType = $_POST['aType'];
    $cType = $_POST['cType'];
    $res = $_POST['resName'];
    $cap = $_POST['caption'];
    $status = $_POST['status'];
    $picture = $_FILES['picture']['name'];
    $target_dir = "../reports/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);

               
    if (!preg_match("/^([a-zA-Z' ]+)$/", $name)){
        echo "Name should only contain required characters!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email should only contain required characters!";
    }elseif(!preg_match ("/^[0-9]*$/", $number)){
        echo "Number should only contain required characters!";
    }elseif(!preg_match("/^([a-zA-Z' ]+)$/", $res)){
        echo "Responsible Name should only contain required characters!";
    }else{
        $query = "INSERT INTO acreport (name, number, email, aType, cType, responsible, caption, picture, status) VALUES ('$name', '$number', '$email', '$aType', '$cType', '$res', '".addslashes($cap)."', '$picture', '$status')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            if(move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)){
                header("Location: ../report.php");
            }else{
                echo "Can't Upload picture!";
            }
        }else{
            echo "Can't Connect to Database!";
        }
    }

?>