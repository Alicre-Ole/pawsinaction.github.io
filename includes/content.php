
<div class="mainContent container" id="about">
    <h1> <b> Our Story </b></h1><hr class="line">
    <?php
        $sqlStory = mysqli_query($conn,"SELECT * FROM story");
        while($row = mysqli_fetch_array($sqlStory)){
            $story = $row['story'];
    ?>
    <h1 class="pMV pl-5" style="color:gray; font-style:oblique; border-style: solid; border-width: 0 0 0 5px; border-color:gray;"><b>" <?= nl2br($story); ?><a href="about.php" class="btn btn-success p-3">See More</a> "</b></h1><br>
    
    <video class="storyVideo" controls>
        <source src="videos/<?php echo $row['video']; ?>" type="video/mp4">
        <source src="videos/<?php echo $row['video']; ?>" type="video/ogg">
    </video>
    <?php } ?>

    <div class="vision row">
        <div class="paw col-md-2 paw">
        </div>
        <?php
            $sqlVision = mysqli_query($conn,"SELECT * FROM vision");
            while($row = mysqli_fetch_array($sqlVision)){
                $vision = $row['vision'];
        ?>
        <div class="col-md-10">
            <h1> <b> Vision </b></h1><hr class="line">
            <p class="pMV pl-5"  style="border-style: solid; border-width: 0 0 0 5px; border-color:gray;""><b><?= $vision; ?></b></p>
        </div>
        <?php } ?>
    </div>
    <div class="mission row">
        <div class="col-md-10">
            <?php
                $sqlVisionMission = mysqli_query($conn,"SELECT * FROM mission");
                while($row = mysqli_fetch_array($sqlVisionMission)){
                    $mission = $row['mission'];
            ?>
            <h1 style="text-align: right;"> <b> Mission </b></h1><hr class="line">
            <p class="pMV pr-5"  style="text-align: right; border-style: solid; border-width: 0 5px 0 0; border-color:gray;"><b><?= $mission; ?></b></p>
            <?php } ?>
        </div>
        <div class="paw col-md-2 paw">
        </div>
    </div>

    <div class="fPet">
        <h1> <b> Featured Animals </b></h1><hr class="line">
        <div class="container py-1">
            <div class="row mt-1">
                <?php
                    $query = "SELECT * FROM animals WHERE featured = 1";
                    $queryRun = mysqli_query($conn,$query);
                    $checkAnimal = mysqli_num_rows($queryRun) > 0;

                    if($checkAnimal){
                        while($row = mysqli_fetch_assoc($queryRun)){
                            ?>
                            <div class="col-sx-5 col-sm-6 col-md-4 col-lg-3 mt-3 text-center">
                                <div class="card petCard" style="border-radius: 10%;">
                                    <img src="animals/<?php echo $row['profile'] ?>" width="220" height="200" alt="Animals" style="margin-left: auto; margin-right:auto; border-radius: 10%; margin-top:5px;">
                                    <div class="card-body">
                                        <h1 class="card-title"><?php echo $row['name'] ?></h1>
                                        <a href="viewDetails.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        echo "No Animal Found!";
                    }
                ?>
            </div>
            <div class="col-12 mt-5 text-center">
                <a style="width: 120px; font-size:15px;" href="animals.php" class="btn btn-success p-2">
                    See More
                </a>
            </div>
        </div>
    </div>
</div>