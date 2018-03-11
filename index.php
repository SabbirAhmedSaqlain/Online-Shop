<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


	if(!empty($_GET["action"])) {

	switch($_GET["action"]) {

		case "add":

			if(!empty($_POST["quantity"])) {


				$result = mysqli_query($con, "SELECT * FROM products WHERE code='" . $_GET["code"] . "'");

				while($row=mysqli_fetch_assoc($result)) {
					$productByCode[] = $row;
				}	
 

 
				$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));


				
				
				if(!empty($_SESSION["cart_item"])) {





					if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {


						foreach($_SESSION["cart_item"] as $k => $v) {


								if($productByCode[0]["code"] == $k) {


									if(empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;

									}

									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								}
							}

					} 
					else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} 

				else {
					$_SESSION["cart_item"] = $itemArray;
				}
			}

			break;

		case "remove":

			if(!empty($_SESSION["cart_item"])) {

				foreach($_SESSION["cart_item"] as $k => $v) {

						if($_GET["code"] == $k)
							unset($_SESSION["cart_item"][$k]);	

						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}
			break;


		case "empty":
			unset($_SESSION["cart_item"]);
			break;	
		}
	}
?>
<HTML>
<HEAD>
	<TITLE>Online Shopping</TITLE>
	<link rel="icon" href="images/icon.ico" >
	<style type="text/css">

		body{
					 
			background-image: url(images/body.jpg);
				 
			 
			width:610px;font-family:calibri;
		}

		#data{
			position: absolute;
			top: 100px;
			left: 30px;
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
			left: 900px;
		}
		.cart-item {border-bottom: #79b946 1px dotted;padding: 10px;}

		#product-grid0_head {
 
			 
 
			width: 800px;
 
		}

		#product-grid0 {

			height: 500px;
			margin-bottom:140px;
			overflow-y: auto;
		}



		#product-grid1_head {
 
			 
 
			width: 800px;
 
		}

		#product-grid1 {
 
			 
 
			width: 800px;
			height: 500px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid2_head {
 
 
			width: 800px;
 
		}

		#product-grid2 {
 
 
			width: 800px;
			height: 500px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid3_head {
 
 
			width: 800px;
 
		}

		#product-grid3 {
 
			 
 
			width: 800px;
			height: 500px;
			margin-bottom:140px;
			overflow-y: auto;
		}


		#product-grid4_head {
 
 
			width: 800px;
 
		}

		#product-grid4 {
  
			width: 800px;
			height: 500px;
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
					.box{
				height: 30px;
				width: 200px;
			}


		#contact{
			 
			color: rgb(17, 57, 122);
			 
			 
			width: 1000px;
			font-size: 20px;
			padding: 5px 5px;
			border: solid;
			background-image: url(images/body.jpg);

		}
		#search{
			
			top: 100px;
			left: 200px;
			width: 800px;
		}
		.description{
			height: 100px;
			width: 200px;
		}

</style>


</HEAD>
<body>

		<a href="login.php"><h1  id="login">shopkeepers Area </h1></a>
		<p id="title">Welcome To Online Shopping</p>








		<div id="data">



		
		<div id="search" >
			<?php
					 
		 			//$a= $_POST["search"];
					if(isset($_POST["search"])){
						$aa= strlen(  $_POST["search"]);

						if($aa>='2'){


						echo "</h3>Search : </h3>".$_POST["search"];

						//echo ' ';
						//start if section

 						?>
 						<p class="txt-heading" id="product-grid0_head">Searched Items</p>
 						<div id="product-grid0">


						<?php

						$a="%".$_POST["search"]."%";


						//$a= $_POST["search"];

						$result =mysqli_query($con, " SELECT * FROM `products` WHERE `name` LIKE '$a' " );

						//$query = mysql_query("SELECT * FROM table WHERE the_number LIKE '123%'");

						while($row=mysqli_fetch_assoc($result)) { 
 
 

						?>
							<div class="product-item">
								<form method="post" action="index.php?action=add&code=<?php echo $row["code"]; ?>">
								<div class="product-image">
								<img src="<?php echo $row["image"]; ?>" height="100px" width="100px" ></div>

								<div><strong><?php echo $row["name"]; ?></strong></div>

								<div class="product-price">
									<?php echo "$".$row["price"];  ?></div>
								<div>
									<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" />
								</div>
								</form>
							</div>
						<?php
							//	}
						}
						?>


						</div>





 						<?php
						 


 						//end if section
 						}

					}

 



					else
					{
						echo " ";
					}

			 
			 
		 
			?>
	

		</div>	

		
 

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
					<form method="post" action="index.php?action=add&code=<?php echo $row["code"]; ?>">
					<div class="product-image">
					<img src="<?php echo $row["image"]; ?>" height="100px" width="100px" ></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>

					<div class="description" ><?php echo $row["description"]; ?></div>

					<div class="product-price">
						<?php echo "$".$row["price"]; ?></div>
					<div>
						<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" />
					</div>
					</form>
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
					<form method="post" action="index.php?action=add&code=<?php echo $row["code"]; ?>">
					<div class="product-image">
					<img src="<?php echo $row["image"]; ?>" height="100px" width="100px" ></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>

					<div class="description" ><?php echo $row["description"]; ?></div>

					<div class="product-price">
						<?php echo "$".$row["price"]; ?></div>
					<div>
						<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" />
					</div>
					</form>
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
					<form method="post" action="index.php?action=add&code=<?php echo $row["code"]; ?>">
					<div class="product-image">
					<img src="<?php echo $row["image"]; ?>" height="100px" width="100px" ></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>

					<div class="description" ><?php echo $row["description"]; ?></div>

					<div class="product-price">
						<?php echo "$".$row["price"]; ?></div>
					<div>
						<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" />
					</div>
					</form>
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
					<form method="post" action="index.php?action=add&code=<?php echo $row["code"]; ?>">
					<div class="product-image">
					<img src="<?php echo $row["image"]; ?>" height="100px" width="100px" ></div>
					<div><strong><?php echo $row["name"]; ?></strong></div>

					<div class="description" ><?php echo $row["description"]; ?></div>

					<div class="product-price">
						<?php echo "$".$row["price"]; ?></div>
					<div>
						<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" />
					</div>
					</form>
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








		
		<div id="shopping-cart">

					<div>


 


						<form action="index.php" method="post">
						<h3>Search Items : </h3>

						<input type="text" class="box"   name="search"><br><br>

						<input type="submit" onclick="myFunction()"  class="btnAddAction"><br><br>
						</form>


					</div>



















		<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="pay.php?action=empty">BUY</a></div>
		<?php
		if(isset($_SESSION["cart_item"])){
		    $item_total = 0;
		?>	
		<table cellpadding="10" cellspacing="1">
		<tbody>
		<tr>
		<th style="text-align:left;"><strong>Name</strong></th>
		<th style="text-align:left;"><strong>Code</strong></th>
		<th style="text-align:right;"><strong>Quantity</strong></th>
		<th style="text-align:right;"><strong>Price</strong></th>
		<th style="text-align:center;"><strong>Action</strong></th>
		</tr>	
		<?php		
		    foreach ($_SESSION["cart_item"] as $item){
				?>
						<tr>
						<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
						<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
						<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
						<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
						<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
						</tr>
						<?php
		        $item_total += ($item["price"]*$item["quantity"]);
		          $_SESSION['pay'] = $item_total;
				}
				?>

		<tr>
		<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
		</tr>
		</tbody>
		</table>		
		  <?php
		}
		?>
		</div>






		


 

</body>
</HTML>