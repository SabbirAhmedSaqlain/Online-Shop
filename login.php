<?php

	session_start();
	ob_start();
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

		<form action="login.php" method="post">

		<div id="data">

			<h3>Username </h3>
			<input class="box" type="text" name="username" />
			<h3>Password </h3>
			<input class="box" type="password" name="password" /> <br><br>
			<input class="login" type="submit" name="submit" value="Login" /><br><br>
			<a class="login" class="shadow" href="register.php">Register</a>  
			<a class="login" class="shadow" href="forgot.php">Forgot Password</a>
			
		</div>

		</form>





<?php

 
 

		if(isset($_POST['submit'])){

			$username = protect($_POST['username']);
			$password = protect($_POST['password']);
			if(!$username || !$password){
				echo '<p class="msg"> Please fill  <b>Username</b> and  <b>Password</b>! </p>';
			}
			else{

				$res = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '".$username."'");
				$num = mysqli_num_rows($res);

				if($num == 0){
					echo '<p class="msg"> The  Username does not exist! </p>';
				}

				else{

					$res = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '". md5($password)."'");
					$num = mysqli_num_rows($res);

 

					if($num == 0){
						echo '<p class="msg">  The <b>Password</b> you supplied does not match the one for that username! </p>';
					}
					else{

						$row = mysqli_fetch_assoc($res);
						 
						$_SESSION['uid'] = $row['id'];
						echo '<p class="msg"> You have successfully logged in!</p>';
						$time = date('U'); 
						mysqli_query($con,"UPDATE `users` SET `online` = '".$time."' WHERE `id` = '".$_SESSION['uid']."'");
						header('Location: usersOnline.php');
					}

				}

			}

		}

?>



</body>

</html>

<?php

ob_end_flush();

?>
