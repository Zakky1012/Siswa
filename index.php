<?php
    require "koneksi.php";  

    $query          = mysqli_query($koneksi, "SELECT * FROM siswa ");
?>
<?php include('header.php'); ?>

        <h1 > Data Siswa </h1>

        <a href="tambah.php" class="btn btn-primary"> tambah data siswa </a>
        <P></P>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <td>id siswa</td>
                <td>nama siswa</td>
                <td>kelas</td>
                <td>tahun ajaran</td>
                <td>biaya</td>
                <td>Aksi</td>
            </tr>
        </thead>
            <?php $no = 1; ?>
            <?php while ($ambilData = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++; ?></td>    
                <td><?= $ambilData['namaSiswa']; ?></td>    
                <td><?= $ambilData['kelas']; ?></td>    
                <td><?= $ambilData['tahunAjaran']; ?></td>    
                <td><?= $ambilData['biaya']; ?></td>    
                <td>
                        <a href="edit.php?id=<?= $ambilData['idSiswa'] ; ?>" class="btn btn-success"> edit </a>
                        <a href="hapus.php?id=<?= $ambilData['idSiswa'] ; ?>" class="btn btn-danger"> hapus </a>
                </td>
            </tr>
            <?php endwhile; ?>
    </table>
       
<?php include('footer.php'); ?>