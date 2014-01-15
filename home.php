
<?session_start();?>
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
			  <br /><h1 id="theader"><h1>Anika Shahabuddin</h1>
        <span id="theadert">Trust your crazy ideas!!</span>
			</div>
		  <div id="mainbanner">
			 What we learn with pleasure,we never forget
			</div>
			
		

			<div id="container">
			<h2></h2>
			<?require_once "file.php";?>
			</div><br/>
		<div class="login">	
		
		<?	  
	$logout='logoutform.php';
	$sign='Signup.php';
	$add='postform.php';
	       
	     if  (!$_SESSION['user_id'] ){
                
                echo  "<a href='".$sign."'>নতুন একাউন্ট খুলুন</a>".'<br/>';
                echo "অথবা লগিন করুন".'<br/>';?>
             
               
		
                
            
<table border="0">
    <form method="post" action="loginform.php"> 
Email:<input type="text" name="users_email"/></br><br/>
Password:<input type="password" name="users_pass"/></br>
<input type="submit" name="submit" value="Login" />
		 
</form>

   <?
                }
                else{
                
                 echo "<a href='".$add."'>আপনার পোস্ট লিখুন</a>".'<br/>';
                echo"<a href='".$logout."'>লগআউট</a>".'<br/>';
                
                }
	
                ?>
               
			</div>
			
			
			   <div class="authorbox">
	 
	      
	        <div class="topinfo">
	 <div class="left">
	                <p>Author: <strong>Anika Shahabuddin</strong></p>
	            </div>
	 </div>
	  <div class="authorimg">
	            <img src="images/anika.jpg">
	        </div>
	 <div class="authorbio">
	            <p>অনেক সময় লাগিয়ে এই ব্লগ এর<br/> কাজটা করলাম।<br/>জীবনে যেকোন ভাল কাজ করতে গেলে<br/> বাধা আসবেই।<br/>কিন্তু এই বাধা টা অতিক্রম<br/> করাটাই আসল।</br>কাজ করতে বসলে অনেক চিন্তা<br/> অনেক কষ্ট মনে পরে যায়।</br>কিন্তু কিছু করে দেখানোর চিন্তা একবার<br/> মাথায় আসলে আর কিছুই মনে থাকেনা।<br/>নিজেকে ফিলিংস ছাড়া মনে হয়। </p>
	            <a href="info.php">More About Me
	        </div>
	 	        <!-- লেখককে অনুসরণ করার জন্য মাধ্যম (ছবি ও লিংক) -->
	        <div class="followme">
	             <div class="social"><a href="https://www.facebook.com/anika.shahabuddin?ref=tn_tnmn">Find Me in</a><img src="images/facebook.jpg" title="Find Me In Facebook"><br/></div>
	        </div>
	        
	      
	       </div>
	  
	
	</div>
	 
	</body>
	
</html>
