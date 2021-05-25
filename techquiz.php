<?php
    include_once'header.php';
?>

<div >
<img src= "techquiz.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                    Summerfest 2021 is proud to present Tech Quiz, a quiz exclusively for all the tech nerds out there! Use your tech knowledge to win an exciting cash prize!
 
                     <ul>
                    <li >Individual participation only</li>
                    <li > The event is from 2pm-4pm</li>
                    <li> Laptops not necessary</li>
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