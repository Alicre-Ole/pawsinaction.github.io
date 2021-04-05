<?php
    include_once('includes/HTMLLinks.php');
?>
<div class="container" style="box-shadow: 0 1px .5rem rgba(0,0,0,.5);
    margin-top: 20px; margin-bottom: 20px;">
    
    <div class="bg-blue" style="padding:10px 0 0 0; opacity:.8; background-color:#f9f9f9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Signing Agreement for Adoption</h1><hr><br><br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" id="agreementHead">
                    <div class="form-group text-center">
                        <form method="post">
                            <div class="text-danger text-left">
                                <p><b><i class="fas fa-info-circle"></i> </b> Please refer to the sent email regarding the steps and your unique credentials to finally sign the agreement. More, you can't procceed when credentials are invalid</p>
                            </div> 
                            <input class="form-control input" name="aID" type="text" placeholder="Enter Adoption ID:" required>
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
                $aID = $_POST['aID'];
                $pID = $_POST['pID'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                }  
                $sqlAdopt = mysqli_query($conn,"SELECT * FROM adopt WHERE id = $aID AND status = 1");
                if($row = mysqli_fetch_array($sqlAdopt)){
                    $fetchAID = $row['id'];
                    $fetchPID = $row['pID'];
                    $fetchFNAME = $row['fname'];
                    $fetchLNAME = $row['lname'];
                    if($aID == $fetchAID && $pID == $fetchPID && $fname == $fetchFNAME && $lname == $fetchLNAME){
                    ?>
                        <script>
                            document.getElementById('agreementBody').style.display = 'block';
                            document.getElementById('agreementHead').style.display = 'none';
                        </script>
                      

                <h1 class="text-success">Great! Welcome <?php echo $fname; ?>, you're now in to the final step</h1>
                <h5 class="text-secondary">Note: Please read and understand the agreement carefully</h5><br><br><br>
                <p><b>ADOPTION AGREEMENT</b></p><br><br>
                <h4>
                I, <b><?php echo $fname; ?> <?php echo $row['mi']; ?>. <?php echo $lname; ?></b>, hereafter referred to as the adopter, hereby agree
                that the above described animal is being adopted by me solely as a pet for myself and/or my immediate family. <br><br>
                The adopter agrees to abide by the following conditions: <br><br>
                &nbsp;&nbsp;&nbsp;1.  The animal will be treated as a family member with loving care and affection. I will do my best to ensure the animal’s safety and well-being.<br>
                &nbsp;&nbsp;&nbsp;2.  I/we will provide the animal with fresh water at all times and good quality food twice daily.<br>
                &nbsp;&nbsp;&nbsp;3.  The animal will be welcomed inside my home. Cats will stay indoors where it is safe and secure. Dogs will be able to roam freely in a secure area, indoors or outdoors, provided there is adequate shelter. The animal will not be caged or chained.<br>
                &nbsp;&nbsp;&nbsp;4.  I will not have the animal attack-trained nor will I use it for any purpose other than companionship. I will never allow any physical, mental, or emotional abuse of the animal.<br>
                &nbsp;&nbsp;&nbsp;5.  I will take the animal to a licensed veterinarian when shots are due. I will provide all required veterinary care, including but not limited to: rabies shots, yearly fecal checks for internal parasites (worms) and ticks and fleas preventative tablets. The animal will be given prompt treatment by a licensed veterinarian for any illness or injury.<br>
                &nbsp;&nbsp;&nbsp;6.  If not already done, I will have the animal spayed/ neutered by <b><?php echo date("Y/m/d") ?></b> and will immediately forward proof to the PAWS In Action admin. Failure to comply with this requirement will result in the immediate return of the animal to PAWS In Action and I agree to pay the amount of Php 3,000.<br>
                &nbsp;&nbsp;&nbsp;7.  I/we affirm that no member of my household has been convicted of an animal welfare law violation such as neglect, cruelty, abandonment etc.<br>
                &nbsp;&nbsp;&nbsp;8.  I am adopting the animal for myself and I agree to not give away, sell, or trade my animal, even as a gift to a friend or family member. I will neither take the animal to a shelter nor abandon the animal. If for whatever reason I cannot keep the adopted animal, I will notify PAWS In Action and give them reasonable time to rehome my pet. I must notify PAWS In Action of any behavioral problems that have occurred at any time before I return my animal and I agree to pay for a professional trainer’s evaluation in case of biting or aggression.<br>
                &nbsp;&nbsp;&nbsp;9.  I agree to accept full responsibility and ownership of the animal at my own risk. I release PAWS In Action from any liability arising out of possession and ownership of my animal. <br>
                &nbsp;&nbsp;&nbsp;10. I agree that I am assuming total financial responsibility for my pet as of the date of this contract. PAWS In Action will not be held responsible for any damages or expenses (veterinary or others) incurred during my ownership of the animal.<br>
                &nbsp;&nbsp;&nbsp;11. In the unfortunate event that the animal becomes lost or dies, I will immediately notify PAWS In Action. Should there be any change in my contact information, I will immediately inform PAWS In Action.<br>
                &nbsp;&nbsp;&nbsp;12. This animal’s known background and medical history have been discussed with me. I understand that PAWS In Action has made no representation concerning the health, condition, training, behavior, or temperament of the animal. <br>
                &nbsp;&nbsp;&nbsp;13. I agree to give PAWS In Action visiting rights at any time after adoption to ensure the terms of the agreement are being followed. Furthermore, I allow PAWS In Action to make regular inquiries and contact my veterinarian.<br><br>
                <b>I UNDERSTAND THAT FAILURE TO COMPLY WITH ANY OF THE ABOVE PROVISIONS WILL RESULT IN FORFEITURE OF THE ADOPTED ANIMAL TO PAWS In Action.</b><br><br>
                I understand that by voluntarily signing this agreement, I am entering into a legal and binding contract with PAWS In Action. Breach of any term(s) of this agreement is deemed actionable by PAWS In Action. In the event there is a violation of the agreement, I agree to pay a minimum of Php 5,000.00 in damages.
                </h4><br><br><br>
                <h4>Electronically Signed By:</b></h4>
                <p>Adopter: <b><?php echo $fname; ?> <?php echo $row['mi']; ?>. <?php echo $lname; ?></b></p>
                <p><b><?php echo date("Y/m/d") ?></b></p><br><br><br>
                <h4>Electronically Signed By:</b></h4>
                <p>Admin: <b>PAWS In Action</b></p>
                <p><b><?php echo date("Y/m/d") ?></b></p><br><br><br>
                <h5>Note: Before Hitting this button below, assure yourself that you understand everything mentioned above</h5>
                <a type="submit" href="processes/finalAA.php?id=<?= $aID; ?>&pID=<?= $pID; ?>" class="btn btn-success p-5 col-12" onclick="return confirm('Are you Sure to Finally Adopt now?')" style="font-size: 25px;">Adopt Now!</a>
            </div>
            
                <?php
                    }
                }
                ?>

        </div><br><br>
</div>
