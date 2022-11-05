<?php include "header_admin.php";
?> <div class="container-fluid mt-3">
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
        <title>Data Outlet</title> 
    </head>
    <body>
        <h3>Daftar Outlet</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA OUTLET</th>
                    <th>ALAMAT</th>
                    <th>TELPON</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_outlet=mysqli_query($conn,"select * from outlet");
                $no=0;
                while($data_outlet=mysqli_fetch_array($qry_outlet)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td> 
                    <td><?=$data_outlet['nama_outlet']?></td>
                    <td><?=$data_outlet['alamat']?></td>
                    <td><?=$data_outlet['tlp']?></td>
                    
                
                    <td>
                        <a href="ubah_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" class="btn btn-success">ubah</a> |
                        <a href="hapus_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>"
                        onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                     </td>
                </tr>
                <?php } ?>
                </tbody>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                 crossorigin="anonymous"></script>
                 </table>
                 <a href="tambah_outlet.php" class="btn btn-success">Tambah</a>
    </body>
</html>