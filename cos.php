<?php
session_start();
require_once('./php/afis_produs.php');
require_once( './php/createDb.php');
if(isset($_POST['sterge'])){
    if($_GET['action']=='remove'){
    foreach($_SESSION['cart']as $key=>$value){
        if($value["id_product"]==$_GET['id']){
            unset($_SESSION['cart'][$key]);
        }
    }
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>COS</title>
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
	<li><a href="ceriale.php">Ceriale</a></li>
	<li><a href="galerie.php">Galerie</a></li>
    <li class="account"><a href="formular.html">Logare</a></li>
    <li ><a href="adaugarea.php" >Adaugarea</a></li>
	<li ><a href="sterge.php" >Sterge </a></li>
    <li class ="cartli" ><a href="cos.php"><img class="active-cos"class="cartimg" src="img/cart.png" >
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
<div class="cos-pagina">
<table class="cos-tabel">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
</table>
<?php
$total=0;
if(isset($_SESSION['cart'])){
$id_product=array_column($_SESSION['cart'],'id_product');
$sql="SELECT * FROM fructe";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    foreach($id_product as $id){
        if($row['id']==$id){
            CosElemente($row['img'],$row['name'],$row['pret'],$row['id']);
        $total=$total+$row['pret'];
        }

    }

}
}else{
    echo"<h5>Cosul este gol</h5>";
}
?>
  <div class="cos-total">
            <table>
                <tr>
                    <td><h3 class="price">Suma totala</h3></td>
                    <td> <h3 class="price"><?php echo $total ?> MDL</h3></td>
                </tr>
            </table>
        
        </div>
</div>
<div class="top">
	<a href="#top"><img src="img/top.png"></a>
</div>

<div class="footer">
	<span>
		©Carapirea 2020
	</span>
</div>
</body>
</html>