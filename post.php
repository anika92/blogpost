<?php


 include"dynamic.php";
define('DB_HOST', 'localhost');
define('DB_NAME', 'anika_php');
define('DB_USER','anika_html');
define('DB_PASSWORD','myfirstweb2323');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

mysql_query("SET CHARACTER SET utf8",$con);                                                     //Extra for Bangla
mysql_query("SET SESSION collation_connection='utf8_general_ci'",$con) ;       // Extra for Bangla;


// lets build a blog

function NewUser()
{
    $fullname = $_POST['title'];
    $userName = $_POST['post'];
    $Date=$_POST['date'];
    $query = "INSERT INTO members (title,post,date_posted) VALUES ('$fullname','$userName','$Date')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
    echo "YOUR POST IS PUBLISHED...";
    }
}
 

if(isset($_POST['submit']))
{
    NewUser();
}
?>

