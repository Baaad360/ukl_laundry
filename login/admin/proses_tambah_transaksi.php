<?php
if ($_POST){
    $member=$_POST ['id_member'];
    $tanggal=$_POST['tanggal'];
    $tanggal_bayar=$_POST['tanggal_bayar'];
    $harga=$_POST['paket'];
    $berat=$_POST['berat_paket'];
    $total_harga=$harga*$berat; 
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_user=$_POST['id_user'];
    if(empty($member)){
        echo "<script>alert('member tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($tanggal)){
        echo "<script>alert('tanggal tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($harga)){
        echo "<script>alert('paket tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($berat)){
        echo "<script>alert('berat paket tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($status)){
        echo "<script>alert('status tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($dibayar)){
        echo "<script>alert('pembayaran tidak boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } elseif (empty($id_user)){
        echo "<script>alert('id user tidk boleh kosong');
                    location.href='tambah_transaksi.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_member,tanggal,tanggal_bayar,paket,berat_paket,total_harga,status,dibayar,id_user) value ('".$member."','".$tanggal."','".$tanggal_bayar."','".$harga."','".$total_harga."','".$berat."','".$status."','".$dibayar."','".$id_user."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_transaksi.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        

        }
    }
}
?>