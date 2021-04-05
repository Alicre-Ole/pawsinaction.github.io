<?php
    include_once('../utilities/dbconnect.php');
    $mission = $_POST['mission'];

    $query = "UPDATE mission SET mission = '$mission'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>