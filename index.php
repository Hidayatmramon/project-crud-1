<?php
 include('koneksi.php');
 $datas = mysqli_query($koneksi, "select * from project") 
 or die(mysqli_error($koneksi));
 $no = 1;
 ?>

<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Mendata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
  <header>
      <div class="jumbotron text-center">
        <h1>SMK Wikrama Bogor</h1>
        <p>Program Mendata Siswa</p>
      </div>
    </header>
      <div class="modal-body">
        <div>    
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">nis</th>
      <th scope="col">rombel</th>
      <th scope="col">rayon</th>
      <th scope="col">aksi</th>

    </tr>
  </thead>
  <tbody>
     <?php while($row = mysqli_fetch_assoc($datas)){ ?>
     <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['nama']; ?></td>
         <td><?php echo $row['nis']; ?></td>
         <td><?php echo $row['rombel']; ?></td>
         <td><?php echo $row['rayon']; ?></td>
         <td>  <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>    
        <a class="btn btn-primary" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        <a class="btn btn-primary" href="coba.php?id=<?php echo $row['id']; ?>">Detail</a></td>

     </tr>
    <?php } ?>
 </tbody>
</table>

        </div>
      </div>
      
      <div class="modal-footer">
        <a class="btn btn-primary" href="add.php">Tambah Data</a>


      </div>
   
    </div>
  </div>
</div>
</div>
</div>
 </body>
</html>
