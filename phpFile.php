<?php
include_once"dynamic.php";
include_once"register.php";
include_once"config.php";
include_once"fg_config.php";
$link=mysql_connect('localhost','root','');
if(!$link){
	die('could not connect to server');
}
$db=mysql_select_db('tutorial',$link);
if(!db){
	die('could not connect to database');
}
$data="SELECT * FROM blog_post";
$data_query=mysql_query($data);
$value=mysql_fetch_assoc($data_query);

	?>
		<div id="php">
<?php echo $value['title'].'<br>'.$value['post'];
?>
	
</div>
