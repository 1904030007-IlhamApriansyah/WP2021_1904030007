<?php
$conn = mysqli_connect('localhost','ilham','123456','Perpustakaan');

// pemanggil tabel
function query($query)
{
    global $conn;

    //memanggil seluruh data pada tabel
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }
    
    //pemanggil elemen data agar rapih
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($Data)
{
    global $conn;

    $No_Anggota    = htmlspecialchars($Data['No_Anggota']);
    $Nama          = htmlspecialchars($Data['Nama']);
    $Umur          = htmlspecialchars($Data['Umur']);
    $Jabatan       = htmlspecialchars($Data['Jabatan']);
    $Foto          = htmlspecialchars($Data['Foto']);


    $query = "INSERT INTO Table_Anggota
    VALUES 
    (null,'$No_Anggota','$Nama','$Umur','$Jabatan','$Foto');";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function hapus($id)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM Table_Anggota WHERE id =$id") or die (mysqli_error($conn));
   return mysqli_affected_rows($conn);
}

function edit($Data)
{
    global $conn;

    $id         = $Data['id'];
    $No_Anggota    = htmlspecialchars($Data['No_Anggota']);
    $Nama          = htmlspecialchars($Data['Nama']);
    $Umur          = htmlspecialchars($Data['Umur']);
    $Jabatan       = htmlspecialchars($Data['Jabatan']);
    $Foto          = htmlspecialchars($Data['Foto']);


    $query      = "UPDATE Table_Anggota SET 
    No_Anggota  = '$No_Anggota',
    Nama        = '$Nama',
    Umur        = '$Umur',
    Jabatan     = '$Jabatan',
    Foto        = '$Foto'
    WHERE id    =$id;";
    
    mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query  = "SELECT * FROM Table_Anggota WHERE Nama LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}