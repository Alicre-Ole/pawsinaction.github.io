<?php
    include_once('../utilities/dbconnect.php');
    $question = $_POST['question'];
    $answer = $_POST['answer'];

        $query = "INSERT INTO faqs (question, answer) VALUES ('$question', '$answer')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../wc.php");
            }else{
                echo "Can't Connect to Database!";
        }

?>