<?php
include "header_admin.php"
?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Tambah Member</title>
    </head>
    <body>
        <h3>Tambah Member</h3>
        <form action="proses_tambah_member.php" method="post">
            nama member :
            <input type="text" name="nama_member" value="" class="form-control">
            alamat : 
            <input type="text" name="alamat" value="" class="form-control">
            gender :
            <select name="gender" class="form-control">
                <option></option>
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
            no telpon :
            <input type="text" name="tlp" value="" class="form-control">
            <input type="submit" name="simpan" value="tambah member" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>