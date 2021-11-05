<h1>BUKA 24 Jam.com</h1>
<form target="_self" method="post">
    <input type="text" name="barang" placeholder="Nama Barang"><br>
    <input type="text" name="harga" placeholder="harga Barang"><br>
    <input type="text" name="jumlah" placeholder="Jumlah Barang"><br>
    <b><i>Status Pelanggan</i></b><br>
    <input type="radio"  name="pelanggan" value="pelanggan">pelanggan
    <input type="radio"  name="bkn" value="bkn">bukan pelanggan<br>
    <b><i>Pilih Kota Tujuan</i></b><br>
    <select name="kota">
        <?php
        $k=array('banda aceh','medan','pelambang','padang','riau','lampung','jakarta','bandung','surabaya','bali','marauke');
        for($o=0;$o<=10;$o++)
        {
            echo"<option>$k[$o]</option>";
        }
        ?>
    </select><br>
    <button type="submit">kirim</button>
</form>
<div class="op">
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $barang=$_POST['barang'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $pelanggan=$_POST['pelanggan'];
    $kota=$_POST['kota'];
    $diskon=($harga*$jumlah)*0.2;
     echo"Nama barang =$barang<br>
         harga barang =$harga<br>
         jumlah barang =$jumlah<br>
         Kota tujuan = $kota<br>";
   $status=$pelanggan;
    switch($status){
            case"pelanggan";
            echo"Status = pelanggan";
            break;
            default;
            echo"Status = bukan pelanggan";
    }
    if($kota=='banda aceh'){
        echo"<br> Ongkir = Rp.20.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+20000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+20000;
        }
    }elseif($kota=='medan'){
        echo"<br>Ongkir = Rp.10.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+10000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+10000;
        }
    }elseif($kota=='palemang'){
        echo"<br>Ongkir = Rp.30.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+30000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+30000;
        }
    }elseif($kota=='padang'){
        echo"<br>Ongkir = Rp.40.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+40000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+40000;
        }
    }elseif($kota=='riau'){
        echo"<br>Ongkir = Rp.50.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+50000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+50000;
        }
    }elseif($kota=='lampung'){
        echo"<br>Ongkir = Rp.60.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+60000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+60000;
        }
    }elseif($kota=='jakarta'){
        echo"<br>Ongkir = Rp.70.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+70000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+70000;
        }
    }elseif($kota=='bandung'){
        echo"<br>Ongkir = Rp.80.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+80000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+80000;
        }
    }elseif($kota=='surabaya'){
        echo"<br>Ongkir = Rp.90.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+90000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+90000;
        }
    }elseif($kota=='bali'){
        echo"<br>Ongkir = Rp.100.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+100000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+100000;
        }
    }else{
        echo"<br>Ongkir = Rp.110.000<br>";
        if($pelanggan){
            echo" total harga :";
            echo $harga*$jumlah*0.2+110000;
        }else{
            echo" total harga :";
            echo $harga*$jumlah+110000;
        }
    }
    
    ?>
    
</div>