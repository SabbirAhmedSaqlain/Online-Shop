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

		#data{
			position: absolute;
			left: 50px;
			top: 135px;
		}
 
			#user{
				position: absolute;
				top: 20px;
				left: 1100px;
	        	width: 150px;
	   			border: 5px solid #214989;;
	   		    padding: 20px;
	    		margin: 20px;
	    		text-align: center;

			}
 
			.msg {
        		position: absolute;
        		top: 100px;
        		left: 1150px;
        		color: blue;
        		font-size: 19px;
        	}
			.box{
				height: 30px;
				width: 200px;
			}
	 
			.login{
				background-color: #4CAF50;
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

 

		body{
					 
			background-image: url(images/body.jpg);
				 
			 
			width:610px;font-family:calibri;
		}
		#shopping-cart table{width:100%;background-color:#F0F0F0;}
		#shopping-cart table td{background-color:#FFFFFF;}

		.txt-heading{    
			padding: 10px 10px;
		    border-radius: 2px;
		    color: #FFF;
		    background: #6aadf1;
			margin-bottom:10px;
		}

		a.btnRemoveAction{color:#D60202;border:0;padding:2px 10px;font-size:0.9em;}
		a.btnRemoveAction:visited{color:#D60202;border:0;padding:2px 10px;font-size:0.9em;}

		#btnEmpty {

			background-color: #ffffff;
		    border: #FFF 1px solid;
		    padding: 1px 10px;
		    color: #ff0000;
		    font-size: 0.8em;
		    float: right;
		    text-decoration: none;
		    border-radius: 4px;

		}

		.btnAddAction{

 
		    border: 0;
		    padding: 3px 10px;
		    color: #FFF;
		    background: #6aadf1;
		    margin-left: 2px;
		    border-radius: 2px;
		}

		#shopping-cart {
			margin-bottom:30px;
			position: absolute;
			width: 450px;
			top: 150px;
			left: 830px;
		}
		.cart-item {border-bottom: #79b946 1px dotted;padding: 10px;}
		#product-grid1_head {
 
			 

			width: 1000px;
 
		}

		#product-grid1 {
 
			 
 
			width: 1000px;
			height:900px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid2_head {
 
 
			width: 1000px;
 
		}

		#product-grid2 {
 
			 
 
			width: 1000px;
			height: 900px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid3_head {
 
 
			width: 1000px;
 
		}

		#product-grid3 {
 
 
			width: 1000px;
			height: 900px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid4_head {
 
			width: 1000px;
 
		}

		#product-grid4 {
 
 
			width: 1000px;
			height: 900px;
			margin-bottom:140px;
			overflow-y: auto;
		}






		.product-item {	float:left;	background: #ffffff;margin:15px 10px;	padding:5px;border:#CCC 1px solid;border-radius:4px;}
		.product-item div{text-align:center;	margin:10px;}
		.product-price {    
			color: #005dbb;
		    font-weight: 600;
		}


		.product-image {height:100px;background-color:#FFF;}
		.clear-float{clear:both;}
		.demo-input-box{border-radius:2px;border:#CCC 1px solid;padding:2px 1px;}

		#login{
			position: absolute;
			color: rgb(17, 57, 122);
			top: 40px;
			left: 1100px;
			width: 200px;
			font-size: 25px;
			padding: 5px 5px;
			border: solid;

		}

		#title{
			position: absolute;
			font-family:sans-serif; 
			text-align: center;
			color: rgb(17, 57, 122);
			 top: -10px;
			left: 300px;
			width: 600px;
			font-size: 40px;
			padding: 5px 5px;
			border: groove;

		}


		#contact{
		 
			color: rgb(17, 57, 122);
			 
			left: 150px;
			width: 1000px;
			font-size: 20px;
			padding: 5px 5px;
			border: solid;
			background-image: url(images/body.jpg);

		}



		</style>
 
</head>
 
<body>
	<p id="title">Welcome To Online Shopping</p>
 <a href="index.php"><h1  id="home">Home</h1></a>
<?php
 
		//if the login session does not exist therefore meaning the user is not logged in
		 
		if(strcmp($_SESSION['uid'],"") == 0){
		 
		//display and error message
		 
		echo '<p class="msg">You need to be logged in to user this feature!</p>';
		 
		}else{
		 
		//otherwise continue the page
		 
		//this is out update script which should be used in each page to update the users online time
			 
			$time = date('U')+50;
			 
			$update = mysqli_query($con,"UPDATE `users` SET `online` = '".$time."' WHERE `id` = '".$_SESSION['uid']."'");
 
?>


		<div id="user">
			<h3>User Name</h3>
			<br><br> 
			<a href="logout.php">Logout</a><br><br>
			<a href="login.php">Back To Log In</a>			

		</div>
 



 
<?php
 
		 
		 
		$res = mysqli_query($con,"SELECT * FROM `users` WHERE `online` > '".date('U')."'");
		 
		 
		 
		while($row = mysqli_fetch_assoc($res)){
		 
		 
		 
			echo '<p class="msg" >'. $row['username'].'</p>';
		 
		}
 
		 
		}



?>

<script>
function myFunction() {
   


<?php  

			 

							$result = mysqli_query($con,"SELECT * FROM `products`  WHERE `code`='".$_POST["code"]."' ");
							$row = mysqli_fetch_assoc( $result );

							 
								 
							$data=$row['quantity']+$_POST["quantity"];

							$res4 = mysqli_query($con,"UPDATE `products` SET `quantity`='".$data."' WHERE `code`='".$_POST["code"]."'");


							$data1= $_POST["price"];

							$res4 = mysqli_query($con,"UPDATE `products` SET `price`='".$data1."' WHERE `code`='".$_POST["code"]."'");
 
							header('Location: usersOnline.php');




 


 
?>
}

}
</script>



		<div id="data">


			
		


		<p class="txt-heading" id="product-grid1_head">Laptop</p>
		<div id="product-grid1">

			 
			 

			<?php
			$result =mysqli_query($con, "SELECT * FROM products ORDER BY id ASC");
			while($row=mysqli_fetch_assoc($result)) { 

				if ($row["type"]!='laptop') {
					continue;
				}


			?>
				<div class="product-item">
					 
					<div class="product-image"><img src="<?php echo $row["image"]; ?>" height="100px" width="100px"></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>
					<div class="product-price"><?php echo "$".$row["price"]; ?></div>
					<div class="product-price"><?php echo "Quantity :  ".$row["quantity"]; ?></div>



					<div>


						<form action="usersOnline.php" method="post">
						<p>Product Code</p>
						<input type="text" name="code" value="<?php echo $row["code"]; ?>" size="8" />  
						<br><br> New Price :

						<input type="text" name="price" value="<?php echo $row["price"]; ?>"  size="6" /> <br><br>

						 Quantity:
						<input type="text" name="quantity"  value="0"   size="6" /><br><br>
						<input type="submit" value="Update" onclick="myFunction()" class="btnAddAction" /></form>


					</div>
					 
				</div>
 

			<?php
				//	}
			}
			?>

		</div>
 




		<p class="txt-heading" id="product-grid2_head">DSLR</p>
		<div id="product-grid2">

			
			<?php
			$result =mysqli_query($con, "SELECT * FROM products ORDER BY id ASC");
			while($row=mysqli_fetch_assoc($result)) {

				if ($row["type"]!='dslr') {
					continue;
				}



			?>
				<div class="product-item">
					 
					<div class="product-image"><img src="<?php echo $row["image"]; ?>" height="100px" width="100px"></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>
					<div class="product-price"><?php echo "$".$row["price"]; ?></div>
					<div class="product-price"><?php echo "Quantity :  ".$row["quantity"]; ?></div>



					<div>


						<form action="usersOnline.php" method="post">
						<p>Product Code</p>
						<input type="text" name="code" value="<?php echo $row["code"]; ?>" size="8" />  
						<br><br> New Price :

						<input type="text" name="price" value="<?php echo $row["price"]; ?>"  size="6" /> <br><br>

						 Quantity:
						<input type="text" name="quantity"  value="0"   size="6" /><br><br>
						<input type="submit" value="Update" onclick="myFunction()" class="btnAddAction" /></form>


					</div>
					 
				</div>
 

			<?php
				//	}
			}
			?>

		</div>





		<p class="txt-heading" id="product-grid3_head">Monitor</p>
		<div id="product-grid3">

			<?php
			$result =mysqli_query($con, "SELECT * FROM products ORDER BY id ASC");
			while($row=mysqli_fetch_assoc($result)) { 

				if ($row["type"]!='monitor') {
					continue;
				}


			?>
				<div class="product-item">
					 
					<div class="product-image"><img src="<?php echo $row["image"]; ?>" height="100px" width="100px"></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>
					<div class="product-price"><?php echo "$".$row["price"]; ?></div>
					<div class="product-price"><?php echo "Quantity :  ".$row["quantity"]; ?></div>



					<div>


						<form action="usersOnline.php" method="post">
						<p>Product Code</p>
						<input type="text" name="code" value="<?php echo $row["code"]; ?>" size="8" />  
						<br><br> New Price :

						<input type="text" name="price" value="<?php echo $row["price"]; ?>"  size="6" /> <br><br>

						 Quantity:
						<input type="text" name="quantity"  value="0"   size="6" /><br><br>
						<input type="submit" value="Update" onclick="myFunction()" class="btnAddAction" /></form>


					</div>
					 
				</div>
 

			<?php
				//	}
			}
			?>

		</div>





		<p class="txt-heading" id="product-grid4_head">Printer</p>
		<div id="product-grid4">

			
			<?php
			$result =mysqli_query($con, "SELECT * FROM products ORDER BY id ASC");
			while($row=mysqli_fetch_assoc($result)) { 

				if ($row["type"]!='printer') {
					continue;
				}


			?>
				<div class="product-item">
					 
					<div class="product-image"><img src="<?php echo $row["image"]; ?>" height="100px" width="100px"></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>
					<div class="product-price"><?php echo "$".$row["price"]; ?></div>
					<div class="product-price"><?php echo "Quantity :  ".$row["quantity"]; ?></div>



					<div>


						<form action="usersOnline.php" method="post">
						<p>Product Code</p>
						<input type="text" name="code" value="<?php echo $row["code"]; ?>" size="8" />  
						<br><br> New Price :

						<input type="text" name="price" value="<?php echo $row["price"]; ?>"  size="6" /> <br><br>

						 Quantity:
						<input type="text" name="quantity"  value="0"   size="6" /><br><br>
						<input type="submit" value="Update" onclick="myFunction()" class="btnAddAction" /></form>


					</div>
					 
				</div>
 

			<?php
				//	}
			}
			?>

		</div>



		<div id="contact">
			
			<p> Contact Us </p>
			<p>sabbir.cse.ruet@gmail.com</p>
		</div>














</div>



 
</body>
 
</html>
