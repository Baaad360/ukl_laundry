<?php include "header_admin.php";?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
        <title>Data Paket</title> 
    </head>
    <body>
        <h3>Daftar Paket</h3>
        <table class="table table-hover table-striped">
<thead>
                <tr>
                    <th>NAMA PAKET</th>
                    <th>HARGA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
        <tbody>
    <?php
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while ($data_paket = mysqli_fetch_array($qry_paket)) {
        ?>
                <tr>
                    <td><?=$data_paket['jenis_paket']?></td>
                    <td><?=$data_paket['harga']?></td>
                    
                
                    <td>
                        <a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">ubah</a> |
                        <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>"
                        onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                     </td>
                </tr>
                <?php } ?>
    </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                 crossorigin="anonymous"></script>
                 </table>
                 <a href="input_paket.php" class="btn btn-success">Tambah</a>
    </body>
    </html>