<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid bg-blue" style="padding:90px 0 0 0; opacity:.8; background-color:#f9f9f9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Adoption Application Form</h1><hr>
            </div>
            <?php
                include_once('utilities/dbconnect.php');
                $pID = $_GET['id'];

                $sql = mysqli_query($conn, "SELECT * FROM animals WHERE id = $pID");
                while($row = mysqli_fetch_array($sql)){
                    $name = $row['name'];
            ?>
            <h2 style="color:rgb(150, 150, 150);">Note: You are applying for <?php echo $name; ?>'s Adoption.</h2>
            <br><br>
            <div style="font-size:12px;">
            <form action="processes/adopt.php?pID=<?php echo $pID; ?>" method="POST">
            <?php } ?>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <h2>Application Information:</h2><br>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="form-outline" style="display: none;">
                            <input style="background-color: white;" value="0" type="text" name="status" class="form-control input" required/>
                            <label class="form-label" for="status">Status</label>
                        </div>
                        <div class="form-outline">
                            <input style="background-color: white;" type="text" name="fname" class="form-control input" required/>
                            <label class="form-label" for="fname">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline">
                            <input type="text" name="mi"  class="form-control input" />
                            <label class="form-label" for="mi">M. I.</label>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-outline">
                            <input type="text" name="lname"  class="form-control input" required/>
                            <label class="form-label" for="lname">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="date" name="dob"  class="form-control input" required/>
                            <label class="form-label" for="dob">Date of Birth</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="nat"  class="form-control input" required/>
                            <label class="form-label" for="nat">Nationality</label>
                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="add" name="add" class="form-control input" required/>
                    <label class="form-label" for="add">Address</label>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="number" name="tel" class="form-control input" />
                            <label class="form-label" for="tel">Telephone No.</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="number" name="cell"  class="form-control input" required/>
                            <label class="form-label" for="cell">Cellphone No.</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="email" name="email" class="form-control input" required/>
                            <label class="form-label" for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="tel" name="occ"  class="form-control input" />
                            <label class="form-label" for="occ">Occupation</label>
                        </div>
                    </div>
                </div>

                <h4>Please List All Household Members:</h4>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="form-outline">
                            <label class="form-label" for="hhName">Name</label>
                            <input type="text" name="hhName1" class="form-control input" />
                            <input type="text" name="hhName2" class="form-control input" />
                            <input type="text" name="hhName3" class="form-control input" />
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-outline">
                            <label class="form-label" for="hhRel">Relationship</label>
                            <input type="text" name="hhRel1"  class="form-control input" />
                            <input type="text" name="hhRel2"  class="form-control input" />
                            <input type="text" name="hhRel3"  class="form-control input" />
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline">
                            <label class="form-label" for="hhAge">Age</label>
                            <input type="text" name="hhAge1"  class="form-control input" />
                            <input type="text" name="hhAge2"  class="form-control input" />
                            <input type="text" name="hhAge3"  class="form-control input" />
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Housing Type:</h4>
                            <input class="form-check-input" onclick="javascript:ownRent();" id="own" name="hType" type="radio" value="own" required>
                            <label style="padding-right: 30px;" class="form-check-label">Own</label>
                            <input class="form-check-input" onclick="javascript:ownRent();" id="rent" name="hType" type="radio" value="rent">
                            <label class="form-check-label">Rent</label>
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
                <div class="row mb-4" style="display: none;" id="ifRent">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Since you are renting, do you have permission to keep pets?</h4>
                            <input class="form-check-input" name="permit" type="radio" value="yes">
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="permit" type="radio" value="no">
                            <label class="form-check-label">No</label>
                            <div style="display: hidden; position:fixed; opacity:0;">
                                <input class="form-check-input" name="permit" type="radio" value=" " checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Yard:</h4>
                            <input class="form-check-input" name="yard" type="radio" value="fenced" required>
                            <label style="padding-right: 30px;" class="form-check-label">Fenced</label>
                            <input class="form-check-input" name="yard" type="radio" value="unfenced">
                            <label class="form-check-label">Unfenced</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do all your family members support your decision?</h4>
                            <input class="form-check-input" name="supp" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="supp" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">If you have children, have they been taught how to behave around pets?</h4>
                            <input class="form-check-input" name="taught" type="radio" value="yes">
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="taught" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have any plans to move in the future?</h4>
                            <input class="form-check-input" name="move" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="move" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div><br><br>

                <h2>Pet History:</h2><br>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have pet/s currently living with you?</h4>
                            <input onclick="javascript:havePet();" id="yesWith" class="form-check-input" name="petWith" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input onclick="javascript:havePet();" id="noWith" class="form-check-input" name="petWith" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <script>
                    function havePet() {
                        if (document.getElementById('yesWith').checked) {
                            document.getElementById('petLivingWith').style.display = 'block';
                        }
                        else document.getElementById('petLivingWith').style.display = 'none';
                    }
                </script>
                <div id="petLivingWith" style="display: none;">
                    <h4>Since yes, please provide the following details:</h4>
                    <div class="row mb-4">
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Animal Type</label>
                                <input type="text" name="type1" class="form-control input" />
                                <input type="text" name="type2" class="form-control input" />
                                <input type="text" name="type3" class="form-control input" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label">Breed</label>
                                <input type="text" name="breed1"  class="form-control input" />
                                <input type="text" name="breed2"  class="form-control input" />
                                <input type="text" name="breed3"  class="form-control input" />
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-outline">
                                <label class="form-label">Age</label>
                                <input type="text" name="age1"  class="form-control input" />
                                <input type="text" name="age2"  class="form-control input" />
                                <input type="text" name="age3"  class="form-control input" />
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label">Gender</label>
                                <input type="text" name="gender1"  class="form-control input" />
                                <input type="text" name="gender2"  class="form-control input" />
                                <input type="text" name="gender3"  class="form-control input" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-outline">
                                <label class="form-label">Spayed/Neutered</label>
                                <div class="form-check mt-3 mb-2">
                                    <input class="form-check-input" type="radio" value="yes" name="sn1"/>
                                    <label style="padding-right: 20px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" type="radio" name="sn1" value="no"  class="form-control input" />
                                    <div style="display: hidden; position:fixed; opacity:0;">
                                        <input class="form-check-input" name="sn1" type="radio" value=" " checked>
                                    </div>
                                    <label class="form-check-label">No</label>
                                </div>
                                <div class="form-check mt-3 mb-2">
                                    <input class="form-check-input" type="radio" value="yes" name="sn2"/>
                                    <label style="padding-right: 20px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" type="radio" name="sn2" value="no"  class="form-control input" />
                                    <div style="display: hidden; position:fixed; opacity:0;">
                                        <input class="form-check-input" name="sn2" type="radio" value=" " checked>
                                    </div>
                                    <label class="form-check-label">No</label>
                                </div>
                                <div class="form-check mt-4 mb-2">
                                    <input class="form-check-input" type="radio" value="yes" name="sn3"/>
                                    <label style="padding-right: 20px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" type="radio" name="sn3" value="no"  class="form-control input" />
                                    <div style="display: hidden; position:fixed; opacity:0;">
                                        <input class="form-check-input" name="sn3" type="radio" value=" " checked>
                                    </div>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you anticipate any adjustment problems with your new pet?</h4>
                            <input class="form-check-input" name="adj" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="adj" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Are your animals up-to-date with all vaccination?</h4>
                            <input class="form-check-input" name="vacc" type="radio" value="yes">
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="vacc" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div><br><br>

                <h2>Adoption Questions:</h2><br>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Have you adopted before?</h4>
                            <input onclick="javascript:adopted();" id="yesAdbtd" class="form-check-input" name="adptd" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input onclick="javascript:adopted();" id="noAdbtd" class="form-check-input" name="adptd" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <script>
                    function adopted() {
                        if (document.getElementById('yesAdbtd').checked) {
                            document.getElementById('adptExp').style.display = 'block';
                        }
                        else document.getElementById('adptExp').style.display = 'none';
                    }
                </script>
                <div class="form-outline mb-4" style="display: none;" id="adptExp">
                    <h4 style="display: inline; padding-right:25px;">Since yes, please describe your experience:</h4>
                    <textarea class="form-control input" name="exp" rows="1"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please state the reason why you want to adopt a pet:</h4>
                    <textarea class="form-control input" name="reason" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will be primarily responsible to take care of the pet?</h4>
                    <textarea class="form-control input" name="pResp" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will be financially responsible of the pet?</h4>
                    <textarea class="form-control input" name="fResp" rows="1" required></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Do you have the monetary ability to support the pet (food, grooming, medical expenses)?</h4>
                            <input class="form-check-input" name="ability" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="ability" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Are you and your family fully committed to take responsibility of the pet’s health and welfare?</h4>
                            <input class="form-check-input" name="commit" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="commit" type="radio" value="maybe">
                            <label style="padding-right: 30px;" class="form-check-label">Mayber</label>
                            <input class="form-check-input" name="commit" type="radio" value="not">
                            <label class="form-check-label">Not sure with future</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Can you ensure us that your place is safe and secure for the pet?</h4>
                            <input class="form-check-input" name="safe" type="radio" value="yes" required>
                            <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                            <input class="form-check-input" name="safe" type="radio" value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please describe your experience / comfortability / limitation with dogs/cats:</h4>
                    <textarea class="form-control input" name="desc" rows="1"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Do you have any preferences (gender, age, size)?</h4>
                    <textarea class="form-control input" name="pref" rows="1"></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <h4 style="display: inline; padding-right:25px;">Preferred energy level:</h4>
                            <input class="form-check-input" name="energy" type="radio" value="low" required>
                            <label style="padding-right: 30px;" class="form-check-label">Low</label>
                            <input class="form-check-input" name="energy" type="radio" value="medium">
                            <label style="padding-right: 30px;" class="form-check-label">Medium</label>
                            <input class="form-check-input" name="energy" type="radio" value="high">
                            <label class="form-check-label">High</label>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">How many hours a day would your adopted dog/cat be alone?</h4>
                    <textarea class="form-control input" name="hours" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Who will take care of your pet in cases when you will not be around? Please provide name and contact information.</h4>
                    <textarea class="form-control input" placeholder="Pedro Penduko - 09xxxxxxxxx" name="takeCare" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">What kind of diet will you provide?</h4>
                    <textarea class="form-control input" name="diet" rows="1" required></textarea>
                </div>
                <div class="form-outline mb-4">
                    <h4 style="display: inline; padding-right:25px;">Please list any other relevant information:</h4>
                    <textarea class="form-control input" name="others" rows="3"></textarea>
                </div><br>

                <!-- Submit button -->
                <button style="padding: 10px; font-size:15px;" type="submit" class="btn btn-primary btn-block mb-4">Submit Application</button>
            </form>
            </div><br><br><br><br>
        </div>
    </div><br><br><br><br>
    <div class="text-center" style="color:gray; opacity: .3; font-style:italic;">
        <h1>... that this world will be a little heaven for both humans and animals ...</h1>
    </div>

<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>