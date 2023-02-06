
<?php
session_start();
require_once('./php/afis_produs.php');
require_once( './php/createDb.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fruit Box</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="imgelogo">
<div class="block_img1"id="#top"  >
	<img src="img/logo.png"    >
</div>
</div>

<div id="navbar">
<ul>
	<li><a href="home.php" class="active">Acasa</a></li>
	<li ><a href="fructe.php">Fructe</a></li>
	<li><a href="fructe_uscate.php">Nuci&Fructe uscate</a></li>
	<li><a href="ceriale.php">Ceriale</a></li>
	<li><a href="galerie.php">Galerie</a></li>
	<li class="account"><a href="formular.html">Logare</a></li>
	<li ><a href="adaugarea.php" >Adaugarea</a></li>
	<li ><a href="sterge.php" >Sterge </a></li>
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
	<li class="about"><a href="despre_noi.html">Despre noi</a></li>
</ul>

</div>

<div class="banner">
	<div class="homepa">
		<h6 class= "h2home">Fructe cu ce mai inalta clitate,<br>Direct de la producatori</h6>
	<p class ="phome"></p>
	<a href="fructe.php" class="butonhome">Adauga in cos</a>
	</div>
</div>
<div class="top">
	<a href="#top"><img src="img/top.png"></a>
</div>



<div class="footer">
	<span>
		©Carapirea 2021
	</span>
</div>
</body>
</html>