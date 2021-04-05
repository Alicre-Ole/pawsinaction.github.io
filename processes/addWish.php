<?php
    include_once('../utilities/dbconnect.php');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $energy = $_POST['energy'];
    $breed = $_POST['breed'];
    $status = $_POST['status'];


        if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(preg_match ("/^[0-9]*$/", $number)){
                    if(preg_match("/^[a-zA-z]*$/",$breed)){
                        $query = "INSERT INTO wishers (name, phone, email, type, gender, breed, energy, status) VALUES ('$name', '$number', '$email', '$type', '$gender', '$breed', '$energy', '$status')";
                        //INSERT DATA TO DATABASE
                        if(mysqli_query($conn, $query)){
                            $msg = "Great, we just received your wished Pet! The system will notify you through email when there's a match. Thank you and may your wish come true.";
                            header("Location: ../index.php?msgWish=".$msg);
                        }else{
                            echo "Can't Connect to Database!";
                        }
                    }else{
                        echo "Error: Please check your submitted breed!";
                    }
                }else{
                    echo "Error: Please check your submitted Phone Number!";
                }
            }else{
                echo "Error: Please check your submitted email!";
            }
        }else{
            echo "Error: Please check your submitted name!";
        }
        
?>