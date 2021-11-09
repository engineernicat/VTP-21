<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

    <h2>Login</h2>

    <div class="container">
        <form method="POST" action="#">
            <div class="row">
                <div class="col">
                    <div>
                        
                     <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div>
                      <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div>
                      <input type="submit" href="home.html">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="#" style="color:white" class="btn">Forgot password?</a>
            </div>
        </div>
    </div>
    <div class="container1">
        <img src="log.svg" height="388px">

    </div>
    

</body>

</html>