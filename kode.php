&nbsp;&nbsp;&nbsp;&nbsp;Masukkan Kode Kunci<br><br>
<form target=_self method=POST>
&nbsp;&nbsp;&nbsp;&nbsp;
<select name='kode_1'>
<?php
for($k=1;$k<=9;$k++)
{
echo"<option value='$k'>$k</option>";
}
?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='kode_2'>
<?php
$l=1;
while($l<=9)
{
echo"<option value='$l'>$l</option>";
$l++;
}
?>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='kode_3'>
<?php
for($m=1;$m<=9;$m++)
{
echo"<option value='$m'>$m</option>";
}
?>
</select><br>&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit">Enter</button></form>
<?php
$k=$_POST['kode_1'];
$l=$_POST['kode_2'];
$m=$_POST['kode_3'];

	echo"$k";

$o="admin";
switch($o){
case"admin":
echo"hai admin";
break;
default;
echo"bukan admin";}
?>