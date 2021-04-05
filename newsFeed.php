<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/HTMLlinks.php');
?>
    <!--ANIMALS PAGE BODY STARTS HERE-->
    <div class="myContainer container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-lg-4 col-sm-5 text-right fixed-top" style="background-color:navy;">
                <div class="text-right" style="display: inline;"><br>
                    <a href="index.php" class=" p-3 bg-secondary text-right" style="color: white; text-decoration:none; border-radius: 5px;"><i class="fas fa-arrow-left"></i></a>
                    <a href="newsFeed.php" class=" p-3 bg-primary text-right ml-1" style="color: white; text-decoration:none; border-radius: 5px;">PAWSFeed</a>
                    <a href="newsFeedLF.php" class=" p-3 bg-secondary text-right ml-1" style="color: white; text-decoration:none; border-radius: 5px;">Lost&Found</a>
                    <a href="newsFeedAC.php" class=" p-3 bg-secondary ml-1 text-right" style="border-radius: 5px; color: white; text-decoration:none;">AnimalCruelty</a><br><br>
                </div>
            </div><br><br><br><br>
            <div class="bg-white rounded shadow-lg">
                <div class="bg-danger rounded-circle text-white m-2" style="width: 40px; height:40px; display:inline-block">
                </div>
                <pre style="font-size: 20px; display:inline; display:inline-block; border-style:solid; border-color:gray; border-width:0 0 1px 0;">ADMINISTRATOR</pre>
                <h3 class="ml-5 mt-5" style="font-style:italic;">Always thank you to our <b>Monthly Donors:</b></h3>
                <div class="col-lg-12 p-5">
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
                                                $total_do = $row['Total'];
                                            }
                                    ?>
                            <h6 style="display: inline;"><b>MONTH | </b><?= $month; ?></h6><br>
                            <h6 style="display: inline;"><b>TOTAL | </b><?= $total_do; ?></h6>
                            <?php } ?>
                            <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount</th>
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
                                        <td><?= $name; ?></td>
                                        <td><?= $amount; ?></td>	
                                    </tr>
                                </tbody>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                </div>
                    <div class="card-body text-right pr-5 pb-5">
                        <h5 style="display:inline;">Share to FB</h5>
                        <a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="_blank" style="font-size: 15px; display:inline;"><i class="fas fa-share"></i></a>
                    </div>
            </div><hr>
            <div class="bg-white rounded shadow-lg">
                <div class="bg-danger rounded-circle text-white m-2" style="width: 40px; height:40px; display:inline-block">
                </div>
                <pre style="font-size: 20px; display:inline; display:inline-block; border-style:solid; border-color:gray; border-width:0 0 1px 0;">ADMINISTRATOR</pre>
                <h3 class="ml-5 mt-5" style="font-style:italic;">Monthly Disbursement Report</h3>
                <div class="col-lg-12 p-5">
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

                                        $bal = $total_do - $total_d;
                                ?>
                        <h6 style="display: inline;"><b>MONTH | </b><?= $month; ?></h6><br>
                        <h6 style="display: inline;"><b>TOTAL DONATIONS | </b><?= $total_do; ?></h6><br>
                        <h6 style="display: inline;"><b>TOTAL DISBURSEMENTS | </b><?= $total_d; ?></h6><br>
                        <h6 style="display: inline;"><b>OUTSTANDING BALANCE | </b><?= $bal; ?></h6>
                        <?php } ?>
                        <table class="table table-hover" style="background-color:#F2F2F2; font-size:15px;">
                            <thead>
                                <tr>
                                    <th>Payee</th>
                                    <th>OR/Invoice No.</th>
                                    <th>Date Disbursed</th>
                                    <th>Amount</th>
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
                                    <td><?= $payee; ?></td>
                                    <td><?= $invoice; ?></td>
                                    <td><?= $date; ?></td>
                                    <td><?= $amount; ?></td>
                                    </td>	
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="card-body text-right pr-5 pb-5">
                        <h5 style="display:inline;">Share to FB</h5>
                        <a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="_blank" style="font-size: 15px; display:inline;"><i class="fas fa-share"></i></a>
                    </div>
            </div>
    </div>
<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>