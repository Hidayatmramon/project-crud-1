<?php
 include('koneksi.php');
 $datas = mysqli_query($koneksi, "select * from project") 
 or die(mysqli_error($koneksi));
 $no = 1;
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="styles.css"/>
<body>
<div class="container">
    <h1>Detail Siswa</h1>
  
    <div class="cardcontainer">
        <div class="photo">
         
        <?php while($row = mysqli_fetch_assoc($datas)){ ?>
                <img src="poto/<?= $row["fhoto"]?>">   
                 <div class="content">        
                <p class="txt4"><?= $row["nama"]?>           
                <p class="txt2"><?= $row["nis"]?>           
                <p class="txt2"><?= $row["rombel"]?>           
                <p class="txt2"><?= $row["rayon"]?>           
                <p class="txt2"><?= $row["status"]?>           
                <p class="txt2"><?= $row["cita_cita"]?>           
                <p><a class="waves-effect waves-light btn" href="index.php">Home</a> 
     </div>
        </div>
            <?php } ?> 

           
        </div>
       
    </div>
</div>
</body>