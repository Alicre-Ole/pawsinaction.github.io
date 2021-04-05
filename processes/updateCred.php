<?php
    include_once('../utilities/dbconnect.php');
    $currUname = $_POST['currUname'];
    $currPass = $_POST['currPass'];
    $newUname = $_POST['newUname'];
    $newPass = $_POST['newPass'];
    $confirm = $_POST['confirm'];

    $sql = mysqli_query($conn,"SELECT * FROM admin");
    while($row = mysqli_fetch_array($sql)){
            $oUname = $row['username'];
            $oPass = $row['password'];
            if($currUname == $oUname && $currPass == $oPass){
                if($newPass == $confirm){
                    $query = "UPDATE admin SET username = '$newUname', password = '$newPass', confirm = '$confirm'";
                    //INSERT DATA TO DATABASE
                    if(mysqli_query($conn, $query)){
                        session_destroy();
                        header("Location: ../login.php");
                    }else{
                        echo "Can't Connect to Database!";
                    }
                }else{
                    echo "New Password Mismatched!";
                }
            }else{
                echo "Wrong Current Username or Password!";
            }
    }

?>

