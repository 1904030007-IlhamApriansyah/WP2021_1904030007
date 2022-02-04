<?php
    require 'functions-anggota.php';

    if (!isset($_GET['id'])){
    header("location: tables-anggota.php");
    exit;
    }

    $id = $_GET['id'];
    $Table_Anggota = query("SELECT * FROM Table_Anggota WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan UT | Universitas Terbuka</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">KampusKu || UT</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tables-buku.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> Tabel Buku
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>Anggota Perpustakaan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="tables-anggota.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Tabel Anggota
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="col-md-10 p-5 pt-5">
                     <!-- konten -->
                    <h3><i class="fas fa-table"></i> Detail Anggota </h3><hr>
                        <ul class="list-group">
                            <li class="list-group-item active"><?="<img src='assets/img/".$Table_Anggota['Foto']."'style='width:400px; height:400px;'>"?></li>
                            <li class="list-group-item "> No Anggota : <?= $Table_Anggota['No_Anggota']; ?></li>
                            <li class="list-group-item "> Nama : <?= $Table_Anggota['Nama']; ?></li>
                            <li class="list-group-item "> Umur : <?= $Table_Anggota['Umur']; ?></li>
                            <li class="list-group-item "> Jabatan : <?= $Table_Anggota['Jabatan']; ?></li>
                            <li class="list-group-item ">
                                <a href="edit-anggota.php?id=<?= $Table_Anggota ['id']; ?>" class="btn btn-warning" role="button"> Edit </a> |
                                <a href="hapus-anggota.php?id=<?= $Table_Anggota ['id']; ?>" onclick="return confirm('Apakah anda akan menghapus data ini?');" class="btn btn-danger" role="button"> Hapus </a> |
                                <a href="tables-anggota.php" class="btn btn-primary" role="button"> Kembali </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
</html>