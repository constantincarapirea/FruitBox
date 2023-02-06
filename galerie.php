<!DOCTYPE html>
<html>
<head>
	<title>Galerie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="imgelogo">
<div class="block_img1"id="#top"  >
	<img src="img/logo.png"    >
</div>
</div>
<ul>
	<li><a href="home.php">Acasa</a></li>
	<li class="submenu"><a href="fructe.php">Fructe</a></li>
	<li><a href="fructe_uscate.php">Nuci&Fructe uscate</a></li>
	<li><a href="ceriale.php">Ceriale</a></li>
	<li><a href="galerie.php" class="active">Galerie</a></li>
    <li class="account"><a href="formular.html">Logare</a></li>
    <li ><a href="adaugarea.php" >Adaugarea</a></li>
	<li ><a href="sterge.php" >Sterge </a></li>
	<li class ="cartli" ><a href="cos.php"><img class="cartimg" src="img/cart.png" >
        <?php
        session_start();

		if(isset($_SESSION['cart'])){
			$count=count($_SESSION['cart']);
			echo "<span class\"cart_nb\">$count</span>";
		}
		else{
			echo "<span class\"cart_nb\">0</span>";
		}
		?>
		</a></li>
		<li class="about"><a href="despre_noi.html">Despre noi</a></li>
	</ul>



<div class="block_img2">
	<div class="colection">
		<img src="img/colect_1.jpg">
	</div>
	<hr class="line">
	<div class="colection">
		<img src="img/colect_2.jpg">
	</div>
	<hr class="line">
	<div class="colection">
		<img src="img/colect_3.jpg">
	</div>
	<hr class="line">
	<div class="colection">
		<img src="img/colect_4.jpg">
	</div>
	<hr class="line">
	<div class="colection">
		<img src="img/colect_5.jpg">
	</div>
	<hr class="line">

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