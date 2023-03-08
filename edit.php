<?php
 include 'koneksi.php';
 if(isset($_POST['submit'])){
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $nis = $_POST['nis'];
     $rombel = $_POST['rombel'];
     $rayon = $_POST['rayon'];
     $status = $_POST['status'];
     $cita = $_POST['cita_cita'];
     $fhoto = $_FILES['fhoto']['name'];
     $query = mysqli_query($koneksi, "UPDATE project SET nama='$nama', nis='$nis',rombel='$rombel',rayon='$rayon',status='$status',cita_cita='$cita',fhoto='$fhoto' WHERE id='$id'");
     if($query){
         header('Location: index.php');
     }else{
         echo "Edit data gagal";
     }
 }
 $id = $_GET['id'];
 $query = mysqli_query($koneksi, "SELECT * FROM project WHERE id='$id'");
 $data = mysqli_fetch_assoc($query);
?>
<html>
<head>
	<title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white">
    	<h1>Edit Data Siswa</h1>
</div>
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <form method="POST" enctype="multipart/form-data">
        	<table>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
			</tr>
			<tr>
				<td>Rombel</td>
				<td><input type="text" name="rombel" value="<?php echo $data['rombel']; ?>"></td>
			</tr>
			<tr>
				<td>Rayon</td>
				<td><input type="text" name="rayon" value="<?php echo $data['rayon']; ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $data['status']; ?>"></td>
			</tr>
			<tr>
				<td>Cita-Cita</td>
				<td><input type="text" name="cita_cita" value="<?php echo $data['cita_cita']; ?>"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="fhoto" value="<?php echo $data['fhoto']; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
				<td><button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button></td>
			</tr>
			</table>
		</form> 
    </div>
    </div>
</body>
</html>