<?php
include('conn.php');//para sa connection sang database

if (isset($_POST['submit'])) {//condition kun e click ang button
$UserName=$_POST['users_email'];//variable ang $Username kag ang $_POST['UserName'] ay value sang textbox nga UserName
$Password=$_POST['users_pass'];//variable ang $Username kag ang $_POST['Password'] ay value sang textbox nga Password
$result=mysql_query("select * from websiteusers where email='$UserName' and pass='$Password'")or die (mysql_error());//query sang database 
		
$count=mysql_num_rows($result);//isipon kn may tyakto sa query
$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0){//kun may tyakto sa query e execute yah ang code sa dalom
		session_start();//para mag start ang session
		$_SESSION['userID']=$row['userID'];

		header('location:index.php');
		}else{
		header('location:frontpage.php');
		}
}
?>

