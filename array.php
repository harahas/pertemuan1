<?php 
$bio = [
    [
    'nama' => "Hamni Rahma",
    'NIM' => 2203010607,
    'Alamat' => "Ciamis"
    ],
    [
        'nama' => "Gian Sonia",
        'NIM' => 2203010228,
        'Alamat' => "Ciamis"
    ],
    [
        'nama' => "Dini Rakhmawati",
        'NIM' => 2203010309,
        'Alamat' => "Ciamis"
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
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <td>Nama</td>
                <td>NIM</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bio as $row): ?>
            <tr>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["NIM"]; ?></td>
                <td><?= $row["Alamat"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>