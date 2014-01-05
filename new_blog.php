<?php

$db_host = "anikanstu.tk/myphp "; //your host Database address
$db_username = "anika_html"; //your account username
$db_pass = "myfirstweb2323"; //your account password
$db_name = "anika_php"; //your database name
@mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
@mysql_select_db("$db_name") or die ("no database");
?>
	