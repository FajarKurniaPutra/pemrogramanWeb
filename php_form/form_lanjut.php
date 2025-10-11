<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        
        <label>Pilih Warna favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        
        <label>Pilih Jenis kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $selectedBuah = $_POST['buah'];
        
        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }
        
        $selectedJeniskelamin = $_POST['jenis_kelamin'];
        
        echo "<h3>Hasil Form:</h3>";
        echo "Anda memilih buah: " . $selectedBuah . "<br>";
        
        if (!empty($selectedWarna)) {
            echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }
        
        echo "Jenis kelamin Anda: " . $selectedJeniskelamin;
    }
    ?>
</body>
</html>