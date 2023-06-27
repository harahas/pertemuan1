<?php
$pertama = 1;
$kedua = 1;
$select = "Ketiga";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="select" id="select">
    <option value="">Pilih Angka</option>
    <option value="Pertama"<?=($select == "Pertama" ? 'selected' : '' ) ?>>Pertama</option>
    <option value="Kedua" <?= ($select == "Kedua" ? 'selected' : '' ) ?>>Kedua</option>
    <option value="Ketiga"<?=($select == "KEtiga" ? 'selected' : '' ) ?>>Ketiga</option>
</body>
</html>


</html>
