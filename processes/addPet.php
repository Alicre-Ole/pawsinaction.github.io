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
    $profile = $_FILES['pProfile']['name'];
    $target_dir = "../animals/";
    $target_file = $target_dir . basename($_FILES["pProfile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;
    $accept = 1;

                //CHECK FILE IF IMAGE
                $check = getimagesize($_FILES["pProfile"]["tmp_name"]);
                if($check !== false) {
                    //CERTAIN FILE FORMATS
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                        $uploadOk = 0;
                        echo "Invalid file format!";
                    //FILE SIZE    
                    }elseif ($_FILES["pProfile"]["size"] > 5000000) {
                        $uploadOk = 0;
                        echo "File is more than 5MB!";
                    //CHECK IF FILE ALREADY EXISTS
                    }elseif (file_exists($target_file)) {
                        $uploadOk = 0;
                        echo "File already exists";
                    //CHECK IF INPUTS ARE CORRECT
                    }elseif (!preg_match("/^([a-zA-Z' ]+)$/",$story) && !preg_match("/^([a-zA-Z' ]+)$/",$name)) {
                        $accept = 0;
                        echo "Name and Story should NOT contain any special charaters!";
                    }elseif ($accept == 0 && $uploadOk == 0){
                        echo "There's something wrong with your file or Input data!";
                    }else{
                        $query = "INSERT INTO animals (type, name, gender, energy, upFor, status, featured, story, profile) VALUES ('$type', '$name', '$gender', '$energy', '$for', '$status', '$featured', '$story', '$profile')";
                        //INSERT DATA TO DATABASE
                        if(mysqli_query($conn, $query) && move_uploaded_file($_FILES["pProfile"]["tmp_name"],         
                            $target_file)){
                            header("Location: ../admin.php");
                        }else{
                            echo "Can't Connect to Database!";
                        }
                    }
                }

?>