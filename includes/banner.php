
<div class="banner">
    <div class="col-lg-8 col-md-12">
        <img src="images/whiteLogo.png" alt="Petsada Logo" style="display: block; margin-left:auto; margin-right:auto; width:40%; padding-top:20%;" class="bigLogo">
        <h1 style="color:gray; text-align:center; font-style:italic; font-size: 160%;">"That this world will be a little heaven for both humans and animals" <br><br><b>Make More Tails Wag!</b></h1><br>
        <a href="#myCarousel" class="learnMore">
            Learn More <i class="fas fa-angle-double-right"></i>
        </a>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>