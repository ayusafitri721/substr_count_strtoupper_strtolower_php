<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kalimat = $_POST["kalimat"];

  
    $jumlah_kalimat = substr_count(haystack: $kalimat, '.') + substr_count($kalimat, '!') + substr_count($kalimat, '?');
    $kalimat_upper = strtoupper($kalimat);
    $kalimat_lower = strtolower($kalimat);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style>
        body {
            background-color: #3B6BA5;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            width: 500px;
            margin: 100px auto;
            background-color: #2D5A91;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2, p {
            margin-bottom: 20px;
            font-size: 20px;
            line-height: 1.5;
        }
        p span {
            color: #FFD700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil:</h2>
        <p>1. <span>Jumlah Kalimat:</span> <?php echo $jumlah_kalimat; ?></p>
        <p>2. <span>Hasil Uppercase:</span> <?php echo $kalimat_upper; ?></p>
        <p>3. <span>Hasil Lowercase:</span> <?php echo $kalimat_lower; ?></p>
    </div>
</body>
</html>
