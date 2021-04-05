<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "DELETE FROM adopt WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../ado.php");
    }else{
        echo "Adoption Application Not Deleted!";
    }

?>

