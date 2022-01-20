<?php
$conn = mysqli_connect('localhost','ilham','123456','Mahasiswa');

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

    $Nama           = ($Data['Nama']);
    $Umur           = ($Data['Umur']);
    $Agama          = ($Data['Agama']);
    $Jenis_Kelamin  = ($Data['Jenis_Kelamin']);
    $Kelas          = ($Data['Kelas']);
    $Foto           = ($Data['Foto']);


    $query = "INSERT INTO Data_Mahasiswa
    VALUES 
    (null,'$Nama','$Umur','$Agama','$Jenis_Kelamin','$Kelas','$Foto');";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function hapus($id)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM Data_Mahasiswa WHERE id =$id") or die (mysqli_error($conn));
   return mysqli_affected_rows($conn);
}
?>