<?php
    include_once('includes/HTMLLinks.php');
?>

<div class="container upPet" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    <div class="p-3">
        <a href="wl.php"><i class="fas fa-arrow-left mr-5" style="font-size: large; color:black;"></i></a>
        <h1 class="text-center" style="display: inline;">Wished Pet <i class="fas fa-star text-warning"></i></h1><hr>
    </div>
    <?php
        include_once('utilities/dbconnect.php');
        $id = $_GET['id'];

        $sqlWisher = mysqli_query($conn,"select * from wishers where id LIKE '%$id%'");
        while($row = mysqli_fetch_array($sqlWisher)){
    ?>
                        <div class="row">
                            <div class="update col-lg-12 p-5">

                                    <h4 class="text-left">Wisher</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['name']; ?></label>
                                    <h4 class="text-left">Phone Number</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['phone']; ?></label>
                                    <h4 class="text-left">Email</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['email']; ?></label>
                                    <h4 class="text-left">Animal Type</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['type']; ?></label>
                                    <h4 class="text-left">Gender</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['gender']; ?></label>
                                    <h4 class="text-left">Energy</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['energy']; ?></label>
                                    <h4 class="text-left">Breed</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['breed']; ?></label>
                                    <h4 class="text-left">Status</h4>
                                    <label class="form-control" style="font-size:15px;"><?= $row['status']; ?></label>
                                    
                            </div>
                        </div>
            <?php } ?>

</div>
