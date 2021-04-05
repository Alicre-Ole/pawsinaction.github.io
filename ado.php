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
    </div>
    
    <br><br><br><br><br>
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
        <div class="adminNavs col-md-2" style="background-color:#2E75B6; border-color:gold; border-width:3px;">
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
</div>
<div class="container-fluid adminContBorder" style="background-color:#2E75B6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7"><br>
                <h2 class="rounded adminHead">1.) Adoption Applicants</h2>
                <div class="table-responsive">
                    <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php');
                                    $sqlApply = mysqli_query($conn,"SELECT * FROM adopt WHERE status = 0");
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($sqlApply))
                                    {
                                        $id = $row['id'];
                                        $pID = $row['pID'];
                                        $fname = $row['fname'];
                                        $lname = $row['lname'];
                                        $cell = $row['cell'];
                                ?>
                            <tr>
                                <td><?= $id; ?></td>
                                <td><?= $lname; ?>, <?= $fname; ?></td>
                                <td><?= $cell; ?></td>
                                <td class="text-right">
                                <a href="viewAA.php?id=<?= $id; ?>&pID=<?= $pID; ?>" class="actions mr-2"><i class="fas fa-expand text-primary" style=" font-size:15px;" data-toggle="tooltip" data-placement="top" title="View Details"></i></a>
                                <a href="processes/appAA.php?id=<?= $id; ?>" class="actions mr-2"><i class="fas fa-check text-success" style=" font-size:15px;" data-toggle="tooltip" data-placement="top" title="Approve Application"></i></a>
                                <a href="processes/rejAA.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Reject this Application?')" class="actions mr-2" data-toggle="tooltip" data-placement="top" title="Delete Applicant"><i class="fas fa-times text-danger" style=" font-size:15px;"></i></a>
                                </td>	
                            </tr>
                        </tbody>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
            <div class="col-lg-5"><br>
                <h2 class="rounded adminHead">2.) Agreement Signing</h2>
                <div class="table-responsive">
                    <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Adapter</th>
                                <th>Pet</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here
                                        $sqlAdopt = mysqli_query($conn,"SELECT * from adopt WHERE adopted IS NULL AND status = '1'");
                                        while($row = mysqli_fetch_array($sqlAdopt))
                                        {
                                            $id = $row['id'];
                                            $pID = $row['pID'];
                                            $fname = $row['fname'];
                                            $lname = $row['lname'];

                                            $sqlPet = mysqli_query($conn,"SELECT * from animals WHERE id = $pID");
                                            while($row = mysqli_fetch_array($sqlPet)){
                                                $pName = $row['name'];
                                ?>
                            <tr>
                                <td><?= $id; ?></td>
                                <td><?= $lname; ?>, <?= $fname; ?></td>
                                <td><?= $pName; ?></td>
                                <td class="text-right">
                                <a href="viewAA_signing.php?id=<?= $id; ?>&pID=<?= $pID; ?>" class="actions mr-2"><i class="fas fa-expand text-primary" style=" font-size:15px;" data-toggle="tooltip" data-placement="top" title="View Details"></i></a>
                                <a href="processes/emailAA_signing.php?pID=<?= $pID; ?>&id=<?= $id; ?>" class="actions mr-2"><i class="fas fa-envelope text-success" style=" font-size:15px;"></i></a>
                                <a href="processes/rejAA.php?pID=<?= $pID; ?>&id=<?= $id; ?>" onclick="return confirm('Are you Sure to Cancel this Application? This will also be deleted from the application list.')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                </td>	
                            </tr>
                        </tbody>
                            <?php
                            }}
                            ?>
                    </table>
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


        </div><br><br><br>
    </div>
</div>
    
</body>
</html>