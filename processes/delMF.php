<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "DELETE FROM mfeedback WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../admin.php");
    }else{
        echo "Message/Feedback Not Deleted!";
    }

?>

