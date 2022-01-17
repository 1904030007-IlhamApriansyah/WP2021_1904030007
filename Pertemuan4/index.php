<!Doctype html>
<html>
<head>
    <title> Pertemuan 4 </title>
</head>
<body>
    <h1> Pembuatan Array </h1>
<?php
    //Array dasar
    $values = array(1,2,3,4,5);
    var_dump($values);
    echo"<br>";
    print("nilai yg dipanggil adalah : ");
    echo($values [3]);

    echo"<p>";

    //Array dengan tipe data
    $makanan = ["Mie","Bakso","Bubur","Soto"];
    var_dump($makanan);
    echo"<br>";
    print("Hari ini, saya mau makan ");
    echo($makanan [2]);

    echo"<p>";

    //Mengganti value Array
    $makanan[3] = "Kare";
    var_dump($makanan);
    echo"<p>";

    //Menambah value Array
    $makanan[] = "Nasi";
    var_dump($makanan);
    echo"<p>";

    //Menghapus value Array
    unset($makanan[1]);
    var_dump($makanan);
    echo"<p>";

    //Menghitung total Array
    var_dump(count($makanan));
?>
<hr>
    <h1> Map dengan Array </h1>
<?php
$data_diri = array(
            "nama" => "Ilham Apriansyah",
            "jenis kelamin" => "Laki-laki",
            "umur" => 20,
            "Alamat" => [
                "kota" => "Tangerang",
                "Provinsi" => "Banten"
                        ]
            );
var_dump($data_diri);
echo"<p>";
$data_mhs = [
            "nim" => 1904030007,
            "semester" => 5,
            "SKS" => 19
];
var_dump($data_mhs);
echo"<p>";
    print("Data lengkap");
    echo"<br>";
    echo("nama  : " . $data_diri["nama"]);
    echo"<br>";
    echo("NIM   : " . $data_mhs["nim"]);
    echo"<br>";
    echo("Umur : " . $data_diri["umur"]);
    echo"<br>";
    echo("Jenis Kelamin : " . $data_diri["jenis kelamin"]);
    echo"<br>";
    echo("Semester : " . $data_mhs["semester"]);
?>
<hr>
    <h1> Operator Aritmatika </h1>

<?php
$penjumlahan = 50 + 50;
$pengurangan = 100 - 20;
$perkalian = 10 * 5;
$pembagian = 50 / 5;
$modular = 100 % 50;
$perpangkatan = 3**5;
    echo "Tambah : " . $penjumlahan . "<br>";
    echo "Kurang : " . $pengurangan . "<br>";
    echo "Kali : " . $perkalian . "<br>";
    echo "Bagi : " . $pembagian . "<br>";
    echo "Modular : " . $modular . "<br>";
    echo "Pangkat : " . $perpangkatan . "<br>";
?>

<hr>
    <h1> Increment </h1>
<?php
$a = 50;
    $a = $a + 1;
$a++;
$a--;

echo($a);

?>

</body>
</html>