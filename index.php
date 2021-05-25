<?php
    include_once'header.php';
?>


    <div class="title">
            <h1 id="h11"> SUMMER FEST 2021</h1>
    </div>
    
    <div class="registerbox"> 
         <div class="button">
            <!-- <a href="login.php" class="btn">LOGIN </a> 
            <a href="signup.php" class="btn">SIGN UP/REGISTER </a> -->
            

        <?php 

            if(isset($_SESSION["userid"])) {
                echo "<a href='cart.php' class='btn'> Your Cart </a>";
                echo "<a href='includes/logout.inc.php' class='btn'> Logout </a>";
                echo "<a href='events.php' class='btn'> Events </a>"; 
            }

            else {

                echo "<a href='login.php' class='btn'>LOGIN </a>"; 
                echo "<a href='signup.php' class='btn'>SIGN UP/REGISTER </a>"; 
            }

        ?>

        </div> 

    </div> 




<?php
include_once'footer.php';
?>