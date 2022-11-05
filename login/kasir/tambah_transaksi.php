<?php
include "header_kasir.php";
?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Tambah Transaksi</title>
    </head>
    <body>
        <h3>Tambah Transaksi</h3>
        <form action="proses_tambah_transaksi.php" method="post">
            member :
            <select name="id_member" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';   
            }
            ?>
        </select>
            tanggal : 
            <input type="date" name="tanggal" value="" class="form-control">
            tanggal bayar :
            <input type="date" name="tanggal_bayar" value="" class="form-control">
            jenis paket :
            <select name="paket" id="paket" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            while ($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['harga'].'">'.$data_paket['jenis_paket'].'</option>';   
            }
            ?>
            </select>
            berat paket :
            <input type="number" name="berat" class="form-control">
            status :
        <select name="status" class="form-control">
            <option></option>
            <option>baru</option>
            <option>proses</option>
            <option>selesai</option>
            <option>diambil</option>
        </select>
            dibayar :
        <select name="dibayar" class="form-control">
            <option></option>
            <option>belum dibayar</option>
            <option>dibayar</option>
        </select>
            user :
        <select name="id_user" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            while($data_user=mysqli_fetch_array($qry_user)){
                echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';   
            }
            ?>
        </select>
            <input type="submit" name="simpan" value="tambah transaksi" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>