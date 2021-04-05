<?php
    include_once('../utilities/dbconnect.php');
    $type = $_POST['pType'];
    $name = $_POST['pName'];
    $gender = $_POST['pGender'];
    $energy = $_POST['pEnergy'];
    $for = $_POST['pFor'];
    $story = $_POST['pStory'];
    $status = $_POST['status'];
    $featured = $_POST['featured'];
    $id = $_GET['id'];

    if(!preg_match("/^([a-zA-Z' ]+)$/",$name)) {
        echo "Name should NOT contain any special charaters!";
    }else{
        $query = "UPDATE animals SET type = '$type', name = '$name', gender = '$gender', energy = '$energy', upFor = '$for', status = '$status', featured = '$featured', story = '$story' WHERE id = '$id'";
            //INSERT DATA TO DATABASE
            if(mysqli_query($conn, $query)){
                header("Location: ../admin.php");
            }else{
                echo "Can't Connect to Database!";
            }
        }

?>

