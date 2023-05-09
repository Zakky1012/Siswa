<?php

require "koneksi.php";

// ambil name dari file tambah data
$idSiswa        = $_POST['idSiswa'];
$nis            = $_POST['nis'];
$namaSiswa      = $_POST['namaSiswa'];
$kelas          = $_POST['kelas'];
$tahunAjaran    = $_POST['tahunAjaran'];
$biaya          = $_POST['biaya'];

// input data siswa
$input = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('', '$nis', '$namaSiswa', '$kelas', '$tahunAjaran', '$biaya') ");

header("location:index.php");
?>