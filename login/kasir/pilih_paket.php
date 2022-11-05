<?php 
    include "header_admin.php";
    include "koneksi.php";
    $qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_detail_paket);
?>
<h2>Pilih Paket</h2>
<div class="row">
    <div class="col-md-8">
        <form action="####.php?id_paket=<?=$dt_paket['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Paket</td>
                        <td><?=$dt_paket['jenis_paket']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?=$dt_paket['harga']?></td>
                    </tr>
                    <tr>
                        <td>Berat (KG)</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="KIRIM"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>