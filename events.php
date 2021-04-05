<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid" style="padding:90px 0 0 0; opacity:.8; background-color:#F9F9F9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Events</h1><hr>
            </div><br>
            <div class="row">
                <?php
                    $sqlEvent = "SELECT * FROM event ORDER BY id DESC";
                    $queryRun = mysqli_query($conn,$sqlEvent);
                    $checkEvent = mysqli_num_rows($queryRun) > 0;

                    if($checkEvent){
                        while($row = mysqli_fetch_assoc($queryRun)){
                ?>
                <div class="col-md-2 mt-4 ml-5" style="background-image: url(images/paw.png); background-repeat:no-repeat; background-size:contain; height:100px; border-bottom: #001C54;">
                </div>
                <div class="col-md-9" style="border-bottom: #001C54; border-width:0 0 5px 1px; border-style:solid;">
                    <h1><?php echo $row['name'] ?></h2>
                    <h4><b>Date: </b><?php echo $row['startDate'] ?> - <?php echo $row['endDate'] ?></h4>
                    <h4><b>Time: </b><?php echo $row['startTime'] ?> - <?php echo $row['endTime'] ?></h4>
                    <h4><b>Location: </b><?php echo $row['location'] ?></h4><br>
                    <h5><?php echo $row['description'] ?></h5><br><br>
                </div>
                <?php
                        }
                    }else{
                        echo "No Animal Found!";
                    }
                ?>
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