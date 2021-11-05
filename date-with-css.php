<style>
form{
	margin:100px 0px 0px 800px;
}
#t{
	box-shadow:0px 0px 10px 0px #b00;
margin-right:30px;
border:0px;
}
#b{
border:0px;
box-shadow:0px 0px 10px 0px #b00;
margin-right:30px;
}
#thn{
	box-shadow:0px 0px 10px 0px #b00;
border:0px;
margin-right:30px;
}
</style>
<form action="#" method=POST>
<select name="tgl" id="t">
<?php
for($t=1;$t<=31;$t++)
{
echo"<option value='$t'>$t</option>";
}?>
</select>
<select name="tgl" id="b">
<?php
$bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
for($b=0;$b<=11;$b++)
{
echo "<option value=>$bulan[$b]</option>";
}?>
</select>
<select name="thn" id="thn">
<?php
for($t=1990;$t<=2015;$t++)
{
echo"<option value='$t'>$t</option>";
}?>
</select>
</form>