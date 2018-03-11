<?php
	session_start();
	ob_start();
	include ('dbcontroller.php');

	include "functions.php";

?>

<html>

<head>

		<title>Login with Users Online Tutorial</title>
		<link rel="icon" href="images/icon.ico" >
		<style type="text/css">
			body{
				background-image: url(images/body.jpg);
				 
			}

			#data{
				position: absolute;
				top: 50px;
				left: 320px;
	        	width: 600px;
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

		#pay {
			color: #2f65bc;
		}




		</style>



</head>

<body>

<html>
<body>

		<a href="index.php"><h1  id="home">Home</h1></a>

		<div id="data">
	 
		<?php
			 
		 
			if(!isset($_SESSION['pay']))
			{
				echo "please select iteams";
			}
			else {
				$paid= $_SESSION['pay'];
				echo '<h2 id= "pay" >You have to pay '. $paid.'</h2>';
				?>
 


			<form action="pay.php" method="post">

		 

			<h3>Customer Name </h3>
			<input class="box" type="text" name="name" />

			<h3>Phone Number </h3>
			<input class="box" type="text" name="phone" /> 

			<h3>Account Type</h3>
			<input class="box" type="text" name="type" />

			<h3>Account Number</h3>
			<input class="box" type="text" name="account" />	<br><br><br>
					

			<input class="login" type="submit" name="submit" value="Confirm" /><br><br></form>




			<?php

			//	session_unset();


			if(isset($_POST['submit'])){

				$name = protect($_POST['name']);
				$phone = protect($_POST['phone']);
				$account = protect($_POST['account']);
				$type = protect($_POST['type']);




				if(!$name || !$phone || !$account || !$type){
					echo '<p class="msg"> Please fill  all blanks ! </p>';
				}
				else{

					//$time = date('U'); 
					//mail($email, 'Forgotten Password', "Here is your code: ".$time."\n\nPlease keep it secure!", 'From: sabbir.cse.ruet@gmail.com');

					$time="1234";
					 
					$res2 = mysqli_query($con,"INSERT INTO `customers` (`name`, `phone`, `account`, `type`, `code`) 
					VALUES('".$name."','". $phone."','".$account."','".$type."','".$time."')");

					header('Location: confirm.php');
					 
			}
		}

	}

 
			
	?>
 

			
		</div>

 



</body>
</html>



</body>

</html>

 