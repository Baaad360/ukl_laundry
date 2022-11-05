<?php
if ($_POST) {
    $jenis_paket=$_POST ['jenis_paket'];
    $harga=$_POST['harga'];
    if (empty($jenis_paket)) {
        echo "<script>alert('jenis paket tidak boleh kosong');
                location.href='input_paket.php';</script>";
    }
    if (empty($harga)) {
        echo "<script>alert('harga paket tidak boleh kosong');
                location.href='input_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis_paket,harga) value ('".$jenis_paket."','".$harga."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='data_paket.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan paket');location.href='input_paket.php';</script>";
        

        }
    }
}