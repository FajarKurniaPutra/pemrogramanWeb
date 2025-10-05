<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Dosen (Tabel)</title>
    <style>
        table {
            width: 50%; 
            border-collapse: collapse; 
            margin: 20px 0; 
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }

        th {
            background-color: #f2f2f2; 
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "<h2>Data Dosen</h2>";
        echo "<table>";
        echo "<thead><tr><th>Keterangan</th><th>Nilai</th></tr></thead>";
        echo "<tbody>";

        echo "<tr><td>Nama</td><td>" . $Dosen['nama'] . "</td></tr>";

        echo "<tr><td>Domisili</td><td>" . $Dosen['domisili'] . "</td></tr>";

        echo "<tr><td>Jenis Kelamin</td><td>" . $Dosen['jenis_kelamin'] . "</td></tr>";

        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>