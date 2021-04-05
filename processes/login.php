<?php

    include_once('../utilities/dbconnect.php');
    //start session
    session_start();
    //is admin authenticated?
    $auth = FALSE;

    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            //from the database
            $uname = $row['username'];
            $pass = $row['password'];
            $conf = $row['confirm'];
        }
    }

    //check if already authenticated
    if (array_key_exists('auth', $_SESSION)){
        $auth = TRUE;
    }else{
        //fetch data from the submitted form
        $formname = $_POST['username'];
        $formpass = $_POST['password'];
        $formconf = $_POST['confirm'];

        if (array_key_exists('username', $_REQUEST)){
            $user = $_REQUEST['username'];
        }
        if (array_key_exists('password', $_REQUEST)){
            $key = $_REQUEST['password'];
        }
        if (array_key_exists('confirm', $_REQUEST)){
            $conf = $_REQUEST['confirm'];
        }
        
        //authentication
        if (($user == $uname) && ($key == $pass) && ($pass == $conf)){
            $auth = TRUE;
            /* Save the authorized state in the Session array */
            $_SESSION['auth'] = TRUE;            
        }
    }

    if ($auth){
        header("location: ../admin.php");
    }else{
        $msg = "Invalid Credentials!";
        header("location: ../login.php?msg=$msg");
    }

?>

