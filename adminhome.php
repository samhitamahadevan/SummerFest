<?php
    include_once'adminheader.php';
?>



    <div class="title">
            <h1 id="h11"> Welcome Admin!</h1>
    </div>
    
    <div class="registerbox"> 
         <div class="button">
            <a href="admincreate.php" class="btn">CREATE </a> 
            <a href="admindelete.php" class="btn">DELETE </a>
			<a href="events.php" class="btn">EVENTS </a>
			
        

        <?php 

            if(isset($_SESSION["userid"])) {
                echo "<a href='cart.php' class='btn'> Your Cart </a>";
                echo "<a href='includes/logout.inc.php' class='btn'> Logout </a>"; 
            }

            else {

                echo "<a href='admincreate.php' class='btn'>CREATE </a>"; 
                echo "<a href='admindelete.php' class='btn'>DELETE</a>"; 
				echo "<a href='events.php' class='btn'>EVENTS</a>";
            }

        ?>

        </div> 

    </div> 




<?php
include_once'footer.php';
?>