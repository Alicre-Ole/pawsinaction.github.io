<?php
    include_once('../utilities/dbconnect.php');
    $slide3 = $_FILES['slide3']['name'];
    $target_dir = "../carousel/";
    $target_file = $target_dir . basename($_FILES["slide3"]["name"]);

    $sqlSlide3 = "UPDATE carousel SET slide3 = '$slide3'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlSlide3) && move_uploaded_file($_FILES["slide3"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

?>