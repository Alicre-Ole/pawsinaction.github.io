<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "DELETE FROM disbursement WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../wc.php");
    }else{
        echo "FAQ's Not Deleted!";
    }

?>

