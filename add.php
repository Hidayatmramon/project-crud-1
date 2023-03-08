<html>
<head>
	<title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="p-3 mb-2 bg-primary text-white">
    	<h1>Program Mendata Siswa</h1>
</div>
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <form method="POST" enctype="multipart/form-data">
        	<table>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>nis</td>
                <td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>rombel</td>
				<td><input type="text" name="rombel"></td>
			</tr>
			<tr>
				<td>rayon</td>
				<td><input type="text" name="rayon"></td>
			</tr>
			<tr>
				<td>status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td>cita-cita</td>
				<td><input type="text" name="cita"></td>
			</tr>
			<tr>
				<td>fhoto</td>
				<td><input type="file" name="fhoto"></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button></td>
			</tr>
			</table>
		</form>
		<?php
				include('koneksi.php');
				
				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$nis = $_POST['nis'];
					$rombel = $_POST['rombel'];
					$rayon = $_POST['rayon'];
					$status = $_POST['status'];
					$cita = $_POST['cita'];
                    $fhoto = $_FILES['fhoto']['name'];

                    move_uploaded_file($_FILES['fhoto']['tmp_name'], 'poto/' . $fhoto);

					$datas = mysqli_query($koneksi, "insert into project (nama,nis,rombel,rayon,status,cita_cita,fhoto)values('$nama', '$nis', '$rombel','$rayon','$status','$cita','$fhoto')") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>


		</div>	
    </div>
</body>
</html>
