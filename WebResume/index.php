
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style2.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <div id = "signinheader">
    <h1>Please Sign in </h1>
    </div>
    <div id="HeroPIC"> 
    <img id="HeroPic" src="Images/HeroPic.jpg" alt="An image of mountains">
    </div>
  
</head>
<body>
    
    <main>
    

    <div id = signin>
    <form action="index.php" method="post">
        Enter your name: 
        <input type="text" name="name" value="">
            <br>
            <br>

        Enter your purpose:
            <br>
        <input type="radio" name = "purpose" value="Employer">
        Employer
            <br>
        <input type="radio" name = "purpose" value="Friend">
        Friend
            <br>
        <input type="radio" name = "purpose" value="Other">
        Other
            <br>
            <input type="Submit" name="comfirm" value="Comfirm">
            

    </form>
    </div>
    </main>
    
   
</body>
</html>

<?php 
session_start(); 
if(isset($_POST["purpose"]))
{
    $_SESSION['$Purpose'] = $_POST["purpose"];
    $_SESSION['$Name'] = "";
    $_SESSION['$Name'] = $_POST["name"];
    $Name = $_POST["name"];
    $Purpose= $_POST["purpose"];
    
    if($Purpose == "Employer")
    {
        echo<<<HTML
        <h4> Hello $Name. <br> Thank you for looking at my web resume. </h4>
        HTML;
    }

    if($Purpose == "Friend")
    {
        echo<<<HTML
         <h4>what's up $Name whatcha doing here?</h4>
         HTML;
    }

    if($Purpose == "Other")
    {
        echo <<<HTML
         <h4>Welcome $Name </h4>
         HTML;
    }
    
    echo <<<HTML
    <br>
    <p class = "continue"> <a href="home.php"> Continue to Resume</a> </p>
    
    HTML;

}

else
{
    echo <<<HTML
          <h5>Please Complete the form</h5> 
         HTML;
}
?>
<html>
<div id="filler"></div>
    <footer id="SIfooter"><p>&copy 2024 Hunter Dietzenbach all rights reserved</p></footer>
</html>