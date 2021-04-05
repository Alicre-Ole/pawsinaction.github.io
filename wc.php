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
        <div class="adminNavs col-md-1" style="background-color:white; border-color:gold; border-width:3px;">
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
</div>
<div class="container-fluid adminContBorder">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Featured News</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                <div class="row justify-content-between">
                <?php
                    include_once('utilities/dbconnect.php');

                    $sqlSlides = mysqli_query($conn,"SELECT * FROM carousel");
                    while($row = mysqli_fetch_array($sqlSlides)){
                        $slide1 = $row['slide1'];
                        $slide2 = $row['slide2'];
                        $slide3 = $row['slide3'];
                ?>
                    <div class="col-lg-3 col-md-3 p-5 text-right mb-1 rounded" style="background-image: url(carousel/<?= $slide1; ?>); background-position: center; background-repeat: no-repeat; background-size: cover;"><hr>
                        <form action="processes/slide1.php" method="post" enctype="multipart/form-data">
                            <input type="file" class="form-control" name="slide1" accept="image/*" required>
                            <span class="mr-2">Ration: 435px X 1280</span>
                            <button type="submit" class="btn btn-primary mt-1">Save</button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 p-5 text-right mb-1 rounded" style="background-image: url(carousel/<?= $slide2; ?>); background-position: center; background-repeat: no-repeat; background-size: cover;"><hr>
                        <form action="processes/slide2.php" method="post" enctype="multipart/form-data">
                            <input type="file" class="form-control" name="slide2" accept="image/*" required>
                            <span class="mr-2">Ration: 435px X 1280</span>
                            <button type="submit" class="btn btn-primary mt-1">Save</button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 p-5 text-right mb-1 rounded" style="background-image: url(carousel/<?= $slide3; ?>); background-position: center; background-repeat: no-repeat; background-size: cover;"><hr>
                        <form action="processes/slide3.php" method="post" enctype="multipart/form-data">
                            <input type="file" class="form-control" name="slide3" accept="image/*" required>
                            <span class="mr-2">Ration: 435px X 1280</span>
                            <button type="submit" class="btn btn-primary mt-1">Save</button>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Story</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                <?php
                    include_once('utilities/dbconnect.php');

                    $sql = mysqli_query($conn,"SELECT * FROM story");
                    while($row = mysqli_fetch_array($sql)){
                        $story = $row['story'];
                ?>
                <form action="processes/webStory.php" method="post">
                    <textarea style="font-size: 15px; border-width:3px;" name="story" id="story" class="form-control mb-1" rows="5" required><?= $story; ?></textarea>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
            </div>
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Story Video</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                <form action="processes/webVid.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control" name="storyVid" accept="video/*" required>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
                <?php } ?>
            </div>
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Vision</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                <?php
                    include_once('utilities/dbconnect.php');

                    $sqlVision = mysqli_query($conn,"SELECT * FROM vision");
                    while($row = mysqli_fetch_array($sqlVision)){
                        $vision = $row['vision'];
                ?>
                <form action="processes/vision.php" method="post">
                    <textarea style="font-size: 15px; border-width:3px;" name="vision" id="vision" class="form-control mb-1" rows="3" required><?= $vision; ?></textarea>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Mission</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                <?php
                    include_once('utilities/dbconnect.php');

                    $sqlMission = mysqli_query($conn,"SELECT * FROM mission");
                    while($row = mysqli_fetch_array($sqlMission)){
                        $mission = $row['mission'];
                ?>
                <form action="processes/mission.php" method="post">
                    <textarea style="font-size: 15px; border-width:3px;" name="mission" id="mission" class="form-control mb-1" rows="3" required><?= $mission; ?></textarea>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>FAQs</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">

                    <div class="table-responsive">
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th>Questions</th>
                                    <th>Answers</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $faqs = mysqli_query($conn,"select * from faqs");
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($faqs))
                                    {
                                        $id = $row['id'];
                                        $question = $row['question'];
                                        $answer = $row['answer'];
                                ?>
                                <tr>
                                    <td><?= $question; ?></td>
                                    <td><?= $answer; ?></td>
                                    <td class="text-right">
                                    <a href="processes/delFaq.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Delete this Question?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>	
                        </table>
                    </div>

                <form action="processes/addFaq.php" method="post">
                    <input style="font-size: 15px;" type="text" name="question" id="question" class="form-control" placeholder="Question: " required>
                    <input style="font-size: 15px;" type="text" name="answer" id="answer" class="form-control mt-1" placeholder="Answer: " required>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
            </div>

            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Monthly Donors</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                    <div class="table-responsive">
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $sqlMonth = mysqli_query($conn,"select * from donor");
                                    // fetch data from database
                                    if($row = mysqli_fetch_array($sqlMonth))
                                    {
                                        $month = $row['month'];

                                        $sqlTotal = mysqli_query($conn,"select SUM(amount) AS Total from donor WHERE month = '$month'");
                                        if($row = mysqli_fetch_array($sqlTotal))
                                        {
                                            $total = $row['Total'];
                                        }
                                ?>
                        <h4 style="display: inline; margin-right: 10px;"><b> MONTH: </b> <?= $month; ?></h4>
                        <h4 style="display: inline;"><b> TOTAL: </b> <?= $total; ?></h4>
                        <?php } ?>
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $sqlDonors = mysqli_query($conn,"select * from donor ORDER BY amount DESC");
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($sqlDonors))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $month = $row['month'];
                                        $amount = $row['amount'];
                                ?>
                                <tr>
                                    <td><?= $month; ?></td>
                                    <td><?= $name; ?></td>
                                    <td><?= $amount; ?></td>
                                    <td class="text-right">
                                    <a href="processes/delDonor.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Delete this Donor from the list?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                    </td>	
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                <form action="processes/addDonor.php" method="post">
                    <select name="month" class="form-control" id="month" style="font-size: 15px;" required>
                        <option value="">Select Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <input style="font-size: 15px;" type="text" name="name" id="name" class="mt-1 form-control" placeholder="Donor Name" required>
                    <input style="font-size: 15px;" type="number" name="amount" id="amount" class="form-control mt-1" placeholder="Amount" step="0.01" required>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
            </div>


            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Monthly Disbursements Report</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                    <div class="table-responsive">
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $sqlMonth_d = mysqli_query($conn,"select * from disbursement");
                                    // fetch data from database
                                    if($row = mysqli_fetch_array($sqlMonth_d))
                                    {
                                        $month_d = $row['month'];

                                        $sqlTotal_d = mysqli_query($conn,"select SUM(amount) AS Total_d from disbursement WHERE month = '$month_d'");
                                        if($row = mysqli_fetch_array($sqlTotal_d))
                                        {
                                            $total_d = $row['Total_d'];
                                        }
                                ?>
                        <h4 style="display: inline; margin-right: 10px;"><b> MONTH: </b> <?= $month_d; ?></h4>
                        <h4 style="display: inline;"><b> TOTAL: </b> <?= $total_d; ?></h4>
                        <?php } ?>
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Payee</th>
                                    <th>OR/Invoice No.</th>
                                    <th>Date Disbursed</th>
                                    <th>Amount</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $sqlDisb = mysqli_query($conn,"select * from disbursement ORDER BY amount DESC");
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($sqlDisb))
                                    {
                                        $id = $row['id'];
                                        $payee = $row['payee'];
                                        $invoice = $row['invoice'];
                                        $date = $row['date'];
                                        $amount = $row['amount'];
                                ?>
                                <tr>
                                    <td><?= $month; ?></td>
                                    <td><?= $payee; ?></td>
                                    <td><?= $invoice; ?></td>
                                    <td><?= $date; ?></td>
                                    <td><?= $amount; ?></td>
                                    <td class="text-right">
                                    <a href="processes/delDisb.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Delete this Disbursement from the list?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                    </td>	
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                <form action="processes/addDisb.php" method="post">
                    <select name="month" class="form-control" id="month" style="font-size: 15px;" required>
                        <option value="">Select Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <input style="font-size: 15px;" type="text" name="payee" id="payee" class="mt-1 form-control" placeholder="Payee" required>
                    <input style="font-size: 15px;" type="text" name="invoice" id="invoice" class="mt-1 form-control" placeholder="OR/Invoice No." required>
                    <input style="font-size: 15px;" type="number" name="amount" id="amount" class="form-control mt-1" placeholder="Amount" step="0.01" required>
                    <input style="font-size: 15px;" type="date" name="date" id="date" class="mt-1 form-control" required>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
            </div>


            <div class="col-lg-12 mt-5" style="background-color: #DEEBF7; border-radius: 3px; padding:1px 5px;">
                <h4><b>Events</b></h4>
            </div>
            <div class="col-lg-12 mt-2 p-5 text-right" style="border-style: solid; border-width:0 0 0 10px; border-color:#001C54;">
                    <div class="table-responsive">
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>Start Time</th>
                                    <th>End Date</th>
                                    <th>End Time</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('utilities/dbconnect.php'); // Using database connection file here

                                    $sqlEvent = mysqli_query($conn,"select * from event");
                                    // fetch data from database
                                    while($row = mysqli_fetch_array($sqlEvent))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $desc = $row['description'];
                                        $sDate = $row['startDate'];
                                        $sTime = $row['startTime'];
                                        $eDate = $row['endDate'];
                                        $eTime = $row['endTime'];
                                ?>
                                <tr>
                                    <td><?= $name; ?></td>
                                    <td><?= $desc; ?></td>
                                    <td><?= $sDate; ?></td>
                                    <td><?= $sTime; ?></td>
                                    <td><?= $eDate; ?></td>
                                    <td><?= $eTime; ?></td>
                                    <td class="text-right">
                                    <a href="processes/delEvent.php?id=<?= $id; ?>" onclick="return confirm('Are you Sure to Delete this Disbursement from the list?')" class="actions mr-2"><i class="fas fa-trash text-danger" style=" font-size:15px;"></i></a>
                                    </td>	
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                <form action="processes/addEvent.php" method="post">
                    <input style="font-size: 15px;" type="text" name="name" id="name" class="mt-1 form-control" placeholder="Name of Event" required>
                    <input style="font-size: 15px;" type="text" name="desc" id="desc" class="mt-1 form-control" placeholder="Event Description" required>
                    <input style="font-size: 15px;" type="date" name="sDate" id="sDate" class="mt-1 form-control" required>
                    <input style="font-size: 15px;" type="time" name="sTime" id="sTime" class="mt-1 form-control" required>
                    <input style="font-size: 15px;" type="date" name="eDate" id="eDate" class="mt-1 form-control" required>
                    <input style="font-size: 15px;" type="time" name="eTime" id="eTime" class="mt-1 form-control" required>
                    <input style="font-size: 15px;" type="text" name="location" id="location" class="mt-1 form-control" placeholder="Enter event location here" required>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
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
        <br><br><br><br>
    </div>
</div>
    
</body>
</html>