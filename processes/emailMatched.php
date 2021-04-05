<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];
    $pID = $_GET['pID'];

    $animal = mysqli_query($conn, "SELECT * FROM animals WHERE id = '$pID'");
    $wisher = mysqli_query($conn, "SELECT * FROM wishers WHERE id = '$id'");
    while($row = mysqli_fetch_array($wisher)){
        $wName = $row['name'];
        $email = $row['email'];
        while($row = mysqli_fetch_array($animal)){
            $pName = $row['name'];

            //SEND EMAIL TO THE MATCHED WISH LIST
            $to = $email;
            $subject = "Wished Pet Matched!";
                
            $message = "<b>GREAT $wName! Your wished Pet just landed on the system. You are notified based on you desired animal type, gender and energy level.</b>";
            $message .= "<h2>You may now grab ($pName) by clicking on its profile in animals section of the website and apply for adoption. Thank you. <br><br> Hurry!</h2>";
                
            $header = "From:lcaabato@gmail.com \r\n";
            $header .= "Cc:lcaabato@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
                
            $retval = mail($to,$subject,$message,$header);
                
            if( $retval == true ) {
                header("location: ../wl.php");
            }else {
                echo "Message could not be sent...";
            }
        }
    }

?>

