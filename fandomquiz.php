<?php
    include_once'header.php';
?>

<div>
<img src= "fandomquiz.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Marvel or DC. Summerfest 2021 is excited to present Fandom Quiz, a fun non-technical event to bring your friends to! 
                This is a chance to test your skills on a variety of fandoms
 
                     <ul>
                    <li >Sign up as individuals or teams upto 3</li>
                    <li > The event goes on from 4pm to 6pm</li>
                    <li>Direct answers get 10 points</li>
                    <li> Passed answers get 5 points</li>
                    </ul>
                </h4>
            </div>
        
            <div class="button" style = "position:absolute; left:55%; top:75%;">
            <button class ="btn"> REGISTER FOR EVENT </button>
            </div>
             <div class="button1" style = "position:absolute; left:75%; top:75%;">
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


</body>
</html>
<?php
    include_once'footer.php';
?>