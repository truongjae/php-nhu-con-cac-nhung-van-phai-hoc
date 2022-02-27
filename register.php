<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="features.php">Features</a>
				</li>
				<li>
					<a href="news.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
                <li>
					<a href="contact.php">Contact</a>
				</li>
				<li class="active">
					<a href="register.php">Register</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="section">
			<h1>Register</h1>
			<form method="POST" class="message">
            <input type="text" name="txtEmail" placeholder="Email" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="text" name="txtUsername" placeholder="Username" onFocus="this.select();" onMouseOut="javascript:return false;"/>
				<input type="password" name="txtPassword" placeholder="Enter the password" onFocus="this.select();" onMouseOut="javascript:return false;"/>
                <input type="password" name="txtPassword2" placeholder="Enter a new password" onFocus="this.select();" onMouseOut="javascript:return false;"/>

				<input type="submit" name="txtSub" value="Reg"/>
			</form>
			<?php
            function check(){
                $check = true;
                if (empty($_POST['txtEmail'])){
                    $check=false;
                    echo '<script>alert("Email khong duoc de trong")</script>';
                }
                if (!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)) {
                    $check = false;
                    echo '<script>alert("Email khong dung dinh dang")</script>';
                }
                if (empty($_POST['txtUsername'])){
                    $check=false;
                    echo '<script>alert("Ten nguoi dung khong duoc de trong")</script>';
                }
                if (empty($_POST['txtPassword'])){
                    $check=false;
                    echo '<script>alert("Mat khau khong duoc de trong")</script>';
                }
                if ($_POST['txtPassword'] != $_POST['txtPassword2']){
                    $check=false;
                    echo '<script>alert("Mat khau khong trung khop")</script>';
                }
                return $check;
            }
			if(isset($_POST['txtSub'])){
                if(check()){
                    include("controll.php");
                    $excute = new AbstractQuery();
                    $run = $excute->REGISTER($_POST['txtEmail'],$_POST['txtUsername'],$_POST['txtPassword']);
                    if($run)
                        echo '<script>alert("dang ki thanh cong")</script>';
                    else
                        echo '<script>alert("loi cmnr")</script>';
                }
            }
			
			
			?>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>