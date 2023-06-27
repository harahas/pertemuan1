<?php 
$data = [
    [
    'Nama' => "Hamni",
    'JK' => "P",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 2000,
    'Tempat_Lahir' => "Ciamis",
    'Pekerjaan_Ortu' => "Wiraswasta"
    ],
    [
    'Nama' => "Dini",
    'JK' => "P",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 2001,
    'Tempat_Lahir' => "Ciamis",
    'Pekerjaan_Ortu' => "Pedagang"
    ],
    [
    'Nama' => "Ami",
    'JK' => "P",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 2000,
    'Tempat_Lahir' => "Sumut",
    'Pekerjaan_Ortu' => "PNS"
    ],
    [
    'Nama' => "Harahas",
    'JK' => "P",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 2002,
    'Tempat_Lahir' => "Tasik",
    'Pekerjaan_Ortu' => "Guru Honorer"
    ],
    [
    'Nama' => "Rahma",
    'JK' => "P",
    'Alamat' => "Bandung",
    'Tahun_Lahir' => 2001,
    'Tempat_Lahir' => "Jakarta",
    'Pekerjaan_Ortu' => "Wiraswasta"
    ],
    [
    'Nama' => "Hasibuan",
    'JK' => "L",
    'Alamat' => "Sulsesl",
    'Tahun_Lahir' => 1990,
    'Tempat_Lahir' => "Bali",
    'Pekerjaan_Ortu' => "Wiraswasta"
    ],
    [
    'Nama' => "Iwan",
    'JK' => "L",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 1967,
    'Tempat_Lahir' => "Ciamis",
    'Pekerjaan_Ortu' => "Wiraswasta"
    ],
    [
    'Nama' => "Gunawan",
    'JK' => "L",
    'Alamat' => "Tasikmalaya",
    'Tahun_Lahir' => 2000,
    'Tempat_Lahir' => "Ciamis",
    'Pekerjaan_Ortu' => "Buruh"
    ],
    [
    'Nama' => "Siti",
    'JK' => "P",
    'Alamat' => "Palopo",
    'Tahun_Lahir' => 1960,
    'Tempat_Lahir' => "Pare-pare",
    'Pekerjaan_Ortu' => "Ibu Rumah Tangga"
    ],
    [
    'Nama' => "Miami",
    'JK' => "P",
    'Alamat' => "Ciamis",
    'Tahun_Lahir' => 2010,
    'Tempat_Lahir' => "Tasik",
    'Pekerjaan_Ortu' => "Penyanyi"
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
    <h1>TABEL DATA PENDUDUK</h1>
    <table border="1" cellspacing="0" cellpadding="2">
    <thead>
        <tr>
            <td align=center>Nama</td>
            <td align=center>JK</td>
            <td align=center>Alamat</td>
            <td align=center>Tahun_Lahir</td>
            <td align=center>Tempat_Lahir</td>
            <td align=center>Pekerjaan_Ortu</td>
         </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
    <tr>
        <td align=center><?= $row["Nama"]; ?></td>
        <td align=center><?= $row["JK"]; ?></td>
        <td align=center><?= $row["Alamat"]; ?></td>
        <td align=center><?= $row["Tahun_Lahir"]; ?></td>
        <td align=center><?= $row["Tempat_Lahir"]; ?></td>
        <td align=center><?= $row["Pekerjaan_Ortu"]; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>