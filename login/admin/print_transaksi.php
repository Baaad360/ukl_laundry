<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>PRINT TRANSAKSI</title>
    </head>
    <body>
    <?php include 'header_admin.php';?>
        <?php 
        include "koneksi.php";
        $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
        $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
        ?>
        
        <h3>Print Transaksi</h3>
            <input type="hidden" name="id_transaksi" value="<?=$dt_transaksi['id_transaksi']?>">
            <b>Member : <?=$dt_transaksi['id_member']?></b>
            <br>
            Tanggal : <?=$dt_transaksi['tanggal']?> <br>
            Tanggal Bayar : <?=$dt_transaksi['tanggal_bayar']?> <br>
            Status : <?=$dt_transaksi['status']?> <br>
            Dibayar : <?=$dt_transaksi['dibayar']?> <br>
           <b>User :<?=$dt_transaksi['id_user']?></b> 
            <br>
            <button onclick="window.print()" class="btn btn-info">Print</button>
            <a href="tampil_transaksi.php" class="btn btn"></a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
        </html>