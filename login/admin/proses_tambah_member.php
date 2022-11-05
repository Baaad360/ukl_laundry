<?php
if ($_POST){
    $nama=$_POST ['nama_member'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $tlp=$_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');
                    location.href='tambah_member.php';</script>";
    } elseif (empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');
                    location.href='tambah_member.php';</script>";
    } elseif (empty($gender)){
        echo "<script>alert('gender tidk boleh kosong');
                    location.href='tambah_member.php';</script>";
    } elseif (empty($tlp)){
        echo "<script>alert('tlp tidk boleh kosong');
                    location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member,alamat,gender,tlp) value ('".$nama."','".$alamat."','".$gender."','".$tlp."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        

        }
    }
}
?>