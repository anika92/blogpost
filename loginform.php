<?php


$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

define('DB_HOST', 'localhost');
define('DB_NAME', 'tutorial');
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$sql =("SELECT * FROM websiteusers WHERE email='$email' and pass='$pass'");
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count!=0){
 
require_once"dynamic.php";

}

else{
echo "username password do not match!!!!!!!!!!!!!!!!!!!!!!";
require_once"frontpage.php";
}
?>
  


