<?php

session_start();
require_once('./php/afis_produs.php');
require_once( './php/createDb.php');


if(isset($_POST['btn'])){
//print_r($_POST['id_product']);
if(isset($_SESSION['cart'])){
$item_array_id=array_column($_SESSION['cart'],"id_product");


if(in_array($_POST['id_product'],$item_array_id)){
	echo"<script>alert('Produsul este deja adaugat in cos'</script>";
	echo"<script>window.location='fructe.php'<script>";


}else{
$count=count($_SESSION['cart']);
$item_array=array('id_product'=>$_POST['id_product']);
$_SESSION['cart'][$count]=$item_array;

}
}else{
	$item_array=array('id_product'=>$_POST['id_product']);

	//Crearea nou Session variabila
	$_SESSION['cart'][0]=$item_array;
	
}
}
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
	<li ><a href="fructe.php" >Fructe</a></li>
	<li ><a href="fructe_uscate.php" >Nuci&Fructe uscate</a></li>
	<li><a href="ceriale.php"class="active">Ceriale</a></li>
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
	</a></li>
	<li class="about"><a href="despre_noi.html">Despre noi</a></li>
</ul>
<div class="princip_block_produs">
	
   <?php
	$sql="SELECT * FROM ceriale";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	while($row=mysqli_fetch_assoc($result)){
   afis_produs($row['name'],$row['pret'],$row['img'],$row['id']);
	}
   ?>

</div>	

<div class="footer">
	<span>
		©Carapirea 2020
	</span>
</div>
</body>
</html>