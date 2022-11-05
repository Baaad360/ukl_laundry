<?php
include "header_admin.php"
?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Tambah Outlet</title>
    </head>
    <body>
        <h3>Tambah Outlet</h3>
        <form action="proses_tambah_outlet.php" method="post">
            nama outlet :
            <input type="text" name="nama_outlet" value="" class="form-control" placeholder="masukan nama outlet...">
            alamat : 
            <input type="text" name="alamat" value="" class="form-control" placeholder="masukan alamat outlet...">
            kontak outlet :
            <input type="text" name="tlp" value="" class="form-control" placeholder="masukan kontak outlet...">
            <input type="submit" name="simpan" value="tambah outlet" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>