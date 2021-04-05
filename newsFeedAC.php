<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/HTMLlinks.php');
?>
    <!--ANIMALS PAGE BODY STARTS HERE-->
    <div class="myContainer container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-lg-4 col-sm-5 text-right fixed-top" style="background-color:navy;">
                <div class="text-right" style="display: inline;"><br>
                    <a href="index.php" class=" p-3 bg-secondary text-right" style="color: white; text-decoration:none; border-radius: 5px;"><i class="fas fa-arrow-left"></i></a>
                    <a href="newsFeed.php" class=" p-3 bg-secondary text-right ml-1" style="color: white; text-decoration:none; border-radius: 5px;">PAWSFeed</a>
                    <a href="newsFeedLF.php" class=" p-3 bg-secondary text-right ml-1" style="color: white; text-decoration:none; border-radius: 5px;">Lost&Found</a>
                    <a href="newsFeedAC.php" class=" p-3 bg-primary ml-1 text-right" style="border-radius: 5px; color: white; text-decoration:none;">AnimalCruelty</a><br><br>
                </div>
            </div><br><br><br><br>


            <?php
                $sqlAC = "SELECT * FROM acreport WHERE status = 1 ORDER BY id DESC";
                $queryRun = mysqli_query($conn,$sqlAC);
                $checkAnimal = mysqli_num_rows($queryRun) > 0;

                if($checkAnimal){
                    while($row = mysqli_fetch_assoc($queryRun)){
                        $date = $row['date'];

            ?>
            <div class="newsFeed">
                <div class="rounded shadow-lg">
                    <div class="bg-success rounded-circle text-white m-2" style="width: 40px; height:40px; display:inline-block">
                    </div>
                    <pre style="font-size: 20px; display:inline; display:inline-block; border-style:solid; border-color:gray; border-width:0 0 1px 0;">SYSTEM USER</pre>
                    <pre style="margin-left: 53px; font-size:12px;"><b>Reporter:</b> <?php echo $row['name'] ?></pre>
                    <pre style="margin-left: 53px; font-size:12px;"><b>Phone Number:</b> <?php echo $row['number'] ?></pre>
                    <pre style="margin-left: 53px; font-size:12px;"><b>Animal Type:</b> <?php echo $row['aType'] ?></pre>
                    <pre style="margin-left: 53px; font-size:12px;"><b>Cruelty Type:</b> <?php echo $row['cType'] ?></pre>
                    <br>
                    <h4 class="ml-5 mt-2 pl-4" style="font-style:italic;"><b>Caption: </b><?php echo $row['caption'] ?></h4>
                    <div class="col-sx-5 col-sm-6 col-md-4 col-lg-3 mt-3 text-center pl-5 ml-4 pr-5">
                        <img src="reports/<?php echo $row['picture'] ?>" width="200" height="200" alt="Picture" style="margin-left: auto; margin-right:auto; border-radius: 10%; margin-top:5px;">
                    </div>
                    <div class="card-body text-right">
                        <h5 style="display:inline;">Share to FB</h5>
                        <a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="_blank" style="font-size: 15px; display:inline;"><i class="fas fa-share"></i></a>
                    </div>

                    <br>
                </div>
            </div>
            <hr>
            <?php
                }
            }else{
                echo "No Report Found!";
            }
            ?>
            
    </div>
<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>