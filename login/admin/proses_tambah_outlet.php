<?php
if ($_POST){
    $nama=$_POST ['nama_outlet'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');
                    location.href='tambah_outlet.php';</script>";
    } elseif (empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');
                    location.href='tambah_outlet.php';</script>";
    } elseif (empty($tlp)){
        echo "<script>alert('tlp tidk boleh kosong');
                    location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama_outlet,alamat,tlp) value ('".$nama."','".$alamat."','".$tlp."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        

        }
    }
}
?>