<?php
  date_default_timezone_get("Asia/Jakarta");

  include 'Koneksi.php';
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
          <a class="nav-link text-white" href="#"><i class="far fa-sticky-note"></i> Catatan Mahasiswa</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="far fa-calendar"></i> Jadwal Mahasiswa</a><hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-table"></i> Data Mahasiswa </h3><hr>

      <table class="table table-striped">
        <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Kelas</th>
        <th scope="col">Opsi</th>
      </tr>
      </thead>
      <tbody>
      <?php $no=1; ?>
      <?php
      while ($Data_Mahasiswa = mysqli_fetch_assoc($result)){ ?>
        <tr>
          <th scope="row"><?php echo $no; ?></th>
          <td><?php echo $$Data_Mahasiswa['ID']; ?></td>
          <td><?php echo $$Data_Mahasiswa['Nama']; ?></td>
          <td><?php echo $$Data_Mahasiswa['Umur']; ?></td>
          <td><?php echo $$Data_Mahasiswa['Jenis Kelamin']; ?></td>
          <td> <?php echo $$Data_Mahasiswa['Kelas']; ?></td>
          <td><a href="#" class="class"><i class="fas fa-edit"></i></a>||<a href="Alert.php" class="class"><i class="fas fa-trash-alt"></i></td></a>
        </tr>
      <?php $no++ ?>
      <?php } ?>

      </tbody>
          </table>
        </div>
      </div>

  </body>
</html>
