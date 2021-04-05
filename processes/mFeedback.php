<?php

    include_once('../utilities/dbconnect.php');
    $email = $_POST['email'];
    $content = $_POST['content'];
    $status = $_POST['status'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $mEmail = "Invalid Email Address!";
        echo $mEmail;
    }else{
        if(!preg_match("/^[a-zA-Z.0-9-' ]*$/",$content)) {
            $mContent = "Invalid Message/Feedback!";
            echo $mContent;
        }else{
            $query = "INSERT INTO mFeedback (email, content, status) VALUES ('$email', '$content', '$status')";
            //INSERT DATA TO DATABASE
            if(mysqli_query($conn, $query)){
                $msg = "Thank you for your Message/Feedback!";
                header("Location: ../index.php?msgFeedback=".$msg);
            }else{
                echo "Can't connect to Database!";
            }
        }
    }
?>