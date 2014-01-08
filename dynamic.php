<?session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Mike Roush" />
	<meta name="generator" content="author" />
<link rel="stylesheet" type="text/css" href="front.css">
<title>welcome to my blog</title>

<h1> Welcome TO My Blog
</h1>

</head>
<body>
<div class="menu">
<ul>
<li><a href="dynamic.php">প্রথমপাতা</a></li>


</ul>
</div>
<div class="login">
<ul> 
		<li><a href="frontpage.php">Login</a></li> 
		<li><a href="Signup.php">Signup</a></li> 
	<?
	       if(!$_SESSION['user_id'] )
		echo "here is no session";
		
		else{
		echo "here is session";
		}
	?>	
		<li><a href="logoutform.php">Logout</a></li> 
</ul>
</div>
<div id="farouter1">

<div id="outer1">
<div id="wrap">
<div id="headermain">

<?require_once"file.php";?>
</body>
</head>
</html>