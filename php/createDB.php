<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname="fruitbox";
$con=mysqli_connect($servername,$username,$password,$dbname);

/*
$sql="SELECT* FROM fructe";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
    
        while($row=$result->fetch_assoc()){
            echo $row['id'];
            echo $row['img'];
            echo $row['pret'];
        }
        mysqli_free_result($result);
    }
}
mysqli_close($link);
*/
?>