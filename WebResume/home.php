<?php
session_start();
include("header.html");
if(isset($_SESSION['$Name']));
{
    $name =  $_SESSION['$Name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/home2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <div id = HeroPIC> <img id= "HeroPic" src="Images/HeroPic.jpg" alt="An image of mountains"></div>
</head>
<body>
    <main> 

        <div id = "leftBar">
            <img id= "profilePic" src="Images/profilePic.jpg" alt="An image of Hunter Dietzebach">
            <h1>My Skills</h1> 
    <p>HTML</p> 
    <div class="container"> 
        <div class="skill html">90%</div> 
    </div> 
  
    <p>PHP</p> 
    <div class="container"> 
        <div class="skill php">60%</div> 
    </div> 

    <p>Python</p> 
    <div class="container"> 
        <div class="skill Python">80%</div> 
    </div> 

    <p>Java</p> 
    <div class="container"> 
        <div class="skill Java">95%</div> 
    </div> 

    <p>English</p> 
    <div class="container"> 
        <div class="skill English">100%</div> 
    </div> 

    <p>Spanish</p> 
    <div class="container"> 
        <div class="skill Spanish">60%</div> 
    </div> 

    <p>Enthusiasm</p> 
    <div class="container"> 
        <div class="skill Enthusiasm">110%</div> 
    </div> 


    
        </div>
        
        <div id = rightBar>
            
                <p>Welcome to my Web Resume <?php echo $name;?>, <br>
                &nbsp;&nbsp;&nbsp;&nbsp;My name is Hunter Dietzenbach. I am currently a Student at Montana State Univeristy. GO CATS! I built this website as a practice and a demonstration of my HTML, CSS, and PHP skills.
                Currently, it is a W.I.P. I started development at the end of July 2024 and will continue updating it over time.
                whether you are a potential employer a friend of mine or just looking around I hope you enjoy what you see. <br> 
                <br>
                Update 1.1: added a Projects tab and improved Usability Heuristics as well as slightly altered color scheme. 11/21/24 <br>
                <br>Thank you for taking a look. Please
                <a id="signin" href="index.php"> sign in.</a>
                </p>
            
        </div>

    </main>
    
</body>
</html>

<?php
include("footer.html")
?>