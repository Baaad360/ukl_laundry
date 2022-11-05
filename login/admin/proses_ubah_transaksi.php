<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $tanggal=$_POST['tanggal'];
    $batas_waktu=$_POST['batas_waktu'];
    $tanggal_bayar=$_POST['tanggal_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    if (empty($tanggal)){
        echo "<script>alert('tanggal tidak boleh kosong'); location.href='tampil_transaksi.php';</script>";
    } else if(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='tampil_transaksi.php';</script>";
    } else if(empty($dibayar)){
        echo "<script>alert('status pembayaran tidak boleh kosong');location.href='tampil_transaksi.php';</script>";
        } else {
            include "koneksi.php" ;
            $update=mysqli_query($conn,"update transaksi set tanggal='".$tanggal."', tanggal_bayar='".$tanggal_bayar."', status='".$status."', dibayar='".$dibayar."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
            if($update){

                echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";

            } else {

                echo "<script>alert('Gagal update transaksi');location.href='tampil_transaksi.php?id_transaksi=".$id_transaksi."';</script>";

            }
        }
    }


?>