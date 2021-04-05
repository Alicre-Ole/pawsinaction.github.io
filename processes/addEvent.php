<?php
    include_once('../utilities/dbconnect.php');
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $sDate = $_POST['sDate'];
    $sTime = $_POST['sTime'];
    $eDate = $_POST['eDate'];
    $eTime = $_POST['eTime'];
    $location = $_POST['location'];

        $query = "INSERT INTO event (name, description, startDate, startTime, endDate, endTime, location) VALUES ('$name', '$desc', '$sDate', '$sTime', '$eDate', '$eTime', '$location')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../wc.php");
            }else{
                echo "Can't Connect to Database!";
        }

?>