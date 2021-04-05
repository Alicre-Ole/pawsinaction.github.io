<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "UPDATE acreport SET status = 1 WHERE id = $id";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../rep.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>

