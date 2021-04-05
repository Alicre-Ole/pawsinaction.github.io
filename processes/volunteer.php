<?php
    include_once('../utilities/dbconnect.php');
    $pID = $_GET['status'];
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $brgy = $_POST['brgy'];
    $number = $_POST['number'];
    $altNumber = $_POST['altNumber'];
    $email = $_POST['email'];
    $alergies = $_POST['alergies'];
    $vacc = $_POST['vacc'];
    $petOwned = $_POST['petOwned'];
    $hType = $_POST['hType'];
    $orgName = $_POST['orgName'];
    $orgCont = $_POST['orgCont'];
    $experience = $_POST['experience'];
    $moreComment = $_POST['moreComment'];
    $oExperience = $_POST['oExperience'];
    $oMoreComment = $_POST['oMoreComment'];
    $available = $_POST['available'];
    $willing = $_POST['willing'];
    $eCname = $_POST['eCname'];
    $eCnumber = $_POST['eCnumber'];
    $oShare = $_POST['oShare'];
    $fullName = $_POST['fullName'];

        $selExperience = implode(' | ',$experience);
        $selOexperience = implode(' | ',$oExperience);
        $selAvailable = implode(' | ',$available);
        $query = "INSERT INTO volunteer 
        (fName, lName, dob, address, barangay, number, altNumber, email, alergies, vacc, petOwned, hType, orgName, orgCont, experience, moreComment, oExperience, oMoreComment, available, willing, eCname, eCnumber, oShare, fullName, status)
        VALUES 
        ('$fName', '$lName', '$dob', '$address', '$barangay', '$number', '$altNumber', '$email', '$alergies', '$vacc', '$petOwned', '$hType', '$orgName', '$orgCont', '$selExperience', '$moreComment', '$selOexperience', '$oMoreComment', '$selAvailable', '$willing', '$eCname', '$eCnumber', '$oShare', '$fullName', '$status')";

        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../index.php");
        }else{
            echo "Can't Connect to Database!";
        }

?>