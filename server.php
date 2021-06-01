<?php
session_start();
//initializing variables
$name = "";
$email = "";
$occupation = "";
$username = "";


// checking for errors 

$errors = array();



// connect to database
$db = mysqli_connect('localhost', 'root', '', 'alumdb') or die("could not connect to database");

// register users


$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$occupation = mysqli_real_escape_string($db, $_POST['occupation']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


//form validation

if(empty($name)) {array_push($error,"name is required" )};
if(empty($email)) {array_push($error, "email is required" )};
if(empty($occupation)) {array_push($error, "occupation is required" )};
if(empty($username)) {array_push($error, "Username is required" )};
if(empty($password_1)) {array_push($error, "Password is required" )};
if(empty($password_1 != $password_2)) {array_push($error, "Passwords need to be the same" )};


// check db for users with existing username

$user_check_query = "SELECT * FROM user WHERE username =  '$username' or '$email' = '$email' LIMIT 1";



   
   $results= mysqli_query($db,$user_check_query);
   $user= mysqli_fetch_assoc($result);

   if($user) {
   if($user['username']=== $username){array_push($errors, "Username already exists");}
   if($user['email']=== $email){array_push($errors, "Email already exists");}

   }
   
   // register user if there are no errors
    if(count($errors)==0) {

        $password = md5($password_1); 
        $query = "INSERT INTO user(name,email,occupation,username,password) VALUES('$name', '$email', '$occupation', '$username', '$password')";

   
   mysqli_query($db,$query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged In, Ex-Commando!";



    header(location: index.html);
}



?>