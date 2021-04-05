<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid" style="padding:90px 0 0 0; opacity:.8; background-color:#F9F9F9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Volunteer Form</h1><hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>This volunteer agreement (“Agreement”) is entered into as of the date set forth below by PAWS In Action. WHEREAS, THE VOLUNTEER has voluntarily contacted PAWS In Action and has expressed an interest in working with RESCUES in the care and custody of PAWS In Action’s agreement to allow the volunteer to view and/or interact with such RESCUES, THE VOLUNTEER hereby, for his/her heirs, his/her personal representatives, and him/herself represent and warrant as follows:</h4><br>
                </div>
                <div class="col-md-12">
                    <h4>1. THE VOLUNTEER is fully aware of the risks that RESCUES pose and has elected to view and/or interact with one or more dogs in the care of PAWS In Action voluntarily. THE VOLUNTEER knowingly assumes all risks that exposure to RESCUES may pose, including but not limited to serious bodily injury and/or death.</h4><br>
                </div>
                <div class="col-md-12">
                    <h4>2. THE VOLUNTEER HEREBY WAIVES, RELEASES DISCHARGES, HOLD HARMLESS, AND PROMISES TO INDEMNIFY AND NOT TO BRING SUIT AGAINST PAWS In Action, its directors, officers, volunteers, staff, and all other agents, and attorney for any of the referenced parties and any other parties acting for or on behalf of the referenced partied from any and all rights and claims which the volunteer has or which may hereafter accrue to THE VOLUNTEER and from any and all damages which may be sustained by the volunteer directly or indirectly in connection with, or arising out of, the volunteer’s exposure to such RESCUES.</h4><br>
                </div>
                <div class="col-md-12">
                    <h4>3. ANY expenses by THE VOLUNTEER during a RESCUE Operation are considered non-refundable. THE VOLUNTEER understands that THE VOLUNTEER will be paid for their time, and any financial support THE VOLUNTEER has released is for this NON-PROFIT ORGANIZATION. THE VOLUNTEER understands that all funds are FOR the RESCUES, and PAWS In Action is not obliged to refund said expenditures.</h4><br>
                </div>
                <div style="font-size:12px;"><hr><br><br>
                    <form action="processes/volunteer.php" method="POST">
                        <div class="row mb-2">
                            <div class="form-outline" style="display: none;">
                                <input style="background-color: white;" value="0" type="text" name="status" class="form-control input" required/>
                                <label class="form-label" for="status">Status</label>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <input type="text" name="fname" placeholder="e.g. Pedro" class="form-control input" required/>
                                    <label class="form-label" for="fname">First Name</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <input type="text" name="lname" placeholder="e.g. Penduko" class="form-control input" required/>
                                    <label class="form-label" for="lname">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="date" name="dob" class="form-control input" required/>
                                    <label class="form-label" for="dob">Date Of Birth</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <input type="text" name="address" placeholder="e.g. B-23, Lot 32, Yellow Fin Street, Brown Subdivision" class="form-control input" required/>
                                    <label class="form-label" for="address">Residential Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="text" name="brgy" placeholder="e.g. Barangay Balulang" class="form-control input" required/>
                                    <label class="form-label" for="brgy">Barangay</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="number" name="number" placeholder="e.g. 09xxxxxxxxx" class="form-control input" required/>
                                    <label class="form-label" for="brgy">Cell Phone Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="number" name="altNumber" placeholder="e.g. 09xxxxxxxxx" class="form-control input" />
                                    <label class="form-label" for="altNumber">Alternative Home Phone Number</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="email" name="email" placeholder="e.g. johndoe@gmail.com" class="form-control input" />
                                    <label class="form-label" for="email">Email Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <div class="form-outline">
                                    <input style="background-color: white;" type="text" name="alergies" class="form-control input" />
                                    <label class="form-label" for="alergies">Allergies or physical restrictions</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">Have you been vaccinated with Anti-Rabies within the span of 12 months?</h4>
                                    <input class="form-check-input" name="vacc" type="radio" value="yes" required>
                                    <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" name="vacc" type="radio" value="no">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h4 style="display: inline; padding-right:25px;">Please list any pets you currently own (or have owned in the past)</h4>
                                    <textarea class="form-control input" name="petOwned" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">Do you work with any other rescue organizations?</h4>
                                    <input class="form-check-input" onclick="javascript:workOrg();" id="yes" name="hType" type="radio" value="yes" required>
                                    <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" onclick="javascript:workOrg();" id="no" name="hType" type="radio" value="no">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <script>
                            function workOrg() {
                                if (document.getElementById('yes').checked) {
                                    document.getElementById('ifWork').style.display = 'block';
                                }
                                else document.getElementById('ifWork').style.display = 'none';
                            }
                        </script>
                        <div class="row mb-4" id="ifWork" style="display: none;">
                            <h4 class="ml-3" style="display: inline; padding-right:25px;">Since yes, please give contact information for that organization including name and phone number:</h4>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control input" type="text" name="orgName"></input>
                                    <label class="form-check-label">Org. Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control input" type="number" name="orgCont"></input>
                                    <label class="form-check-label">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">Animal Experience (select all that apply)</h4><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Veterinary Hospital">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Veterinary Hospital</label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Boarding Facility">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Boarding Facility </label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Foster Home">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Foster Home </label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Dog Grooming">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Dog Grooming </label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Cat Grooming">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Cat Grooming </label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Shelter Work">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Shelter Work</label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Training/Obedience">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Training/Obedience</label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Pet Sitting">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Pet Sitting</label><br>
                                    <input class="form-check-input ml-3" name="experience[]" type="checkbox" value="Farm Animals">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Farm Animals</label><br>
                                    <div class="form-outline">
                                        <input class="form-control input" type="text" name="experience[]"></input>
                                        <label class="form-check-label">Others</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h4 style="display: inline; padding-right:25px;">If you would like to comment more on your experience with the above, please do so here:</h4>
                                    <textarea class="form-control input" name="moreComment" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">Other Experience, Special Skills, Strengths, Talents (select all that apply)</h4><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Computers">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Computers</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Management">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Management</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Crafts">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Crafts</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Working w/ children">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Working w/ children</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Fund-raising">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Fund-raising</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Woodwork/Carpentry">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Woodwork/Carpentry</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Painting">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Painting</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Public Speaking">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Public Speaking</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Photography">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Photography</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Videography">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Videography</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Writing">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Writing</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Secretarial">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Secretarial</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Campaign Specialist">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Campaign Specialist</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Construction">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Construction</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Agriculture">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Agriculture</label><br>
                                    <input class="form-check-input ml-3" name="oExperience[]" type="checkbox" value="Nature Preservist “Environmental Activist”">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Nature Preservist “Environmental Activist”</label><br>

                                    <div class="form-outline">
                                        <input class="form-control input" type="text" name="oExperience[]"></input>
                                        <label class="form-check-label">Others</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h4 style="display: inline; padding-right:25px;">If you would like to comment more on your experience with the above, please do so here:</h4>
                                    <textarea class="form-control input" name="oMoreComment" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">When are you available to volunteer? (check all that apply)</h4><br>
                                    <input class="form-check-input ml-3" name="available[]" type="checkbox" value="Weekdays">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Weekdays</label><br>
                                    <input class="form-check-input ml-3" name="available[]" type="checkbox" value="Weekends">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Weekend </label><br>
                                    <input class="form-check-input ml-3" name="available[]" type="checkbox" value="Non-Scheduled Days">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Non-Scheduled Days</label><br>
                                    <input class="form-check-input ml-3" name="available[]" type="checkbox" value="Alternating Days">
                                    <label style="padding-right: 30px;" class=" ml-5 form-check-label">Alternating Days</label><br>
                                    <div class="form-outline">
                                        <input class="form-control input" type="text" name="available[]"></input>
                                        <label class="form-check-label">Others</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <h4 style="display: inline; padding-right:25px;">Would you be willing to volunteer off the shelter premises? </h4>
                                    <input class="form-check-input" name="willing" type="radio" value="yes" required>
                                    <label style="padding-right: 30px;" class="form-check-label">Yes</label>
                                    <input class="form-check-input" name="willing" type="radio" value="no">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <h4 class="ml-3" style="display: inline; padding-right:25px;">In case of emergency, who should we contact?</h4>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control input" type="text" name="eCname"></input>
                                    <label class="form-check-label">Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control input" type="number" name="eCnumber"></input>
                                    <label class="form-check-label">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <h4 class="ml-3" style="display: inline; padding-right:25px;">Any additional information about you, the volunteer, that you would like to share?</h4>
                            <div class="col-12">
                                <div class="form-outline">
                                    <textarea class="form-control input" rows="3" name="oShare"></textarea>
                                </div>
                            </div>
                        </div><br>
                        <div class="row mb-4">
                            <h4 class="ml-3" style="display: inline; padding-right:25px;">By typing your full name here, you are agreeing to the above liability waiver.</h4>
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control input" type="text" name="fullName" placeholder="Pedro M. Penduko"></input>
                                </div>
                            </div>
                        </div>

                        <br>
                        <button style="padding: 10px; font-size:15px;" type="submit" class="btn btn-primary btn-block mb-4">Submit Application</button>
                    </form>
                </div>
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