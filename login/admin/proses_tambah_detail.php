<?php
if ($_POST){
    $id_transaksi=$_POST ['id_transaksi'];
    $id_paket=$_POST['id_paket'];
    if(empty($id_transaksi)){
        echo "<script>alert( id transaksi tidak boleh kosong');
                    location.href='detail_transaksi.php';</script>";
    } elseif (empty($id_paket)){
        echo "<script>alert('idpaket tidak boleh kosong');
                    location.href='detail_transaksi.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket) value ('".$id_transaksi."','".$id_paket."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan detail_transaksi');location.href='tampil_member.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan detail_transaksi');location.href='detail_transaksi.php';</script>";
        

        }
    }
}
?>