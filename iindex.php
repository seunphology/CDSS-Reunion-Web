<?php include ('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
  <link rel="stylesheet" href="signup.css">
 

  







</head>
<body>


  



<div class="contact-title">

        <h1>Alumni registration form</h1> <br>

        <br>

    

        <h2>Let's get to know you! </h2>


    </div>

    <div class="contact-form">

        <form id="contact-form" method="POST" action="iindex.php">


        
        
        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
        <br>
        <input name="occupation" type="text" class="form-control" placeholder="Your Occupation" required>
        <br>
        <input name="username" type="text" class="form-control" placeholder="Username" required>
        <br>
        <input name="password_1" type="text" class="form-control" placeholder="Password" required>
        <br>
        <input name="password_2" type="text" class="form-control" placeholder="Confirm Password" required>
        <br>
        </div>

        <button type = "submit" name="reg_user">Submit</button>

        <p>Already registered?</p> <a href="signin.php"><b>Log In</b></a>

        </form>
    
</body>



</html>