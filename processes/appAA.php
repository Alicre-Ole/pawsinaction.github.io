<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "UPDATE adopt SET status = 1 WHERE id = $id";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../ado.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>

