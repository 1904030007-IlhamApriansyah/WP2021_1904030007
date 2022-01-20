<?php
require "function.php";

//agar tidak bisa dihapus secara pengetikan manual
if (!isset($_GET['id'])){
    header("location: data_dosen.php");
    exit;
}

$id = $_GET['id'];
if(hapus_dosen($id) > 0)
{
    echo 
    "<script>
    alert('data berhasil dihapus');
    document.location.href = 'data_dosen.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal dihapus');
    </script>";
}