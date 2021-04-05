<?php
    include_once('../utilities/dbconnect.php');
    $vision = $_POST['vision'];

    $query = "UPDATE vision SET vision = '$vision'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>