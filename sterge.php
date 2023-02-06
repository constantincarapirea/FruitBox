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
	<li><a href="home.html" >Acasa</a></li>
	<li ><a href="fructe.php">Fructe</a></li>
	<li ><a href="fructe_uscate.php">Nuci&Fructe uscate</a></li>
	<li><a href="ceriale.php">Ceriale</a></li>
	<li><a href="galerie.html">Galerie</a></li>
	<li ><a href="adaugarea.php" >Adaugarea </a></li>
	<li ><a href="sterge.php" class="active">Sterge</a></li>
	<li ><a href="adaugarea.php" >Modificare </a></li>
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
	</a></li>
	<li class="about"><a href="despre_noi.html">Despre noi</a></li>
</ul>


<div class="adaugaref">
	
	<form method="post">
	<div class="input_form" >		
			<input  type="text" name="numef"placeholder="Introduceti denumirea produs" >
			
		</div>
		
		<div class="input_form" >
			<button type=" submit" class="submit_form" name= "ok"> Sterge</button>
		</div>
		

	</form>
	</div>	
   <?php
 $numef="";
	 
	 if(isset($_POST['ok'])){
		 $numef=$_POST['numef'];
		 $sql="DELETE FROM fructe where name = '$numef'";
		 if (mysqli_query($con, $sql)) {
  		  echo "Sters cu succes";
		} else {
  			  echo "Aparut o eroare  " . mysqli_error($con);
}
mysqli_close($con);
	}
		
							
	 
   ?>



</body>
</html>