<?php include "header_admin.php";
?> <div class="container-fluid mt-3">
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
        <title>Histori Transaksi</title> 
    </head>
    <body>
        <h3>Histori Transaksi</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID TRANSAKSI</th>
                    <th>ID MEMBER</th>
                    <th>TANGGAL</th>
                    <th>TANGGAL BAYAR</th>
                    <th>STATUS</th>
                    <th>DIBAYAR</th>
                    <th>ID_USER</th>
                    <th>AKSI</th>
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
                    <td><?=$data_transaksi['id_transaksi']?></td> 
                    <td><?=$data_transaksi['id_member']?></td>
                    <td><?=$data_transaksi['tanggal']?></td>
                    <td><?=$data_transaksi['tanggal_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_transaksi['id_user']?></td>
                
                    <td>
                    <a href="transaksi_selesai.php?status=<?=$data_transaksi['status']?>"
                        onclick="return confirm ('Apakah anda yakin update data ini?')" class="btn btn-primary" name="selesai" value="selesai">selesai</a> |
                        <a href="hapus_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>"
                        onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a> |
                        <a href="print_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-info">print</a>
                     </td>
                </tr>
                <?php } ?>
                </tbody>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                 crossorigin="anonymous"></script>
                 </table>
                 <a href="tambah_transaksi.php" class="btn btn-success">tambah transaksi</a>
                </body>
</html>