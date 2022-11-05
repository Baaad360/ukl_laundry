<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>UBAH TRANSAKSI</title>
    </head>
    <body>
    <?php include 'header_kasir.php';?>
        <?php 
        include "koneksi.php";
        $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
        $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
        ?>
        
        <h3>Ubah Transaksi</h3>
        <form action="proses_ubah_transaksi.php" method="post">
            <input type="hidden" name="id_transaksi" value="<?=$dt_transaksi['id_transaksi']?>">
            <b>Member : <?=$dt_transaksi['id_member']?></b>
            <br>
            Tanggal :
            <input type="date" name="tanggal" value="<?=$dt_transaksi['tanggal']?>" class="form-control">
            Tanggal Bayar :
            <input type="date" name="tanggal_bayar" value="<?=$dt_transaksi['tanggal_bayar']?>" class="form-control">
            Status :
        <select name="status" class="form-control">
            <option><?=$dt_transaksi['status']?></option>
            <option>baru</option>
            <option>proses</option>
            <option>selesai</option>
            <option>diambil</option>
        </select>
            Dibayar :
        <select name="dibayar" class="form-control">
            <option><?=$dt_transaksi['dibayar']?></option>
            <option>belum dibayar</option>
            <option>dibayar</option>
        </select>
           <b>User : <?=$dt_transaksi['id_user']?></b>
            <br>
            <input type="submit" name="simpan" value="Ubah Transaksi" class="btn btn-primary">
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
        </html>