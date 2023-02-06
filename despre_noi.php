<?php
session_start();
require_once('./php/afis_produs.php');
require_once( './php/createDb.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Despre noi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>

<body>
	<div class="imgelogo">
		<div class="block_img1" id="#top">
			<img src="img/logo.png"   height="200px">
		</div>
</div>

<ul>
<li><a href="home.html" >Acasa</a></li>
<li ><a href="fructe.php" >Fructe</a></li>
<li ><a href="fructe_uscate.php" >Nuci&Fructe uscate</a></li>
<li><a href="ceriale.php">Ceriale</a></li>
<li><a href="galerie.html">Galerie</a></li>
<li ><a href="adaugarea.php" >Adaugarea </a></li>
	<li ><a href="sterge.php" >Sterge </a></li>
<li class="account"><a href="formular.php">Logare</a></li>
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
<li class="about" ><a href="despre_noi.php"class="active">Despre noi</a></li>
</ul>

<div class="block_img1">
<h2>Despre Noi:</h2>
<hr class="line">

	<h3>Fructe  proaspete în fiecare zi!</h3>
	<p>Este o afacere de familie cu o bogată experiență în plantarea de fructe și legume proaspete!<br>Am dori să prezentăm o metodă nouă și avansată din punct de vedere tehnologic de a cumpăra produse alimentare pe internet, pentru cei care nu au timp pentru piețe sau magazine.</p>
	<hr class="line">
	<h3>De ce noi?</h3>
	<p>Cultivăm și prezentăm fructe excelente și mereu proaspete la alegere. Este important ce mâncăm și unde a fost cultivat. Credem într-un stil de viață sănătos creat de sport și nutriție adecvată. De asemenea, credem că putem deveni compania pe care o veți aminti oricând vă gândiți să cumpărați fructe și legume și indiferent unde comandați, la birou, acasă sau la evenimentele dvs.</p>
	<hr class="line">
	<h3>Avantajele alegerii FruitBox</h3>
	<p>pierdeți mai puțin timp
	<br>planificați și luați în considerare costurile
	<br>nu vă întârziați în ambuteiaje sau cozi
	<br>puteți alege un timp de livrare convenabil pentru dvs.</p>
	<p>Vă asigurăm că puteți avea încredere în noi și împreună vom avea o colaborare eficientă.</p>
	<hr class="line">
	<h3>Contacts:</h3>
	<span class="contacts">
		<table>
			<tr>
				<td><b>Adresa:</b></td> <td>Causeni, Baurci, Voluntarilor 7</td>
			</tr>
			<tr>
				<td><b>Numar de telefon:</b></td> <td>+37368582859</td>
			</tr>
			<tr>
				<td><b>Fix:</b></td> <td>0243 63 243</td>
			</tr>
			<tr>
				<td><b>E-mail:</b></td> <td>carapirea@gmail.com</td>
			</tr>
			
		</table>
	</span>
	<hr class="line">
	<h3>Location:</h3>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9079.50900347971!2d28.86551126571664!3d47.01622137759527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c147c614e6f%3A0xfaceb80bbd858ea7!2zUGlhyJthIEFncmljb2zEgyBBbmdybyBDaGnImWluxIN1!5e0!3m2!1sen!2s!4v1620947631299!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<hr class="line">
</div>

<div class="top">
	<a href="#top"><img src="img/top.png"></a>
</div>


<div class="footer">
	<span>
		©Carapirea
	</span>
</div>
</body>
</html>