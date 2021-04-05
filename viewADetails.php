<?php
    include_once('includes/HTMLLinks.php');
?>

<div class="container upPet" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    <div class="p-3">
        <a href="ufAdoption.php"><i class="fas fa-arrow-left mr-5" style="font-size: large; color:black;"></i></a>
        <h1 class="text-center" style="display: inline;">Pet Details</h1><hr>
    </div>
    <?php
        include_once('utilities/dbconnect.php');
        $id = $_GET['id'];

        $sqlPet = mysqli_query($conn,"select * from animals where id LIKE '%$id%'");
        while($row = mysqli_fetch_array($sqlPet)){
    ?>
                        <div class="row bg-light">
                            <div class="col-lg-4 text-center" style="margin-top: auto; margin-bottom:auto;">
                                <img src="animals/<?php echo $row['profile']; ?>" width="250" height="250" alt="Pet Profile" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);"><br><br>
                                <h3><?= $row['name']; ?></h3>
                            </div>
                            <div class="update col-lg-8 p-5">
                                    <h4 class="text-left" for="pType">Type</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['type']; ?></label>
                                    <h4 class="text-left" for="pName">Name</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['name']; ?></label>
                                    <h4 class="text-left" for="pGender">Gender</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['gender']; ?></label>
                                    <h4 class="text-left" for="pEnergy">Energy</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['energy']; ?></label>
                                    <h4 class="text-left" for="pFor">Up For</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['upFor']; ?></label>
                                    <h4 class="text-left" for="pStory">Story</h4>
                                    <label style="font-size: 20px;" class="form-control"><?= $row['story']; ?></label>
                            </div>
                        </div>
            <?php } ?>

</div>
