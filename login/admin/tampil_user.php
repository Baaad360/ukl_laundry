<?php include "header_admin.php";
?> <div class="container-fluid mt-3">
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
        <title>Data User</title> 
    </head>
    <body>
        <h3>Daftar User</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA USER</th>
                    <th>USERNAME</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_user=mysqli_query($conn,"select * from user");
                $no=0;
                while($data_user=mysqli_fetch_array($qry_user)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td> 
                    <td><?=$data_user['nama']?></td>
                    <td><?=$data_user['username']?></td>
                    <td><?=$data_user['level']?></td>
                    
                
                    <td>
                        <a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">ubah</a> |
                        <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>"
                        onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                     </td>
                </tr>
                <?php } ?>
                </tbody>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                 crossorigin="anonymous"></script>
                 </table>
                 <a href="tambah_user.php" class="btn btn-success">Tambah</a>
    </body>
</html>