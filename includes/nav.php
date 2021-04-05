<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAWS In Action</title>
    <link rel="icon" href="images/icon.png">
    <link type="text/css" rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    <!--HORIZONTAL NAVIGATION BAR -->
    <div id="main"> <!--THIS IS THE START OF MAIN SECTION UP TO THE FOOTER-->
    <header>
        <div class="container nav-cont">
            <nav class="nav">
                <a class="burger" style="font-size:30px; cursor:pointer; color:#2595f0;" onclick="openNav()"><i class="fa fa-bars"></i></a>
                
                <!--PUSH NAV GOES HERE-->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i style="font-size: 20px;" class="fas fa-arrow-left"></i></a>
                    <a href="index.php"><i class="fas fa-home mr-5"></i>Home</a>
                    <a href="ufAdoption.php"><i class="fas fa-hands mr-5"></i>Adopt</a>
                    <a href="ufFosterCare.php"><i class="fas fa-hand-holding-heart mr-5"></i>Foster Care</a>
                    <a href="volunteer.php"><i class="fas fa-hand-paper mr-5"></i>Volunteer</a>
                    <a href="events.php"><i class="fas fa-calendar-check mr-5"></i>Events</a>
                    <a href="report.php"><i class="fas fa-bullhorn mr-5"></i>Report</a>
                    <a href="animals.php"><i class="fas fa-dog mr-5"></i>Animals</a>
                    <a href="wlForm.php"><i class="fas fa-clipboard-list mr-5 pl-2"></i>Wish List</a>
                    <a href="faqs.php"><i class="fas fa-question mr-5 pl-2"></i>FAQ's</a>
                    <a href="about.php"><i class="fas fa-info mr-5 pl-3"></i>About us</a>
                    <a href="contacts.php"><i class="fas fa-phone mr-5"></i>Contacts</a><hr>
                    <a href="newsFeed.php"><i class="fas fa-newspaper mr-5"></i>PAWS Feed</a>
                </div>
                <script>
                    function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                    }

                    function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft= "0";
                    }
                </script>
                <!--PUSH NAV ENDS HERE-->
                <a href="newsFeed.php" class="nav-link nfeed" style="padding:0; margin:0 0 0 20px;">Go to PAWSFeed</a>
                <ul class="nav-list" style="padding-top: 10px;">
                    <li>
                        <a href="index.php" class="nav-link home">Home</a>
                    </li>
                    <li>
                        <a href="contacts.php" class="nav-link contacts">Contacts</a>
                    </li>
                    <li>
                        <a href="about.php" class="nav-link about">About Us</a>
                    </li>
                </ul>
                <a href="ufAdoption.php" id="nav-av">ADOPT</a>
                <a href="volunteer.php" id="nav-av">VOLUNTEER</a>
                <a href="donate.php" id="nav-donate">DONATE</a>
            </nav>
            <!--MESSAGE FOR FEEDBACK-->
            <?php
            if(isset($_GET['msgFeedback'])){
                $msg = $_GET['msgFeedback']; 
                echo "<meta http-equiv=\"refresh\" content=\"5;URL=index.php\">";
            ?>  
                <div class="alert alert-success alert-dismissible p-2" style="font-size: 15;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $msg; ?></strong>
                </div>
            <?php } ?>
            <?php
            if(isset($_GET['msgWish'])){
                $msg = $_GET['msgWish']; 
                echo "<meta http-equiv=\"refresh\" content=\"10;URL=index.php\">";
            ?>  
                <div class="alert alert-success alert-dismissible p-2" style="font-size: 15;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $msg; ?></strong>
                </div>
            <?php } ?>
        </div>
    </header>
    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>
<!-- END OF NAVIGATION, NEXT IS BANNER -->