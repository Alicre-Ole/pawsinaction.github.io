<?php
    include_once('includes/HTMLLinks.php');
?>

<div class="container upPet" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    <div class="p-3">
        <a href="admin.php"><i class="fas fa-arrow-left mr-5" style="font-size: large; color:black;"></i></a>
        <h1 class="text-center" style="display: inline;">UPDATE PET</h1><hr>
    </div>
    <?php
        include_once('utilities/dbconnect.php');
        $id = $_GET['pID'];

        $sqlPet = mysqli_query($conn,"select * from animals where id LIKE '%$id%'");
        while($row = mysqli_fetch_array($sqlPet)){
    ?>
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="animals/<?php echo $row['profile']; ?>" width="250" height="250" alt="Pet Profile" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);"><br><br>
                                <h3><?= $row['name']; ?></h3>
                            </div>
                            <div class="update col-lg-8 p-5">
                                <form action="processes/upPetSave.php?id=<?= $id; ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <h4 class="text-left" for="pType">Type</h4>
                                    <select class="form-control" name="pType" id="pType" required>
                                        <option value="<?= $row['type']; ?>"><?= $row['type']; ?></option>
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                    </select><br>
                                    <h4 class="text-left" for="pName">Name</h4>
                                    <input class="form-control" name="pName" value="<?= $row['name']; ?>" type="text" placeholder="Enter Pet Name" required><br>
                                    <h4 class="text-left" for="pGender">Gender</h4>
                                    <select class="form-control" name="pGender" id="pGender" required>
                                        <option value="<?= $row['gender']; ?>"><?= $row['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><br>
                                    <h4 class="text-left" for="pEnergy">Energy</h4>
                                    <select class="form-control" name="pEnergy" id="pEnergy" required>
                                        <option value="<?= $row['energy']; ?>"><?= $row['energy']; ?></option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select><br>
                                    <h4 class="text-left" for="pFor">Up For</h4>
                                    <select class="form-control" name="pFor" id="pFor" required>
                                        <option value="<?= $row['upFor']; ?>"><?= $row['upFor']; ?></option>
                                        <option value="Adoption">Adoption</option>
                                        <option value="FosterCare">Foster Care</option>
                                    </select><br>
                                    <h4 class="text-left" for="status">Status</h4>
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="<?= $row['status']; ?>"><?= $row['status']; ?></option>
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select><br>
                                    <h4 class="text-left" for="featured">Featured</h4>
                                    <select class="form-control" name="featured" id="featured" required>
                                        <option value="<?= $row['featured']; ?>"><?= $row['featured']; ?></option>
                                        <option value="0">Regular</option>
                                        <option value="1">Featured</option>
                                    </select><br>
                                    <h4 class="text-left" for="pStory">Story</h4>
                                    <textarea name="pStory" rows="4" id="pStory" class="form-control"><?= $row['story']; ?></textarea><br>
                                    <div class="modal-footer">
                                        <a href="admin.php" type="button" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
            <?php } ?>

</div>
