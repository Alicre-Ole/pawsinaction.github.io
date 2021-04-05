<?php
    include_once('../utilities/dbconnect.php');
    $slide2 = $_FILES['slide2']['name'];
    $target_dir = "../carousel/";
    $target_file = $target_dir . basename($_FILES["slide2"]["name"]);

    $sqlSlide2 = "UPDATE carousel SET slide2 = '$slide2'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlSlide2) && move_uploaded_file($_FILES["slide2"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>