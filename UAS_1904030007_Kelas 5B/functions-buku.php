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

    $No_Buku        = htmlspecialchars($Data['No_Buku']);
    $Judul          = htmlspecialchars($Data['Judul']);
    $ISBN           = htmlspecialchars($Data['ISBN']);
    $Foto           = htmlspecialchars($Data['Foto']);


    $query = "INSERT INTO Table_Buku
    VALUES 
    (null,'$No_Buku','$Judul','$ISBN','$Foto');";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function hapus($id)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM Table_Buku WHERE id =$id") or die (mysqli_error($conn));
   return mysqli_affected_rows($conn);
}

function edit($Data)
{
    global $conn;

    $id         = $Data['id'];
    $No_Buku    = htmlspecialchars($Data['No_Buku']);
    $Judul      = htmlspecialchars($Data['Judul']);
    $ISBN       = htmlspecialchars($Data['ISBN']);
    $Foto       = htmlspecialchars($Data['Foto']);


    $query = "UPDATE Table_Buku SET 
    No_Buku = '$No_Buku',
    Judul = '$Judul',
    ISBN = '$ISBN',
    Foto = '$Foto'
    WHERE id =$id;";
    
    mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query  = "SELECT * FROM Table_Buku WHERE Judul LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}