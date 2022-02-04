<?php
require "functions-anggota.php";

if (!isset($_GET['id'])){
    header("location: tables-anggota.php");
    exit;
}

$id = $_GET['id'];
if(hapus($id) > 0)
{
    echo 
    "<script>
    alert('data berhasil dihapus');
    document.location.href = 'tables-anggota.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal dihapus');
    </script>";
}
?>