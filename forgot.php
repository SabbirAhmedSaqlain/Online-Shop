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
				top: 200px;
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

			.login{
 
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
			    width: 160px;
			}

			.login:hover{
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
        		top: 150px;
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
 
<?php
 
 
 
		if(isset($_POST['submit'])){
		$email = protect($_POST['email']);

		if(!$email){
			echo "<center>You need to fill in your <b>E-mail</b> address!</center>";
		}
		else{
			$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
			if(!preg_match($checkemail, $email)){

				echo "<center><b>E-mail</b> is not valid, must be name@server.tld!</center>";

			}else{
 
				$res = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '".$email."'");
				$num = mysqli_num_rows($res);
 
					if($num == 0){
 
						echo "<center>The <b>E-mail</b> you supplied does not exist in our database!</center>";
 
					}else{

						$row = mysqli_fetch_assoc($res);

						mail($email, 'Forgotten Password', "Here is your password: ".$row['password']."\n\nPlease try not too lose it again!", 'From: sabbir.cse.ruet@gmail.com');

						echo "<center>An email has been sent to your email address containing your password!</center>";
 
					}
 
			}
 
		}
 
	}
 
?>


		<form action="forgot.php" method="post">
		<div id="data">
		<p>Enter email address to restore password</p>

 
			<h3>Email </h3>
			<input class="box" type="text" name="email"  /><br><br>

			<input id="submit"  type="submit" name="submit" value="Send" />
			 <br><br>
			<a class="shadow" href="login.php">Login</a>|
			<a class="shadow" href="register.php">Register</a>
			
		</div>

		</form>
 
 
</body>
 
</html>
