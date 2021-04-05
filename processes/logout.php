<?php
    include_once('../utilities/dbconnect.php');
    session_destroy();
    header("Location:../login.php");
?>