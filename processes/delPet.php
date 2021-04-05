<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['pID'];

    $query = "DELETE FROM animals WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../admin.php");
    }else{
        echo "Pet's Not Deleted!";
    }

?>

