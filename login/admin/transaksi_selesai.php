<?php
    if($_GET['status']){
        include "koneksi.php";
            $qry_selesai=mysqli_query($conn,"update transaksi set status='selesai'");
          if($qry_selesai) {
                echo "<script>alert ('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";
        } else {
                echo "<script>alert ('Gagal update transaksi');location.href='tampil_transaksi.php';</script>";
        }
    }
?>