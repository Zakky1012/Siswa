<?php

    require "koneksi.php";
    $id = $_GET["id"];
    $query          = mysqli_query($koneksi, "SELECT * FROM siswa WHERE idSiswa = $id ");

    $ambilData      = mysqli_fetch_assoc($query);
?>

<?php include('header.php'); ?>

        <h1 style="text-align: center;">edit data siswa</h1>
         
        <br>
        <form method="post" action="editAksi.php">
        <input type="hidden" name="id" value="<?= $ambilData['idSiswa']; ?>">
        <table>
			<tr>
				<td>NIS</td>
				<td>
                    <input type="number" class="form-control" name="nis" value="<?= $ambilData['nis']; ?>">
                </td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" class="form-control" name="namaSiswa" value="<?= $ambilData['namaSiswa']; ?>"></td>
			</tr>
            <tr>
				<td>Kelas</td>
				<td><input type="text" class="form-control" name="kelas" value="<?= $ambilData['kelas']; ?>"></td>
			</tr>
            <tr>
				<td>Tahun Ajaran</td>
				<td><input type="text" class="form-control" name="tahunAjaran" value="<?= $ambilData['tahunAjaran']; ?>"></td>
			</tr>
            <tr>
				<td>Biaya</td>
				<td><input type="text" class="form-control" name="biaya" value="<?= $ambilData['nis']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="EDIT" class="btn btn-primary"></td>
			</tr>		
		</table>
        </form>
    </body>
</html>