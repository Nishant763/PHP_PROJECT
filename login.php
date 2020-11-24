<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration Page</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
</head>
<body>
    <header class="flex">
        <div class="container">
            <h3>Login Here</h3>
            <form action="validation.php" method="post" id="loginForm" >
                <div class="formEl">
                    <label for="email">Your Email</label><br>
                    <input type="email" placeholder="Enter your mail.." class="inputEl" name= "email" required>
                </div>
                <div class="formEl">
                    <label for="password">Your Password</label><br>
                    <input type="password" placeholder="Enter your password.." class="inputEl" name="password" required>
                </div>
                <div class="formEl">
                    <label for="password">Your Name</label><br>
                    <input type="text" placeholder="Enter your name.." class="inputEl" name="username" required>
                </div>
               <button type="submit" class="loginB">LogIn</button>
            </form>
        </div>
        <div class="container">
            <h3>Register Here</h3>
            <form action="registration.php" method="post" id="loginForm" >
                <div class="formEl">
                    <label for="email">Your Email</label><br>
                    <input type="email" placeholder="Enter your mail.." class="inputEl" name="email" required>
                </div>
                <div class="formEl">
                    <label for="password">Your Password</label><br>
                    <input type="password" placeholder="Enter your password.." class="inputEl" name="password" required>
                </div>
                <div class="formEl">
                    <label for="password">Your Name</label><br>
                    <input type="text" placeholder="Enter your name.." class="inputEl" name="username" required>
                </div>
               <button type="submit" class="loginB">Register</button>
            </form>
        </div>
    </header>
   
</body>
</html>