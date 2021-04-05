<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid" style="padding:90px 0 0 0; opacity:.8; background-color:#F9F9F9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Frequently Asked Questions (FAQs)</h1><hr>
            </div><br>
            <div class="row">
                <?php
                    $sqlFaqs = "SELECT * FROM faqs";
                    $queryRun = mysqli_query($conn,$sqlFaqs);
                    $checkFaqs = mysqli_num_rows($queryRun) > 0;

                    if($checkFaqs){
                        while($row = mysqli_fetch_assoc($queryRun)){
                ?>
                <div class="col-md-12" style="border-bottom: #001C54; border-width:0 0 5px 0; border-style:solid; padding:20px;">
                    <h1><i class="fas fa-question-circle" style="font-size: 30px; margin-right:10px; color:#001C54;"></i><?php echo $row['question'] ?></h2>
                    <h4 style="border-width:0 0 0 5px; border-style:solid; padding:10px; border-color:goldenrod"><b>Answer: </b><?php echo $row['answer'] ?></h4>
                </div>
                <?php
                        }
                    }else{
                        echo "No FAQs Found!";
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