<?php

require "koneksi.php";

// ambil name dari file tambah data
$idSiswa        = $_POST['id'];
$nis            = $_POST['nis'];
$namaSiswa      = $_POST['namaSiswa'];
$kelas          = $_POST['kelas'];
$tahunAjaran    = $_POST['tahunAjaran'];
$biaya          = $_POST['biaya'];

// input data siswa
$input = mysqli_query($koneksi, "UPDATE siswa SET 
                                nis = '$nis',
                                namaSiswa = '$namaSiswa',
                                kelas = '$kelas',
                                tahunAjaran = '$tahunAjaran',
                                biaya = '$biaya' WHERE idSiswa = '$idSiswa'");

header("location:index.php");
?>