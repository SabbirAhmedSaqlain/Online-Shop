<?php

	session_start();
	include('dbcontroller.php');
	include "functions.php";

?>

<html>

<head>

		<title>Online Shopping</title>
		<link rel="icon" href="images/icon.ico" >

		<style type="text/css">
			body{
				background-image: url(images/body.jpg);
				 
			}

			#data{
				position: absolute;
				top: 100px;
				left: 400px;
	        	width: 350px;
	   			border: 5px solid ;
				border-color:#214989;
	   		    padding: 20px;
	    		margin: 20px;
	    		text-align: center;

			}
			.box{
				height: 30px;
				width: 200px;
			}
			#data a{
				font-size: 20px;
			}

			#login{

background-color:  rgb(41, 113, 229);
				border: none;
				color: white;
				text-align: center;
				text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    height: 35px;
			    width: 100px;
			}

			#login:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        	}

        	.shadow {
	        	color: blue;
	            text-decoration: none;
       		 }

        	.shadow:hover{
            	color: white;
    			text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        	}

        	.msg {
        		position: absolute;
        		top: 50px;
        		left: 430px;
        		color: blue;
        		font-size: 19px;
        	}
        	#home{
			position: absolute;
			text-align: center;
			color: rgb(17, 57, 122);
			top: 60px;
			left: 100px;
			width: 160px;
			font-size: 25px;
			padding: 5px 5px;
			border: solid;

		}





		</style>

</head>

<body>
		<a href="index.php"><h1  id="home">Home</h1></a>
		<form action="register.php" method="post">
		<div id="data">

			<h3>Username </h3>
			<input class="box" type="text" name="username" />
			<h3>Password </h3>
			<input class="box" type="password" name="password" /> 
			<h3>Confirm Password </h3>
			<input class="box" type="password" name="passconf" /> 
			<h3>Email </h3>
			<input class="box" type="text" name="email"  /><br><br>

			<input id="register" type="submit" name="submit" value="Register" /><br><br>
			<a class="shadow" href="login.php">Login</a>|
			<a class="shadow" href="forgot.php">Forgot Password</a>
			
		</div>

		</form>

<?php

 

		if(isset($_POST['submit'])){

		$username = protect($_POST['username']);
		$password = protect($_POST['password']);
		$passconf = protect($_POST['passconf']);
		$email = protect($_POST['email']);

 
		if(!$username || !$password || !$passconf || !$email){
			echo '<p class="msg">You need to fill in all of the required filds!</p>';
		}
		else{
			if(strlen($username) > 32 || strlen($username) < 3){
				echo '<p class="msg"> Your <b>Username</b> must be between 3 and 32 characters long!</p>';
			}

			else{

				$res = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '".$username."'");
				$num = mysqli_num_rows($res);
 
				if($num == 1){
					echo '<p class="msg"> The <b>Username</b> you have chosen is already taken!</p>';
				}
				else{

					if(strlen($password) < 5 || strlen($password) > 32){
						echo '<p class="msg"> Your <b>Password</b> must be between 5 and 32 characters long!</p>';

					}
					else{

						if($password != $passconf){
							echo '<p class="msg"> The <b>Password</b> you supplied did not math the confirmation password!</p>';
						}
						else{
							$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";

						if(!preg_match($checkemail, $email)){

							echo '<p class="msg"> The <b>E-mail</b> is not valid, must be name@server.tld!</p>';
						}else{

							$res1 = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '".$email."'");

							$num1 = mysqli_num_rows($res1);
		 

							if($num1 == 1){
								echo '<p class="msg">The <b>E-mail</b> address you supplied is already taken</p>';
							}else{
							$registerTime = date('U');
		 

							$code = md5($username).$registerTime;
		 

							$res2 = mysqli_query($con,"INSERT INTO `users` (`username`, `password`, `email`, `rtime`) VALUES('".$username."','".md5($password)."','".$email."','".$registerTime."')");

							echo '<p class="msg">You have successfully registered!</p>';

								}

							}

						}

					}

				}

			}

		}

	}

?>



 
</div>

</body>

</html>
