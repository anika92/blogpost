<html>
<body>
<?php

require_once"dynamic.php";
$con=mysql_connect("localhost","anika_html","myfirstweb2323");
if(!$con)
die('could not connect:'. mysql_error());
mysql_select_db('anika_php',$con);

mysql_query("SET CHARACTER SET utf8",$con);                                                     //Extra for Bangla
mysql_query("SET SESSION collation_connection='utf8_general_ci'",$con) ;       // Extra for Bangla;


// lets build a blog
if(isset($_GET['post'])){
$post = $_GET['post'];

// first of all we will check string length
if(strlen($post) > 11){ // if post id is bigger than 11 charachters
die('Blog post nof found.');
}
// now we will make sure that the post id is numeric and this is a nice security method
if(is_numeric($post)){ // is numeric allows numbers only
$post = (int)$post; // and the int function, which replace every
// string to its correspoing number

// for the tutorial im gonna add mysql_real_escape_string
// but is not really needed in this case
$post = mysql_real_escape_string($post); // final sqli defense

// final part
$query = mysql_query("SELECT title FROM post WHERE id=$post LIMIT 1");
while($row = mysql_fetch_array($query)){
echo $row['title'];
}

}
else{ // if post is not numeric then
die('Blog post nof found.'); // post does not exist
}

}
else{
// if post is not submitted display them all
$query = mysql_query("SELECT id,title,post,date FROM 'post' WHERE 'id'='1'");
while($row = mysql_fetch_array($query)){?>
<div id="title"> <?echo $row['title'].'<br/>'.'<br/>';?></div>
<?

echo $row['post'].'<br/>';
echo $row["date"];
?>
	</body>
	</html>