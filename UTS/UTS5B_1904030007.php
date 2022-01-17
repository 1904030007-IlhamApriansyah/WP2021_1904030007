<!Doctype html>
<html>
<head>
    <title> UTS Web Programming </title>
</head>
<body>

<!-- 1. Array dapat menyimpan lebih dari 1 nilai dengan nama yang sama, sedangkan variabel biasa hanya dapat menampung 1 data saja
Array dapat diakses berdasarkan indexnya, sedangkan variabel langsung diakses lewat nama variabelnya" -->
 
    <h1> Pembuatan Array </h1>
<?php
    //Array dasar
    $values = array(1,2,3,4,5,6,7);
    var_dump($values);
    echo"<br>";
    print("nilai yg dipanggil adalah : ");
    echo($values [7]);

    echo"<p>";

    //Array dengan Symbian
    $os = ["Windows","Linux","Android","FreeBSD","Symbian","Mac","Meego"];
    var_dump($os);
    echo"<br>";
    print("Hari ini, saya menggunakan Windows ");
    echo($os []);

    echo"<p>";

    //Menambah value Array
    $os[] = "MocorDroid";
    var_dump($os);
    echo"<p>";

    //Menghapus value Array
    unset($os[1]);
    var_dump($os);
    echo"<p>";

    //Menghitung total Array
    var_dump(count($os));
?>


<hr>
    <h1> Map dengan Array </h1>
<?php
$data_diri = array(
            "nama" => "Ilham Apriansyah",
            "jenis kelamin" => "Laki-laki",
            "umur" => 20,
            "Alamat" => "Jl. Kencana Timur X Blok B 7/6 Kel. Kutabaru Kec. Pasarkemis Kab. Tanggerang",
        
            "nim" => 1904030007,
            "semester" => 5,
            "SKS" => 19,
var_dump($data_diri);

echo"<p>";
    print("Data lengkap");
    echo"<br>";
    echo("nama  : " . $data_diri["nama"]);
    echo"<br>";
    echo("NIM   : " . $data_diri["nim"]);
    echo"<br>";
    echo("Umur : " . $data_diri["umur"]);
    echo"<br>";
    echo("Jenis Kelamin : " . $data_diri["jenis kelamin"]);
    echo"<br>";
    echo("Semester : " . $data_diri["semester"]);
?>
<hr>
    <h1> Array Asosiatif </h1>
    <?php
    // membuat array asosiatif
    $data_diri = [
       "nama" => "Ilham Apriansyah",
            "jenis kelamin" => "Laki-laki",
            "umur" => 20,
            "Alamat" => "Jl. Kencana Timur X Blok B 7/6 Kel. Kutabaru Kec. Pasarkemis Kab. Tanggerang"
            "nim" => 1904030007,
            "semester" => 5,
            "SKS" => 19
    ];
    
    //mencetak isi array asosiatif
    echo "<h2> Data mahasiswa </h2>";
    echo "<p>Nama : ".$data_diri["nama"]."</br>";
    echo "<p>Umur : ".$data_diri["umur"]."</br>";
    echo "<p>Alamat : ".$data_diri["Alamat"]."</br>";
    echo "<p>jenis kelamin : ".$data_diri["jenis kelamin"]."</br>";
    ?>
<hr>
    <h1> Array Multi Dimensi </h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
     $kawan = [
         [
             "Nama" => "Rehan",
             "Umur" => "20 Tahun"
         ],
         [
            "Nama" => "Dwi",
            "Umur" => "19 Tahun"
        ],
        [
            "Nama" => "Eko",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Geri",
            "Umur" => "24 Tahun"
        ],

     ];
     echo "<br>";

     // menampilkan array
     foreach ($kawan as $kawan) {
         echo "<h2>".$kawan["Nama"]."</h2>";
         echo "<p>".$kawan["Umur"]."</p>";
         echo "<hr>";
     }
    
    ?>

</body>
</html>