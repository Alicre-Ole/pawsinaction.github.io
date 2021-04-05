<?php
    include_once('../utilities/dbconnect.php');
    $pID = $_GET['pID'];
    $fName = $_POST['fname'];
    $mi = $_POST['mi'];
    $lName = $_POST['lname'];
    $dob = $_POST['dob'];
    $nat = $_POST['nat'];
    $add = $_POST['add'];
    $tel = $_POST['tel'];
    $cell = $_POST['cell'];
    $email = $_POST['email'];
    $occ = $_POST['occ'];
    $hhName1 = $_POST['hhName1'];
    $hhRel1 = $_POST['hhRel1'];
    $hhAge1 = $_POST['hhAge1'];
    $hhName2 = $_POST['hhName2'];
    $hhRel2 = $_POST['hhRel2'];
    $hhAge2 = $_POST['hhAge2'];
    $hhName3 = $_POST['hhName3'];
    $hhRel3 = $_POST['hhRel3'];
    $hhAge3 = $_POST['hhAge3'];
    $hType = $_POST['hType'];
    $permit = $_POST['permit'];
    $supp = $_POST['supp'];
    $taught = $_POST['taught'];
    $move = $_POST['move'];
    $petWith = $_POST['petWith'];
    $type1 = $_POST['type1'];
    $breed1 = $_POST['breed1'];
    $age1 = $_POST['age1'];
    $gender1 = $_POST['gender1'];
    $sn1 = $_POST['sn1'];
    $type2 = $_POST['type2'];
    $breed2 = $_POST['breed2'];
    $age2 = $_POST['age2'];
    $gender2 = $_POST['gender2'];
    $sn2 = $_POST['sn2'];
    $type3 = $_POST['type3'];
    $breed3 = $_POST['breed3'];
    $age3 = $_POST['age3'];
    $gender3 = $_POST['gender3'];
    $sn3 = $_POST['sn3'];
    $adj = $_POST['adj'];
    $vacc = $_POST['vacc'];
    $fostered = $_POST['fostered'];
    $exp = $_POST['exp'];
    $reason = $_POST['reason'];
    $pResp = $_POST['pResp'];
    $fResp = $_POST['fResp'];
    $willing = $_POST['willing'];
    $whatWill = $_POST['whatWill'];
    $descr = $_POST['desc'];
    $pref = $_POST['pref'];
    $energy = $_POST['energy'];
    $hours = $_POST['hours'];
    $takeCare = $_POST['takeCare'];
    $diet = $_POST['diet'];
    $others = $_POST['others'];
    $status = $_POST['status'];


        $query = "INSERT INTO foster 
        (pID, fName, mi, lName, dob, nat, address, tel, cell, email, occ, hhName1, hhRel1, hhAge1, hhName2, hhRel2, hhAge2, hhName3, hhRel3, hhAge3, hType, permit, supp, taught, move, petWith, type1, breed1, age1, gender1, sn1, type2, breed2, age2, gender2, sn2, type3, breed3, age3, gender3, sn3, adj, vacc, fostered, exp, reason, pResp, fResp, willing, whatWill, descr, pref, energy, hours, takeCare, diet, others, status)
        VALUES 
        ('$pID', '$fName', '$mi', '$lName', '$dob', '$nat', '$add', '$tel', '$cell', '$email', '$occ', '$hhName1', '$hhRel1', '$hhAge1', '$hhName2', '$hhRel2', '$hhAge2', '$hhName3', '$hhRel3', '$hhAge3', '$hType', '$permit', '$supp', '$taught', '$move', '$petWith', '$type1', '$breed1', '$age1', '$gender1', '$sn1', '$type2', '$breed2', '$age2', '$gender2', '$sn2', '$type3', '$breed3', '$age3', '$gender3', '$sn3', '$adj', '$vacc', '$fostered', '$exp', '$reason', '$pResp', '$fResp', '$willing', '$whatWill', '$descr', '$pref', '$energy', '$hours', '$takeCare', '$diet', '$others', '$status')";

        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../ufFosterCare.php");
        }else{
            echo "Can't Connect to Database!";
        }

?>