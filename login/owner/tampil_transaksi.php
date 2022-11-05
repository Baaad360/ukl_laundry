<?php include "header_owner.php";
?> <div class="container-fluid mt-3">
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
        <title>Data Transaksi</title> 
    </head>
    <body>
        <h3>Daftar Transaksi</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID MEMBER</th>
                    <th>TANGGAL</th>
                    <th>STATUS</th>
                    <th>DIBAYAR</th>
                    <th>ID_USER</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_transaksi=mysqli_query($conn,"select * from transaksi");
                $no=0;
                while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td> 
                    <td><?=$data_transaksi['id_member']?></td>
                    <td><?=$data_transaksi['tanggal']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_transaksi['id_user']?></td>
                </tr>
                <?php } ?>
                </tbody>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                 crossorigin="anonymous"></script>
                 </table>

                 <!--<a href="tambah_transaksi.php" class="btn btn-success">Tambah</a>-->
    </body>
</html>