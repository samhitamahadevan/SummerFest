<?php
    include_once'header.php';
?>

<div>
<img src= "bandwars.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Are you a stage singer or a bathroom performer? Well, if you're either this event is perfect for you!
                Summerfest 2021 is proud to present Band-Wars, a chance to battle it out with the most talented performers in the city.
 
                     <ul>
                    <li >Sign up as individuals or teams upto 5</li>
                    <li > The event goes on from 12am to 4pm</li>
                    <li>Students must bring their own insturments</li>
                    <li> Vulgar Language in the songs will not be tolerated </li>
                    </ul>
                </h4>
            </div>
        
            <div class="button" style = "position:absolute; left:55%; top:85%;">
            <button class ="btn"> REGISTER FOR EVENT </button>
            </div>
             <div class="button1" style = "position:absolute; left:75%; top:85%;">
                 <button class="btn2" onclick="decrement()">  -   </button>
                <input class="btn3" id=demoInput type=number min=0 max=5 style="color:white;">
                <button class="btn2" onclick="increment()">  +  </button>
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