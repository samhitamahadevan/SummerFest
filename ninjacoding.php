<?php
    include_once'header.php';
?>

<div>
<img src= "ninjacoding.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Summerfest 2021 is proud to present Ninja Coding, an event exclusively for those aspiring hackers! This event tests your limits as you are pushed to code crazy tasks in a limited amount of time
 
                <ul>
                    <li>Sign up as individuals</li>
                    <li> The event goes on for as long as you can code</li>
                    <li>Students must bring their own laptops</li>
                    <li> Internet connectivity will be provided </li>
                </ul>
                </h4>
            </div>
        
            <div class="button" style = "position:absolute; left:55%; top:75%;">
            <button class ="btn"> REGISTER FOR EVENT </button>
            </div>
             <div class="button1" style = "position:absolute; left:75%; top:75%;">
                 <button class="btn2" onclick="decrement()"> - </button>
                <input class="btn3" id=demoInput type=number min=0 max=5 style="color:white;">
                <button class="btn2" onclick="increment()"> + </button>
                <script>
                    function increment() 
                    {
                        document.getElementById('demoInput').stepUp();
                    }
                    function decrement() 
                    {
                        document.getElementById('demoInput').stepDown();
                    }
                </script>
            </div> 

<?php
    include_once'footer.php';
?>