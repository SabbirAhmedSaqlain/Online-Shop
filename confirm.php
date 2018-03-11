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
				top: 200px;
				left: 400px;
	        	width: 350px;
	   			border: 5px solid rgb(17, 57, 122);
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
				background-color: #2f65bc;
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

        	.mg{
			position: absolute;
			text-align: center;
			color: rgb(17, 57, 122);
			top: 150px;
			left: 270px;
			width: 700px;
			height: 2px;
		 
			font-size: 20px;
 

		}



		</style>



</head>

<body>

	<a href="index.php"><h1  id="home">Home</h1></a>

 

		<div id="data">
			<p>Use code : 1234</p>
			<form action="confirm.php" method="post">
			<h3>Confirmation Code</h3>
			<input class="box" type="text" name="code" /><br><br>
			<input class="login" type="submit" name="submit" value="Confirm" /><br><br></form>
			
		</div>

		





<?php

 

		if(isset($_POST['submit'])){

			$code = protect($_POST['code']);
 
			if(!$code){
				echo '<p class="mg"> Please fill  the Code! </p>';
			}
			else{

				$res = mysqli_query($con,"SELECT * FROM `customers` WHERE `code` = '".$code."'");
				$num = mysqli_num_rows($res);


					if($num == 0){
						echo '<p class="mg"> Invalid Code! </p>';
					}
					else{

						echo '<p class="mg">Congratulation!! You have successfully bought those items !!</p>';
						$res1 = mysqli_query($con,"DELETE FROM `customers` WHERE `code`='".$code."'");




						if(isset($_SESSION["cart_item"])){
					 
					    	foreach ($_SESSION["cart_item"] as $item){
					  			 

							$result = mysqli_query($con,"SELECT * FROM `products`");
							$row = mysqli_fetch_assoc( $result );
								 
							$data=$row['quantity']-$item["quantity"];
							$res4 = mysqli_query($con,"UPDATE `products` SET `quantity`='".$data."' WHERE `code`='".$item["code"]."'");

							
							

						}
			 
					}
 
					session_destroy();
				}
			}

		}

?>


 
</body>

</html>

 









