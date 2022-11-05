<?php
include "header_admin.php"
?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>DATA TRANSAKSI</title>
    </head>
    <body>
        <h3>DATA TRANSAKSI</h3>
        <form action="proses_tambah_detail.php" method="post">
            ID Transaksi :
            <select name="id_transaksi" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_transaksi=mysqli_query($conn,"select * from transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                echo '<option value="'.$data_transaksi['id_transaksi'].'">'.$data_transaksi['id_transaksi'].'</option>';   
            }
            ?>
        </select>
            ID Paket : 
            <select name="id_paket" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis_paket'].'</option>';   
            }
            ?>
        </select>
            <input type="submit" name="simpan" value="tambah detail" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>