<?php
    include_once('../utilities/dbconnect.php');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $type = $_POST['aType'];
    $loc = $_POST['location'];
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
    }else{
        $query = "INSERT INTO lfreport (name, number, email, type, location, caption, picture, posted) VALUES ('$name', '$number', '$email', '$type', '$loc', '".addslashes($cap)."', '$picture', '$status')";
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