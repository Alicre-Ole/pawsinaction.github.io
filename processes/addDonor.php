<?php
    include_once('../utilities/dbconnect.php');
    $month = $_POST['month'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];

        $query = "INSERT INTO donor (month, name, amount) VALUES ('$month', '$name', '$amount')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../wc.php");
            }else{
                echo "Can't Connect to Database!";
        }

?>