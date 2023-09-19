<?php

//Cara Lama
$a = array('Jayapura','Bandung','Wamena','Biak','Lannyjaya');

//Cara Baru
$b= [ 'Jayapura','Bandung','Wamena','Biak','Lannyjaya'];

//echo($b);
echo "<br>";
 
foreach($b as $nama_kota)
{
    echo $nama_kota . "<br>";
}

//array associative
$c = ["Billi"=> "Biak",
            "Calvin"=> "Wamena",
            "Billi"=> "wamena",
            "Samuel" => "Sorong"
];

var_dump($c);
echo  "<br>";
echo $c ['Billi'] .  "<br>";
echo $c ['Calvin'] .  "<br>";
echo $c ['Samuel'] .  "<br>";

//array dua demensin

$data_kendaraan = [
    [
        "nama_kendaraan" => "motor metik",
        "tahun_beli"            => "2018",
        "harga"                    => "100.000.000"
    ],
    [
        "nama_kendaraan" => "motor beat Honda",
        "tahun_beli"            => "2022",
        "harga"                    => "800.000.000"
    ],
    [
        "nama_kendaraan" => "mobil avanza",
        "tahun_beli"            => "2019",
        "harga"                    => "1100.000.000"
    ],
    [
        "nama_kendaraan" => "mobil truk",
        "tahun_beli"            => "2023",
        "harga"                    => "1200.000.000"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table>
        <tr>
                <th> No</th>
                <th> Nama kendaraan</th>
                <th> Tahun Belih</th>
                <th> Harga</th>
        </tr>
        <?php
            $no = 0; foreach($data_kendaraan as $dk);

        ?>

<tr>
    <td><?= ++$no ?> </td>
    <td><?=$dk['nama_kendaraan']?></td>
    <td><?=$dk['tahun_beli']?></td>
    <td><?=$dk['harga']?></td>
</tr>

     </table>
</body>
</html>