<?php

    require "koneksi.php";
	
?>

<?php include('header.php'); ?>

        <h1 style="text-align: center;">Tambah data siswa</h1>

        <form method="post" action="tambahAksi.php" class="form-group">
        <table>
			<tr>
				<td>NIS</td>
				<td><input type="number" name="nis" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="namaSiswa" class="form-control"></td>
			</tr>
            <tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" class="form-control"> </td>
			</tr>
            <tr>
				<td>Tahun Ajaran</td>
				<td><input type="text" name="tahunAjaran" class="form-control"></td>
			</tr>
            <tr>
				<td>Biaya</td>
				<td><input type="text" name="biaya" class="form-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
			</tr>		
		</table>
        </form>
<?php include('footer.php'); ?>