<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];
    $pID = $_GET['pID'];

    $animal = mysqli_query($conn, "SELECT * FROM animals WHERE id = '$pID'");
    $adopt = mysqli_query($conn, "SELECT * FROM adopt WHERE id = '$id'");
    while($row = mysqli_fetch_array($adopt)){
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        while($row = mysqli_fetch_array($animal)){
            $pName = $row['name'];

            //SEND EMAIL TO ADOPTER
            $to = $email;
            $subject = "Adoption Agreement Signing!";
                
            $message = "<b>You are PAWSome, $fname $lname! Your application for adoption is finally approved. You can now proceed to the final step which is Agreement Singing before $pName, your new pet lands on his/her FURRever home.</b>";
            $message .= "<h1>Steps</h1>
            <h3><b>1.</b> Go to http://www.SAMPLE.org/PAWSInAction/adopt_agreement.php</h3>
            <h3><b>2.</b> Enter the following details:
                <h6><b>Adoption ID:</b> $id</h6>
                <h6><b>Animal ID:</b> $pID</h6>
                <h6><b>First Name:</b> $fname</h6>
                <h6><b>Last Name:</b> $lname</h6>
            </h3>
            <h3><b>3.</b> Click on 'Submit' button</h3>
            <h3><b>3.</b> Read and Understand the Terms & Conditions</h3>
            <h3><b>3.</b> And Lastly, click on 'Adopt Now!' button</h3>
            ";
                
            $header = "From:lcaabato@gmail.com \r\n";
            $header .= "Cc:lcaabato@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
                
            $retval = mail($to,$subject,$message,$header);
                
            if( $retval == true ) {
                header("location: ../ado.php");
            }else {
                echo "Message could not be sent...";
            }
        }
    }

?>

