<?php
    include_once('includes/HTMLLinks.php');
?>
<div class="container" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    <?php
        include_once('utilities/dbconnect.php');
        $id = $_GET['id'];
        $pID = $_GET['pID'];
        $sqlAdopt = mysqli_query($conn, "SELECT * FROM adopt WHERE id = $id");
            while($row = mysqli_fetch_array($sqlAdopt)){
    ?>
    <div style="background-color: #001C54; height:40px; padding:8px;" class="text-right ">
        <a href="ado.php" class="btn btn-secondary">Back</a>
        <a href="processes/emailAA_signing.php?id=<?= $id; ?>&pID=<?= $pID; ?>" class="btn btn-success">Email</a>
        <a href="processes/rejAA.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Cancel this Application? This will also be deleted from the application list.')" class="btn btn-danger">Delete</a>
    </div>
    <?php } ?>
    <div class="bg-blue" style="padding:10px 0 0 0; opacity:.8; background-color:#f9f9f9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Application Details</h1><hr>
            </div>
            <?php
                include_once('utilities/dbconnect.php');
                $pID = $_GET['pID'];
                $id = $_GET['id'];

                $sql = mysqli_query($conn, "SELECT * FROM animals WHERE id = $pID");
                while($row = mysqli_fetch_array($sql)){
                    $name = $row['name'];
            ?>
            <h2 style="color:rgb(150, 150, 150);">Applying for <?php echo $name; ?>'s Adoption.</h2>
            <?php } ?>
            <br><br>
            <div style="font-size:12px;">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <h2>Application Information:</h2><br>
                <?php
                include_once('utilities/dbconnect.php');
                $id = $_GET['id'];
                $sqlAdopt = mysqli_query($conn, "SELECT * FROM adopt WHERE id = $id");
                while($row = mysqli_fetch_array($sqlAdopt)){
                ?>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="form-outline">
                            <input style="background-color: white;" placeholder="<?php echo $row['fname']; ?>" type="text" name="fname" class="form-control input" required/>
                            <label class="form-label" for="fname">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline">
                            <input type="text" name="mi" placeholder="<?php echo $row['mi']; ?>"  class="form-control input" />
                            <label class="form-label" for="mi">M. I.</label>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-outline">
                            <input type="text" name="lname" placeholder="<?php echo $row['lname']; ?>" class="form-control input" required/>
                            <label class="form-label" for="lname">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="dob" placeholder="<?php echo $row['dob']; ?>" class="form-control input" required/>
                            <label class="form-label" for="dob">Date of Birth</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="nat" placeholder="<?php echo $row['nat']; ?>" class="form-control input" required/>
                            <label class="form-label" for="nat">Nationality</label>
                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="add" name="add" placeholder="<?php echo $row['address']; ?>" class="form-control input" required/>
                    <label class="form-label" for="add">Address</label>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="tel" placeholder="<?php echo $row['tel']; ?>" class="form-control input" />
                            <label class="form-label" for="tel">Telephone No.</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="cell" name="cell" placeholder="<?php echo $row['cell']; ?>" class="form-control input" required/>
                            <label class="form-label" for="cell">Cellphone No.</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" placeholder="<?php echo $row['email']; ?>" name="email" class="form-control input" required/>
                            <label class="form-label" for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="occ" placeholder="<?php echo $row['occ']; ?>" class="form-control input" />
                            <label class="form-label" for="occ">Occupation</label>
                        </div>
                    </div>
                </div>

                <h4>Please List All Household Members:</h4>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="form-outline">
                            <label class="form-label" for="hhName">Name</label>
                            <input type="text" name="hhName1" placeholder="<?php echo $row['hhName1']; ?>" class="form-control input" />
                            <input type="text" name="hhName2" placeholder="<?php echo $row['hhName2']; ?>" class="form-control input" />
                            <input type="text" name="hhName3" placeholder="<?php echo $row['hhName3']; ?>" class="form-control input" />
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-outline">
                            <label class="form-label" for="hhRel">Relationship</label>
                            <input type="text" name="hhRel1" placeholder="<?php echo $row['hhRel1']; ?>" class="form-control input" />
                            <input type="text" name="hhRel2" placeholder="<?php echo $row['hhRel2']; ?>" class="form-control input" />
                            <input type="text" name="hhRel3" placeholder="<?php echo $row['hhRel3']; ?>" class="form-control input" />
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline">
                            <label class="form-label" for="hhAge">Age</label>
                            <input type="text" name="hhAge1" placeholder="<?php echo $row['hhAge1']; ?>" class="form-control input" />
                            <input type="text" name="hhAge2" placeholder="<?php echo $row['hhAge2']; ?>" class="form-control input" />
                            <input type="text" name="hhAge3" placeholder="<?php echo $row['hhAge3']; ?>" class="form-control input" />
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <h4 style="display: inline; padding-right:25px;">Housing Type:</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['hType']; ?>">
                        </div>
                    </div>
                </div>
                <script>
                    function ownRent() {
                        if (document.getElementById('rent').checked) {
                            document.getElementById('ifRent').style.display = 'block';
                        }
                        else document.getElementById('ifRent').style.display = 'none';
                    }
                </script>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Since you are renting, do you have permission to keep pets?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['permit']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Yard</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['yard']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do all your family members support your decision?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['supp']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">If you have children, have they been taught how to behave around pets?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['taught']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have any plans to move in the future?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['move']; ?>">
                        </div>
                    </div>
                </div><br><br>

                <h2>Pet History:</h2><br>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have pet/s currently living with you?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['yesWith']; ?>">
                        </div>
                    </div>
                </div>
                <div>
                    <h4>Since yes, please provide the following details:</h4>
                    <div class="row mb-4">
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Type</label>
                                <input type="text" name="type1" class="form-control input" placeholder="<?php echo $row['type1']; ?>"/>
                                <input type="text" name="type2" class="form-control input" placeholder="<?php echo $row['type2']; ?>"/>
                                <input type="text" name="type3" class="form-control input" placeholder="<?php echo $row['type3']; ?>"/>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label">Breed</label>
                                <input type="text" name="breed1"  class="form-control input" placeholder="<?php echo $row['breed1']; ?>"/>
                                <input type="text" name="breed2"  class="form-control input" placeholder="<?php echo $row['breed2']; ?>"/>
                                <input type="text" name="breed3"  class="form-control input" placeholder="<?php echo $row['breed3']; ?>"/>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Age</label>
                                <input type="text" name="age1"  class="form-control input" placeholder="<?php echo $row['age1']; ?>"/>
                                <input type="text" name="age2"  class="form-control input" placeholder="<?php echo $row['age2']; ?>"/>
                                <input type="text" name="age3"  class="form-control input" placeholder="<?php echo $row['age3']; ?>"/>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Gender</label>
                                <input type="text" name="gender1"  class="form-control input" placeholder="<?php echo $row['gender1']; ?>"/>
                                <input type="text" name="gender2"  class="form-control input" placeholder="<?php echo $row['gender2']; ?>"/>
                                <input type="text" name="gender3"  class="form-control input" placeholder="<?php echo $row['gender3']; ?>"/>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Spayed/Neutered</label>
                                <input type="text" name="gender1"  class="form-control input" placeholder="<?php echo $row['sn1']; ?>"/>
                                <input type="text" name="gender2"  class="form-control input" placeholder="<?php echo $row['sn2']; ?>"/>
                                <input type="text" name="gender3"  class="form-control input" placeholder="<?php echo $row['sn3']; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you anticipate any adjustment problems with your new pet?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['adj']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Are your animals up-to-date with all vaccination?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['vacc']; ?>">
                        </div>
                    </div>
                </div><br><br>

                <h2>Adoption Questions:</h2><br>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Have you adopted before?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['adtd']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Since yes, please describe your experience:</h4>
                    <textarea class="form-control input" name="exp" placeholder="<?php echo $row['exp']; ?>" rows="1"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please state the reason why you want to adopt a pet:</h4>
                    <textarea class="form-control input" name="reason" placeholder="<?php echo $row['reason']; ?>" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will be primarily responsible to take care of the pet?</h4>
                    <textarea class="form-control input" name="pResp" placeholder="<?php echo $row['pResp']; ?>" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will be financially responsible of the pet?</h4>
                    <textarea class="form-control input" name="fResp" placeholder="<?php echo $row['fResp']; ?>" rows="1" required></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have the monetary ability to support the pet (food, grooming, medical expenses)?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['ability']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Are you and your family fully committed to take responsibility of the pet’s health and welfare?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['commit']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Can you ensure us that your place is safe and secure for the pet?</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['safe']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please describe your experience / comfortability / limitation with dogs/cats:</h4>
                    <textarea class="form-control input" name="desc" placeholder="<?php echo $row['descr']; ?>" rows="1"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Do you have any preferences (gender, age, size)?</h4>
                    <textarea class="form-control input" name="pref" placeholder="<?php echo $row['pref']; ?>" rows="1"></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Preferred energy level:</h4>
                            <input class="input" type="text" placeholder="<?php echo $row['energy']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">How many hours a day would your adopted dog/cat be alone?</h4>
                    <textarea class="form-control input" name="hours" rows="1" placeholder="<?php echo $row['hours']; ?>" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will take care of your pet in cases when you will not be around? Please provide name and contact information.</h4>
                    <input class="input" type="text" placeholder="<?php echo $row['takeCare']; ?>">
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">What kind of diet will you provide?</h4>
                    <input class="input" type="text" placeholder="<?php echo $row['diet']; ?>">
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please list any other relevant information:</h4>
                    <input class="input" type="text" placeholder="<?php echo $row['other']; ?>">
                </div><br>
            </div><br><br><br><br>
        </div>
        <?php } ?>
</div>
