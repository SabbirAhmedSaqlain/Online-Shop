<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

?>
<HTML>
<HEAD>
	<TITLE>Online Shopping</TITLE>
	<link rel="icon" href="images/icon.ico" >
	<style type="text/css">
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

		#data{
			position: absolute;
			top: 150px;
			left: 130px;
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
			position: absolute;
			color: rgb(17, 57, 122);
			top: 2700px;
			left: 150px;
			width: 1000px;
			font-size: 20px;
			padding: 5px 5px;
			border: solid;
			background-image: url(images/body.jpg);

		}

</style>


</HEAD>
<body>

		<a href="login.php"><h1  id="login">shopkeepers Area </h1></a>
		<p id="title">Welcome To Online Shopping</p>
		<a href="index.php"><h1  id="home">Home</h1></a>



		<div id="data">


		<?php

		$a="abssc";
		$b="de";
		$a= "%".$a.$b. "%"  ;
 
		echo $a;




		?>



			

		
 
		</div>



		


 

</body>
</HTML>