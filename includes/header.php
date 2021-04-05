<!--CAROUSEL AS HEADER STARTS HERE-->
<div class="header" id="myCarousel" style="margin: 0;">
<h4 style="color:azure; padding:2px 0 0 0; text-align:center;"> <b> Featured News </b> </h4>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <?php
            include_once('utilities/dbconnect.php');

            $sqlSlides = mysqli_query($conn,"SELECT * FROM carousel");
            while($row = mysqli_fetch_array($sqlSlides)){
                $slide1 = $row['slide1'];
                $slide2 = $row['slide2'];
                $slide3 = $row['slide3'];
        ?>
        <img class="d-block w-100" src="carousel/<?= $slide1; ?>" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="carousel/<?= $slide2; ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="carousel/<?= $slide3; ?>" alt="Third slide">
        </div>
        <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>