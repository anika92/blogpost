<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>anikanstu</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
  </head>
  <body>

    <div id="header">
      <div id="topheader">
			  <br /><h1 id="theader">Anika shahabuddin</h1>
        <span id="theadert">Creativity makes creation</span>
			</div>
		  <div id="mainbanner">
			  Try To Find Out Yourself
			</div>
			  

<?php


$con=mysql_connect("localhost","anika_html","myfirstweb2323");
if(!$con)
die('could not connect:'. mysql_error());
mysql_select_db('anika_php',$con);

mysql_query("SET CHARACTER SET utf8",$con);                                                     //Extra for Bangla
mysql_query("SET SESSION collation_connection='utf8_general_ci'",$con) ;       // Extra for Bangla;


$postid= $_GET['id'];
// if post is not submitted display them all
$query = mysql_query("SELECT * FROM post where id= $postid");
while($row = mysql_fetch_array($query)){?><div id="container">
<?

 echo $row['title'].'<br/>'.'<br/>';
echo date('Y-m-d').'<br/>';

echo $row['description'].'<br/>';

?></div><?

}
?>
</div>

		
