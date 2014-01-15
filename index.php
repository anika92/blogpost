<?session_start();?>
<?php

 include"home.php";
define('DB_HOST', 'localhost');
define('DB_NAME', 'anika_php');
define('DB_USER','anika_html');
define('DB_PASSWORD','myfirstweb2323');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
 
function NewUser()
{
    $fullname = $_POST['name'];
    $userName = $_POST['user'];
    $email = $_POST['email'];
    $password =  $_POST['pass'];
    $query = "INSERT INTO users (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {?>
    <meta http-equiv="refresh" content="0; url=successful.php"><?
    
    }
}
 
function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
    $query = mysql_query("SELECT * FROM users WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());



 if(!$row = mysql_fetch_array($query) )
    { 
     
    newuser();
    
    }
    else{?>
    <meta http-equiv="refresh" content="0; url=registered.php"><?
    
 }
   }
}
 
if(isset($_POST['submit']))
{
    SignUp();
}
?>


