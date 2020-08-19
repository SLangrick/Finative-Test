<?php
session_start();

$buisnessname = $password = "";

/* Check if already logged in*/
if(isset($_SESSION["loggedin"] == true){
    header("location: businesspage.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Incentive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        
    </head>
    <body>
        <form action="calc.php" method="POST">
            <input type="text" value="Business Name" name="business">
            <input type="text" value="Password" name="password">
            <input type="submit" Value="Submit">
        </form>
    </body>
    <script>
        function validateForm(){
                var x = document.forms["form"]["business"].value;
                if (x == "") {
                    alert("Business must be entered");
                    return false;
                }

                var x = document.forms["form"]["password"].value;
                if (x == "") {
                    alert("Password must be entered");
                    return false;
                }
            }
    </script>
</html>
