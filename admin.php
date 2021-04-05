<?php
    include_once('includes/HTMLlinks.php');
?>


<div style="background-color: #F2F2F2;">
    <div class="row adminBar fixed-top" style="padding: 5px 40px 5px 40px; background-color:white;">
        <div class="col-md-4 welAdmin">
            <h2 class="adminBar">WELCOME ADMIN | Paws In Action</h2>
        </div>
        <div class="col-md-4 text-right welAdmin">
            <h2><?php  echo "" . date("l"); ?> | <?php date_default_timezone_set('Asia/Manila');  echo "" . date('h:iA'); ?></h2>
        </div>
        <div class="dropdown col-md-4 text-right show">
            <a href="admin.php" class="adminHome mr-3">Home</a>
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-wrench" style="font-size: 15px;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#updateCredModalCenter">Update Credentials</button>
                <a class="dropdown-item" href="processes/logout.php">Logout</a>
            </div>
            <div style="display: inline;">
                <a data-toggle="modal" data-target="#viewMessages" class="adminHome" style="text-decoration: none;"><i class="fas fa-envelope" style="font-size: 15px;"></i></a>
                <?php
                    include_once('utilities/dbconnect.php');
                    $sql = "SELECT * FROM mfeedback WHERE status = 0";
                    $msgPop = mysqli_query($conn, $sql);
                    if ($msgPop){ 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($msgPop); 
                            if ($row) { 
                                $totalMsg = $row; 
                            }else{
                                $totalMsg = "0";
                            }
                ?>
                <p style="float: right; color:white; font-size:8px; background-color:red; border-radius:100%; padding:0 2px 0 2px;"> <b><?= $totalMsg; ?></b> </p>
                <?php } ?>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div class="row adminNavigations">
        <div class="adminNavs col-md-1" style="background-color:white;">
            <div>
                <a href="wc.php" class="adminNavsLinks text-center"><h3 style="color:#001C54;">Web Content</h3></a>
            </div>
        </div>
        <div class="adminNavs col-md-2" style="background-color:#DEEBF7;">
                <?php
                    include_once('utilities/dbconnect.php');
                    $sql = "SELECT * FROM wishers";
                    $wishersPop = mysqli_query($conn, $sql);
                    if ($wishersPop){ 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($wishersPop); 
                            if ($row) { 
                                $totalWishers = $row; 
                            }else{
                                $totalWishers = "0";
                            }
                ?>
            <h5 style="float: left; color:red; background-color:white; border-radius:100%; padding:2px 5px 2px 5px;"><?= $totalWishers; ?></h5><br><br>
            <?php } ?>
            <div>
                <a href="wl.php" class="adminNavsLinks text-center"><h3 style="color:#001C54;">Wish List</h3></a>
            </div>
        </div>
        <div class="adminNavs col-md-2" style="background-color:#BDD7EE;">
                <?php
                    include_once('utilities/dbconnect.php');
                    $sqlMon = "SELECT * FROM adopt WHERE status = 1";
                    $monPop = mysqli_query($conn, $sqlMon);
                    if ($monPop){ 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($monPop); 
                            if ($row) { 
                                $totalMon = $row; 
                            }else{
                                $totalMon = "0";
                            }
                ?>
            <h5 style="float: left; color:red; background-color:white; border-radius:100%; padding:2px 5px 2px 5px;"><?= $totalMon; ?></h5><br><br>
            <?php } ?>
            <div>
                <a href="mon.php" class="adminNavsLinks text-center"><h3 style="color:#001C54;">Monitoring</h3></a>
            </div>
        </div>
        <div class="adminNavs col-md-2" style="background-color:#9DC3E6;">
                <?php
                    include_once('utilities/dbconnect.php');
                    $sqlFoster = "SELECT * FROM foster WHERE status = 0";
                    $fosterPop = mysqli_query($conn, $sqlFoster);
                    if ($fosterPop){ 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($fosterPop); 
                            if ($row) { 
                                $totalFoster = $row; 
                            }else{
                                $totalFoster = "0";
                            }
                ?>
            <h5 style="float: left; color:red; background-color:white; border-radius:100%; padding:2px 5px 2px 5px;"><?= $totalFoster; ?></h5><br><br>
            <?php } ?>
            <div>
                <a href="fc.php" class="adminNavsLinks text-center"><h3 style="color:#001C54;">Foster Care</h3></a>
            </div>
        </div>
        <div class="adminNavs col-md-2" style="background-color:#2E75B6;">
                <?php
                    include_once('utilities/dbconnect.php');
                    $sqlAdopt = "SELECT * FROM adopt WHERE status = 0";
                    $adoptPop = mysqli_query($conn, $sqlAdopt);
                    if ($adoptPop){ 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($adoptPop); 
                            if ($row) { 
                                $totalAdopt = $row; 
                            }else{
                                $totalAdopt = "0";
                            }
                ?>
            <h5 style="float: left; color:red; background-color:white; border-radius:100%; padding:2px 5px 2px 5px;"><?= $totalAdopt; ?></h5><br><br>
            <?php } ?>
            <div>
                <a href="ado.php" class="adminNavsLinks text-center"><h3 style="color:whitesmoke;">Adopt</h3></a>
            </div>
        </div>
        <div class="adminNavs col-md-2" style="background-color:#1F4E79;">
                <?php
                    include_once('utilities/dbconnect.php');
                    $sqlLFReport = "SELECT * FROM lfreport WHERE posted = 0";
                    $reportLFPop = mysqli_query($conn, $sqlLFReport);
                    if ($reportLFPop){ 
                        // it return number of rows in the table. 
                        $row1 = mysqli_num_rows($reportLFPop); 
                            if ($row1) { 
                                $totalLFreport = $row1; 
                            }else{
                                $totalLFreport = "0";
                            }

                            $sqlACReport = "SELECT * FROM acreport WHERE status = 0";
                            $reportACPop = mysqli_query($conn, $sqlACReport);
                            if ($reportACPop){ 
                                // it return number of rows in the table. 
                                $row2 = mysqli_num_rows($reportACPop); 
                                    if ($row2) { 
                                        $totalACreport = $row2; 
                                    }else{
                                        $totalACreport = "0";
                                    }

                                    $totalReport = $totalLFreport + $totalACreport;
                ?>
            <h5 style="float: left; color:red; background-color:white; border-radius:100%; padding:2px 5px 2px 5px;"><?= $totalReport; ?></h5><br><br>
            <?php } 
            }
            ?>
            <div>
                <a href="rep.php" class="adminNavsLinks text-center" ><h3 style="color:whitesmoke;">Reports</h3></a>
            </div>
        </div>
    </div><br><br>
    <div style="background-color: #001C54;"><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 bar text-right">            
                    <form action="#" method="GET" style="font-size: large;">
                        <label style="color:white;" for="filter"> <i class="fas fa-filter"></i>Filter Animals:</label>
                        <select name="filter" id="filter" style="color:#001C54; border:none; font-size:15px; border-radius:3px;">
                            <option value="">Select</option>
                            <option value="">All Animals</option>
                            <option value="dog">Dogs</option>
                            <option value="cat">Cats</option>
                        </select>
                        <button type="submit" class="btn btn-primary mb-2">Go</button>
                    </form><br>
                    <div class="table-responsive">
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th style="width: 20px;"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPetModalCenter">
                                    <i class="fas fa-plus"></i>
                                    </button></th>
                                    <th>Profile</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Energy</th>
                                    <th>Up For</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    if (!empty($_REQUEST['filter'])) {
                                        $filter = $_REQUEST['filter'];
                                    }else{
                                        $filter = "";
                                    }
                                    $animals = mysqli_query($conn,"select * from animals where type LIKE '%$filter%'");
                                    
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($animals))
                                    {
                                        if ($row['status'] == 1) {
                                            $availability = "Available";
                                        }else{
                                            $availability = "Not Available";
                                        }

                                        $id = $row['id'];
                                ?>
                                <tr>
                                    <td></td>
                                    <td><img src="animals/<?php echo $row['profile']; ?>" width="50" height="50"></td>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['energy']; ?></td>
                                    <td><?php echo $row['upFor']; ?></td>
                                    <td><?php echo $availability ?></td>
                                    <td class="text-right">
                                    <a href="upPet.php?pID=<?= $row['id']; ?>" class="actions mr-3"><i class="fas fa-edit text-warning" style=" font-size:15px;"></i></a>
                                    <a href="processes/delPet.php?pID=<?= $row['id']; ?>" onclick="return confirm('Are you Sure to delete Pet <?= $row['name']; ?>?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>	
                        </table>
                    </div>
                </div>
            </div><br>
                    <!-- ADD PET Modal -->
                    <div class="modal fade" id="addPetModalCenter" tabindex="-1" role="dialog" aria-labelledby="addPetModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h1 class="modal-title" style="color: white;" id="addPetModalCenterTitle">Add New Pet</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: white;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="processes/addPet.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <h4 class="text-left" for="pType">Type</h4>
                                    <select class="form-control" name="pType" id="pType" required>
                                        <option value="">Select</option>
                                        <option value="dog">Dog</option>
                                        <option value="cat">Cat</option>
                                    </select><br>
                                    <h4 class="text-left" for="pName">Name</h4>
                                    <input class="form-control" name="pName" type="text" placeholder="Enter Pet Name" required><br>
                                    <h4 class="text-left" for="pGender">Gender</h4>
                                    <select class="form-control" name="pGender" id="pGender" required>
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select><br>
                                    <h4 class="text-left" for="pEnergy">Energy</h4>
                                    <select class="form-control" name="pEnergy" id="pEnergy" required>
                                        <option value="">Select</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                    </select><br>
                                    <h4 class="text-left" for="pFor">Up For</h4>
                                    <select class="form-control" name="pFor" id="pFor" required>
                                        <option value="">Select</option>
                                        <option value="adoption">Adoption</option>
                                        <option value="fosterCare">Foster Care</option>
                                    </select><br>
                                    <h4 class="text-left" for="pStory">Story</h4>
                                    <textarea name="pStory" id="pStory" class="form-control"></textarea><br>
                                    <h4 class="text-left" for="pProfile">Pet Profile</h4>
                                    <input type="file" class="form-control" name="pProfile" accept="image/*" required>
                                    <h4 class="text-left" style="display: none;" for="status">Status</h4>
                                    <select class="form-control" style="display: none;" name="status" id="status" required>
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select><br>
                                    <h4 class="text-left" style="display: none;" for="featured">Featured</h4>
                                    <select class="form-control" style="display: none;" name="featured" id="featured" required>
                                        <option value="0">Regular</option>
                                        <option value="1">Featured</option>
                                    </select><br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Add Pet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- UPDATE CREDENTIALS Modal -->
                    <div class="modal fade" id="updateCredModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateCred" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h1 class="modal-title" style="color: white;" id="updateCred">Update Credentials</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: white;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-5">
                                <form action="processes/updateCred.php" method="post" autocomplete="off">
                                    <h4 class="text-left" for="uname"><i class="fas fa-user"></i> Username</h4>
                                    <input style="font-size: 15px;" type="text" class="form-control" name="currUname" id="pass" placeholder="Enter Current Username" required></input>
                                    <input style="font-size: 15px;" type="text" class="form-control" name="newUname" id="pass" placeholder="Enter New Username" required></input><br>
                                    <h4 class="text-left" for="pass"><i class="fas fa-lock"></i> Password</h4><input style="font-size: 15px;" class="form-control" name="currPass" type="password" placeholder="Enter Current Password" required>
                                    <input style="font-size: 15px;" class="form-control" name="newPass" type="password" placeholder="Enter New Password" required>
                                    <input style="font-size: 15px;" class="form-control" name="confirm" type="password" placeholder="Confirm New Password" required><br>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- VIEW MESSAGES -->
                    <div class="modal fade col-lg-12" id="viewMessages" tabindex="-1" role="dialog" aria-labelledby="viewMF" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h1 class="modal-title" style="color: white;" id="viewMF">Message/Feedback</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: white;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-5">
                                <div class="table-responsive">
                                    <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Content</th>
                                                <th>Date</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once('utilities/dbconnect.php');

                                                $sqlMFeedback = mysqli_query($conn,"SELECT * FROM mfeedback WHERE status = 0");
                                                while($row = mysqli_fetch_array($sqlMFeedback))
                                                {
                                                    $id = $row['id'];
                                                    $email = $row['email'];
                                                    $content = $row['content'];
                                                    $date = $row['date'];
                                            ?>
                                            <tr>
                                                <td><?= $id; ?></td>
                                                <td><?= $email; ?></td>
                                                <td><?= $content; ?></td>
                                                <td><?= $date; ?></td>
                                                <td class="text-right">
                                                <a href="processes/updateMF.php?id=<?= $id; ?>" class="actions mr-2"><i class="fas fa-check text-success" style=" font-size:15px;"></i></a>
                                                <a href="processes/delMF.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Delete this Message/Feedback?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                        }
                                        ?>	
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

        </div>
        
        <br><br>
</div>

</body>
</html>