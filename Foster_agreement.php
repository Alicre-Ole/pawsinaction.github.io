<?php
    include_once('includes/HTMLLinks.php');
?>
<div class="container" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    
    <div class="bg-blue" style="padding:10px 0 0 0; opacity:.8; background-color:#f9f9f9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Signing Agreement for Foster Care</h1><hr><br><br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" id="agreementHead">
                    <div class="form-group text-center">
                        <form method="post">
                            <div class="text-danger text-left">
                                <p><b><i class="fas fa-info-circle"></i> </b> Please refer to the sent email regarding the steps and your unique credentials to finally sign the agreement. More, you can't procceed when credentials are invalid</p>
                            </div> 
                            <input class="form-control input" name="fID" type="text" placeholder="Enter Foster ID:" required>
                            <input class="form-control input" name="pID" type="text" placeholder="Enter Animal ID:" required>
                            <input class="form-control input" name="fname" type="text" placeholder="Enter Your First Name:" required>
                            <input class="form-control input" name="lname" type="text" placeholder="Enter Your Last Name:" required><br>
                            <input type="submit" name="submit" class="btn btn-primary p-3" style="font-size: 15px;"></input>
                        </form>
                    </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" id="agreementBody" style="display:none;">
                <?php
                include_once('utilities/dbconnect.php');

                if(isset($_POST['submit'])){
                $fID = $_POST['fID'];
                $pID = $_POST['pID'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                }  
                $sqlFoster = mysqli_query($conn,"SELECT * FROM foster WHERE id = $fID AND status = 1");
                if($row = mysqli_fetch_array($sqlFoster)){
                    $fetchFID = $row['id'];
                    $fetchPID = $row['pID'];
                    $fetchFNAME = $row['fName'];
                    $fetchLNAME = $row['lName'];
                    $fetchMI = $row['mi'];
                    if($fID == $fetchFID && $pID == $fetchPID && $fname == $fetchFNAME && $lname == $fetchLNAME){
                    ?>
                        <script>
                            document.getElementById('agreementBody').style.display = 'block';
                            document.getElementById('agreementHead').style.display = 'none';
                        </script>
                      

                <h1 class="text-success">Great! Welcome <?php echo $fname; ?>, you're now in to the final step</h1>
                <h5 class="text-secondary">Note: Please read and understand the agreement carefully</h5><br><br><br>
                <p><b>FOSTER CARE AGREEMENT</b></p><br><br>
                <h4>
                This agreement made this <b><?php echo date("Y/m/d") ?></b>, by and between PAWS In Action (hereinafter called “The Shelter") and <b><?php echo $fname ?> <?php echo $fetchMI ?>. <?php echo $lname ?></b> (hereinafter called “The Foster Parent”).<br><br>
                The foster parent agrees that:<br><br>
                &nbsp;&nbsp;&nbsp;1.  The Animal will still be under the shelter’s property  and cannot be sold, relocated or given away without the consent of the shelter. Furthermore, the animal will remain up for adoption. Only, the shelter is authorized to conduct the adoption process.<br>
                &nbsp;&nbsp;&nbsp;2.  The Shelter will not be held liable for any damage to person or property while the fostered animal is under their care.<br>
                &nbsp;&nbsp;&nbsp;3.  House inspections before or at any time during the foster period is permitted by the Foster Parent. This will be done in consideration to the convenience of the Foster Parent unless there are uncertainties to the animal’s safety.<br>
                &nbsp;&nbsp;&nbsp;4.  The Foster Parent will take full accountability and will take responsible care of the animal at all times. He/She must make sure that the animal will not be lost or injured. Animals must be kept in a safe and secure area. Cats will stay indoors. Dogs will be able to roam freely in a secure area, indoors or outdoors, provided there is adequate shelter. The animal will not be caged or chained. There may be cases where the animal has to be caged but only if there are valid reasons.<br>
                &nbsp;&nbsp;&nbsp;5.   The animal should be provided with a suitable environment, adequate water, good quality food and regular grooming. Moreover, proper and diligent care must be provided in accordance to the animal’s rehabilitation plan to be established by the assigned veterinarian.<br>
                &nbsp;&nbsp;&nbsp;6.  The Foster Parent is required to bring the animal to the assigned veterinarian for the animal’s required medical appointments and scheduled vaccinations which will all be covered by the shelter but the Foster Parent may volunteer to shoulder the cost.<br>
                &nbsp;&nbsp;&nbsp;7.  If the Foster Parent already has animals at home, they must be healthy with complete and updated vaccination shots. They must also spayed or neutered if there will be interactions with the fostered animal.<br>
                &nbsp;&nbsp;&nbsp;8.  If the animal needs medical attention, the animal must be brought to the assigned veterinarian. All expenses incurred will be shouldered by the shelter unless the Foster Parent is willing to pay for the vet bills.<br>
                &nbsp;&nbsp;&nbsp;9.  In cases of unfortunate medical emergencies, the Foster Parent must contact the shelter immediately to determine the best course of action.<br>
                &nbsp;&nbsp;&nbsp;10. If there are other problems with the fostered animal, the Foster Parent must return  the animal to the shelter at the soonest possible time.<br>
                &nbsp;&nbsp;&nbsp;11.  A tentative date will be proposed as to when the animal will be returned to the shelter or adopted. However, if the animal has not yet recovered, the shelter will discuss with the Foster Parent if they are still willing to extend the animal’s stay.<br>
                &nbsp;&nbsp;&nbsp;12.  Should the foster parent or his/her referral express interest to adopt the animal for good, the standard adoption process will follow.<br><br>
                By signing below, I, <b><?php echo $fname ?> <?php echo $fetchMI ?>, <?php echo $lname ?></b>, the Foster Parent, acknowledge that I have read the terms and conditions of this agreement.
                </h4><br><br><br>
                <h4>Electronically Signed By:</b></h4>
                <p>Adopter: <b><?php echo $fname; ?> <?php echo $row['mi']; ?>. <?php echo $lname; ?></b></p>
                <p><b><?php echo date("Y/m/d") ?></b></p><br><br><br>
                <h4>Electronically Signed By:</b></h4>
                <p>Admin: <b>PAWS In Action</b></p>
                <p><b><?php echo date("Y/m/d") ?></b></p><br><br><br>
                <h5>Note: Before Hitting this button below, assure yourself that you understand everything mentioned above</h5>
                <a type="submit" href="processes/finalFF.php?id=<?= $fID; ?>&pID=<?= $pID; ?>" class="btn btn-success p-5 col-12" onclick="return confirm('Are you Sure to Finally Foster now?')" style="font-size: 25px;">Foster Now!</a>
            </div>
            
                <?php
                    }
                }
                ?>

        </div><br><br>
</div>
