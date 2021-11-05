<style>
input{
	width:300px;
	text-align:center;
}
</style>
<?php
$jari=$_POST['jari'];
$v=3.14;
$k=2*$v*$jari*$jari;
$l=$v*$jari*$jari;
echo"<input type='text'  value='Luas persegi adalah : $l'><br>";
echo"<input type='text'  value='Keliling persegi adalah : $k'>";
?>