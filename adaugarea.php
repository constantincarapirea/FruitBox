<?php
session_start();
require_once('./php/afis_produs.php');
require_once( './php/createDb.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fructe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="imgelogo">
		<div class="block_img1" id="#top">
			<img src="img/logo.png"   height="200px">
		</div>
</div>
<ul>
	<li><a href="home.php" >Acasa</a></li>
	<li ><a href="fructe.php">Fructe</a></li>
	<li ><a href="fructe_uscate.php">Nuci&Fructe uscate</a></li>
	<li><a href="ceriale.php">Ceriale</a></li>
	<li><a href="galerie.php">Galerie</a></li>
	<li ><a href="adaugarea.php" class="active">Adaugarea </a></li>
	<li ><a href="sterge.php" >Sterge </a></li>
	<li ><a href="sterge.php" >Modificare </a></li>
	<li class="account"><a href="formular.html">Logare</a></li>
	<li class ="cartli" ><a href="cos.php"><img class="cartimg" src="img/cart.png" >
    <?php
	if(isset($_SESSION['cart'])){
		$count=count($_SESSION['cart']);
		echo "<span class=\"cart_nb\">$count</span>";
	}
	else{
		echo "<span class=\"cart_nb\">0</span>";
	}
	?>
	<li class="about"><a href="despre_noi.php">Despre noi</a></li>
</ul>


	</a></li>
	<li class="about"><a href="despre_noi.html">Despre noi</a></li>
</ul>


<div class="adaugaref">
	
	<form  method ="post">
			<div class="input_form">		
				<input type="text"id="nume" name="numef" placeholder="Introducteni numele produsului" >
			</div>

			<div class="input_form">		
				<input type="text2" name="pretf" placeholder="Introduceti pretul" >
			</div>
			<div class="input_form">		
				<input type="file"  name="addimgf" >
				
			</div>
			<br>
			<div class="input_form">		
			<input type="text2" name="cantitateaf" placeholder="Introduceti cantitatea" >
			<button type="submit" class="submit_form" name="save">Salvare</button>
		</div>
		

	</form>
	</div>	
   <?php
	 $numef="";
	 $addimgf="";
	 $pretf="";
	 $cantitateaf="";
	 if(isset($_POST['save'])){
		 $numef=$_POST['numef'];
		 $pretf=$_POST['pretf'];
		 $addimgf=$_POST['addimgf'];
		 $cantitateaf=$_POST['cantitateaf'];
		 $sql="INSERT INTO fructe(name,img,pret,cantitatea)
		 VALUES('$numef','$addimgf','$pretf','$cantitateaf')";
		$result=mysqli_query($con,$sql);
	 }
   ?>

<div class="footer">
	<span>
		©Carapirea 2021
	</span>
</div>


</body>
</html>