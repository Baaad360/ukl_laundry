<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    if (empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='tampil_outlet.php';</script>";
    } else if(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tampil_outlet.php';</script>";
    } else if(empty($tlp)){
        echo "<script>alert('contact tidak boleh kosong');location.href='tampil_outlet.php';</script>";
        } else {
            include "koneksi.php" ;
            $update=mysqli_query($conn,"update outlet set nama_outlet='".$nama_outlet."', alamat='".$alamat."', tlp='".$tlp."' where id_outlet = '".$id_outlet."'") or die(mysqli_error($conn));
            if($update){

                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";

            } else {

                echo "<script>alert('Gagal update outlet');location.href='tampil_outlet.php?id_outlet=".$id_outlet."';</script>";

            }
        }
    }


?>