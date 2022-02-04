<?php
  date_default_timezone_get("Asia/Jakarta");

  require 'function.php';

  if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}

  $ID = $_GET['id'];
  $Data_Dosen = query("SELECT * FROM Data_Dosen WHERE id=$ID");
  //var_dump($Data_Dosen[0]['nama']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/beb99c0499.js" crossorigin="anonymous"></script>

    <title> SIMABA || Tempat Para Mahasiswa Baru </title>
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SIMABA </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <div class="text-white"> 
         <div class> Hari ini, tanggal : <?php echo date('d-m-y'); ?></div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Bar samping -->
  <div class="row mt-4">
    <div class="col-md-2 mt-4 pr-3 pt-4 bg-secondary ">
      <!-- menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-chart-line"></i> Dashboard</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-table"></i> Data Mahasiswa</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="data_dosen.php"><i class="fas fa-table"></i> Data Dosen</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="far fa-sticky-note"></i> Input Data Mahasiswa</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="far fa-calendar"></i> Jadwal Mahasiswa</a><hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-table"></i> Detail Data Dosen </h3><hr>

      <ul class="list-group">
          <li class="list-group-item "> <?="<img src='Tema/".$Data_Dosen['Foto']."'style='width:100px; height:100px;'>"?></li>
          <li class="list-group-item active"> Nama : <?= $Data_Dosen['Nama']; ?></li>
          <li class="list-group-item "> NIDN : <?= $Data_Dosen['NIDN']; ?></li>
          <li class="list-group-item "> Jenis Kelamin : <?= $Data_Dosen['Jenis_Kelamin']; ?></li>
          <li class="list-group-item "> Alamat Rumah : <?= $Data_Dosen['Alamat_Rumah']; ?> </li>
          <li class="list-group-item "> Agama : <?= $Data_Dosen['Agama']; ?></li>
          <li class="list-group-item "> Pendidikan S1 : <?= $Data_Dosen['S1']; ?></li>
          <li class="list-group-item "> Pendidikan S2 : <?= $Data_Dosen['S2']; ?></li>
          <li class="list-group-item "> Pendidikan S3 : <?= $Data_Dosen['S3']; ?></li>
          
          <li class="list-group-item ">
            <a href="hapus_dosen.php?id=<?= $Data_Dosen ['id']; ?>" onclick="return confirm('Apakah anda akan menghapus data ini?');" class="btn btn-danger" role="button"> Hapus </a> |
            <a href="data_dosen.php" class="btn btn-primary" role="button"> Kembali </a>
          </li>
      </ul>
        </div>
      </div>

  </body>
</html>
