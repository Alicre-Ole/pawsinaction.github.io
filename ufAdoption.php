<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/HTMLlinks.php');
?>
    <!--ANIMALS PAGE BODY STARTS HERE-->
    <div class="myContainer container-fluid">
        <div class="animalsTitle row">
            <div class="col-md-1">
                <a href="index.php"><i class="fas fa-arrow-left" style="color: white; font-size:large; padding-top:12px;"></i></a>
            </div>
            <div class="col-md-3">
                <h1 style="color: white; padding-top:5px;">Animals Up for Adoption</h1>
            </div>
        </div>

        <div class="container animalContent">
            <div class="row">
                <?php
                    $sqlDog = "SELECT * FROM animals WHERE upFor = 'Adoption' AND status = 1";
                    $queryRun = mysqli_query($conn,$sqlDog);
                    $checkAnimal = mysqli_num_rows($queryRun) > 0;

                    if($checkAnimal){
                        while($row = mysqli_fetch_assoc($queryRun)){
                            ?>
                            <div class="col-sx-5 col-sm-6 col-md-4 col-lg-3 mt-3 text-center">
                                <div class="card petCard" style="border-radius: 10%;">
                                    <img src="animals/<?php echo $row['profile'] ?>" width="220" height="200" alt="Animals" style="margin-left: auto; margin-right:auto; border-radius: 10%; margin-top:5px;">
                                    <div class="card-body">
                                        <h1 class="card-title"><?php echo $row['name'] ?></h1>
                                        <a href="viewADetails.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View Details</a>
                                        <a href="adoptForm.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Adopt</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        echo "No Animal Found!";
                    }
                ?>
            </div><br>
        </div>
    </div><br><br><br>
    <div class="text-center" style="color:gray; opacity: .3; font-style:italic;">
        <h1>... that this world will be a little heaven for both humans and animals ...</h1>
    </div>
<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>