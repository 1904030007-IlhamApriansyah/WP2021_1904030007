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
?>