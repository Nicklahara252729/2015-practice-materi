<style>
#persegi{
	width:400px;
	height:400px;
	border:solid 1px #b00;
}
select{
	margin-left:72px;
	padding-left:20px;
}
#satu{
	margin-left:50px;
	padding-left:20px;
}
button{
	margin-left:165px;
padding-left:20px;
padding-right:20px;		
}
</style>
<form target=_self method=POST>
Nilai Panjang  
<select name='panjang' id=satu>
<?php
for($m=1;$m<=10;$m++)
{
echo"<option value='$m'>$m</option>";
}
?>
</select><br>
Nilai lebar  
<select name='lebar'>
<?php
for($m=1;$m<=10;$m++)
{
echo"<option value='$m'>$m</option>";
}
?>
</select><br>
<button type="submit">kirim</button>
</form>

<?php
$panjang=$_POST['panjang'];
$lebar=$_POST['lebar'];
$luas=$panjang*$lebar;
$keliling=2*$panjang+2*$lebar;
echo"luas persegi panjang  :$panjang * $lebar =$luas<br>";
echo"keliling persegi panjang : 2 * $panjang + 2 * $lebar =$keliling";
?>

