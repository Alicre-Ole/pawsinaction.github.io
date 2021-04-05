<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/HTMLlinks.php');
?>
    <div class="login row" style="background-color: #F2F2F2;">
        <div class="col-md-7 col-sm-12 text-center" style="background-color:#001C54; height: 700px;"><br><br>><br><br><br><br><br><br>
            <img src="images/whiteLogo.png" alt="Logo" height="40%">
            <h3 style="color: gray;"> <i> "That this world will be a little heaven for both humans and animals"
            </i> <br><br><b>Make More Tails Wag!</b></h3><br><br>
            <img src="images/whitePaw.png" alt="Paw" height="7%"><br><br><br><br>
            <a href="index.php">Go to Website</a>
        </div>
        <div class="col-md-5 col-sm-12 adLogin">
            <div class="adLoginMain shadow-lg">
                <form action="processes/login.php" role="form" method="POST">
                    <h1 style="text-align: center; color:#001C54">Login</h1><br>
                    <i class="fas fa-user mr-2" style="font-size: 20px; color:#001C54"></i><label for="username" style="font-size:large;">Username</label><br>
                    <input class="form-control" type="text" name="username" placeholder="Enter Username" style="padding:15px; font-size:12px;" required><br>
                    <i class="fas fa-lock mr-2" style="font-size: 20px; color:#001C54"></i><label for="password" style="font-size:large;">Password</label><br>
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" style="padding:15px; font-size:12px;" required>
                    <input class="form-control" type="password" name="confirm" placeholder="Confirm Password" style="margin-top:1px; padding:15px; font-size:12px;" required>
                    <a href="#" class="text-right form-control" style="border: none;">Forgot Password</a>
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>