<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid" style="padding:90px 0 0 0; opacity:.8; background-color:#F9F9F9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Report</h1><hr>
            </div>
            <span style="font-size: 15px;"><i class="fas fa-info-circle"></i> You can now report Lost & Found animals and Animal Cruelty realted issues to us upon using this system. It is one of our core responsibilities in advocating animal welfare.</span>
            <br><br>
            <div class="row">
                <div class="col-md-12 text-center bg-white rounded p-5">
                    <h3>What do you want to Report?</h3>
                    <button class="btn btn-primary p-3" onclick="javascript:lf();" id="lf" style="font-size: 15px;">Lost & Found</button>
                    <button class="btn btn-danger p-3" onclick="javascript:ac();" id="ac" style="font-size: 15px;">Animal Cruelty</button>
                </div>
            </div><br><br>
                <script>
                    function lf() {
                        if (document.getElementById('lf')) {
                            document.getElementById('lostAndFound').style.display = 'block';
                            document.getElementById('animalCruelty').style.display = 'none';
                        }
                    }
                    function ac() {
                        if (document.getElementById('ac')) {
                            document.getElementById('lostAndFound').style.display = 'none';
                            document.getElementById('animalCruelty').style.display = 'block'; 
                        }
                    }
                    function cancel() {
                        if (document.getElementById('cancel')) {
                            document.getElementById('lostAndFound').style.display = 'none';
                            document.getElementById('animalCruelty').style.display = 'none'; 
                        }
                    }
                </script>
            <div class="col-md-8 rounded border border-primary shadow-lg p-5" id="lostAndFound" style="margin-left: auto; margin-right:auto; display:none;"><br>
                <h3>You are reporting Lost & Found</h3><hr><br>
                <form action="processes/addLFRep.php" style="font-size:15px;" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div style="border-style: solid; border-color:gray; border-width: 0 0 0 5px; padding: 0 0 0 10px;">
                        <div class="form-outline mb-2">
                            <input type="text" style="font-size:20px;" name="name" class="form-control" placeholder="Pedro Penduko" required/>
                            <label class="form-label">Reporter Name</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="number" style="font-size:20px;" name="number" class="form-control" placeholder="09xxxxxxxx" required/>
                            <label class="form-label">Phone Numer</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="email" style="font-size:20px;" name="email" class="form-control" placeholder="pedro.penduko@gmail.com" required/>
                            <label class="form-label">Email</label>
                        </div>
                    </div><br>
                    <div style="border-style: solid; border-color:gray; border-width: 0 0 0 5px; padding: 0 0 0 10px;">
                        <div class="form-outline mb-2">
                            <select name="aType" style="font-size:20px;"  class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                            <label class="form-label">Animal Type</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="text" style="font-size:20px;" name="location" class="form-control" placeholder="Bitan-ag Creek, Lapasan, CDO" required/>
                            <label class="form-label">Location</label>
                        </div>
                        <div class="form-outline mb-2">
                            <textarea class="form-control" name="caption" style="font-size:20px;" rows="2" required></textarea>
                            <label class="form-label">Caption</label>
                        </div>
                        <div class="form-outline mb-2" style="display:none">
                            <select name="status" style="font-size:20px;"  class="form-control form-select" required>
                                <option value="0">Pending</option>
                                <option value="1">Approved</option>
                            </select>
                            <label class="form-label">Status</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="file" class="form-control input" name="picture" accept="image/*" required>
                            <label class="form-label">Picture</label>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-success btn-block" style="font-size:20px;">Report</button>
                    <a class="btn btn-danger btn-block" onclick="javascript:cancel();" id="cancel" style="color:white; font-size:20px;">Cancel</a>
                    <span style="font-size:10px;">Note: This will be seen in the News Feed section once approved by the Administrator.</span>
                </form>
            </div>
            <!--ANIMAL CRUELTY-->
            <div class="col-md-8 rounded border border-danger p-5 shadow-lg" id="animalCruelty" style="margin-left: auto; margin-right:auto; display:none;"><br>
                <h3>You are reporting Animal Cruelty</h3><hr><br>
                <form action="processes/addACRep.php" style="font-size:15px;" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div style="border-style: solid; border-color:gray; border-width: 0 0 0 5px; padding: 0 0 0 10px;">
                        <div class="form-outline mb-2">
                            <input type="text" style="font-size:20px;" name="name" class="form-control" placeholder="Pedro Penduko" required/>
                            <label class="form-label">Reporter Name</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="number" style="font-size:20px;" name="number" class="form-control" placeholder="09xxxxxxxx" required/>
                            <label class="form-label">Phone Numer</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="email" style="font-size:20px;" name="email" class="form-control" placeholder="pedro.penduko@gmail.com" required/>
                            <label class="form-label">Email</label>
                        </div>
                    </div><br>
                    <div style="border-style: solid; border-color:gray; border-width: 0 0 0 5px; padding: 0 0 0 10px;">
                        <div class="form-outline mb-2">
                            <select name="aType" style="font-size:20px;"  class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                            <label class="form-label">Animal Type</label>
                        </div>
                        <div class="form-outline mb-2">
                            <select name="cType" style="font-size:20px;"  class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Killing">Killing</option>
                                <option value="Neglect">Neglect</option>
                                <option value="Hoarding">Hoarding</option>
                                <option value="Shooting">Shooting</option>
                                <option value="Beating">Beating</option>
                                <option value="Throwing">Throwing</option>
                                <option value="Stabbing">Stabbing</option>
                                <option value="Burning">Burning</option>
                                <option value="Vehicular">Vehicular</option>
                            </select>
                            <label class="form-label">Cruelty Type</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="text" style="font-size:20px;" name="resName" class="form-control" placeholder="Juan Carlos" required/>
                            <label class="form-label">Involved/Responsible</label>
                        </div>
                        <div class="form-outline mb-2">
                            <textarea class="form-control" name="caption" style="font-size:20px;" rows="2" required></textarea>
                            <label class="form-label">Caption</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="file" class="form-control input" name="picture" accept="image/*" required>
                            <label class="form-label">Picture</label>
                        </div>
                        <div class="form-outline mb-2" style="display:none">
                            <select name="status" style="font-size:20px;"  class="form-control form-select" required>
                                <option value="0">Pending</option>
                                <option value="1">Approved</option>
                            </select>
                            <label class="form-label">Status</label>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-success btn-block" style="font-size:20px;">Report</button>
                    <a class="btn btn-danger btn-block" onclick="javascript:cancel();" id="cancel" style="color:white; font-size:20px;">Cancel</a>
                    <span style="font-size:10px;">Note: This will be seen in the News Feed section once allowed by the Administrator.</span>
                </form>
            </div>
            <br><br><br><br>
        </div>
    </div><br><br><br><br>
    <div class="text-center" style="color:gray; opacity: .3; font-style:italic;">
        <h1>... that this world will be a little heaven for both humans and animals ...</h1>
    </div>

<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>