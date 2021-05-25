
<?php
    include_once'header.php';
?>

<div class="registerbox"> 
         <div class="button">

  <?php
if(isset($_SESSION["username"])) {
                echo "<h1 id='h11'> Hello there " . $_SESSION["username"] . "</h1>";
               
                 
            }

?>
</div> 

</div> 

<div class="registerbox"> 
         <div class="button">
<?php
  if(isset($_SESSION["email"])) {
                echo "<h5 id='h11'> Email is " . $_SESSION["email"] . "</h5>";
               
                 
            }

?>

</div> 

</div> 

