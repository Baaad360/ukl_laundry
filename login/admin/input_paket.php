<?php 
include "header_admin.php";
?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Input Paket</title>
    </head>
    <body>
        <h3>Input Paket</h3>
        <form action="proses_input_paket.php" method="post" enctype="multipart/form-data">
            Jenis Paket :
            <input type="text" name="jenis_paket" value="" class="form-control">
            harga : 
            <input type="text" name="harga" value="" class="form-control">
            <input type="submit" name="simpan" value="input paket" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>