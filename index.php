<?php
    require_once("services/database.php");
    define("APP_NAME", "CUYRESTO - WEBSITE PENERIMAAN TAMU");

    $select_meja_query = "SELECT * FROM meja";
    $select_meja = $db->query($select_meja_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= APP_NAME ?> </title>
</head>
<body>
    <h1>DAFTAR MEJA</h1>

    <?php 
        foreach ($select_meja as $meja) {  
    ?>

    <p><?= $meja['tipe_meja'] . " " .  $meja['no_meja']; ?></p>

    <?php } ?>
</body>
</html>