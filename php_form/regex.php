<!DOCTYPE html>
<html>
<head>
    <title>Regex PHP</title>
</head>
<body>
    <h2>Eksperimen Regular Expression</h2>

    <?php
    echo "<h3>5.1 - Mencari Huruf Kecil</h3>";
    $pattern = '/[a-z]/'; 
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    echo "<h3>5.2 - Mencari Angka</h3>";
    $pattern = '/[0-9]+/'; 
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<h3>5.3 - Replace Text</h3>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo "Hasil: " . $new_text;

    echo "<h3>5.4 - Quantifier *</h3>";
    $pattern = '/go*d/'; 
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<h3>5.5 - Quantifier ?</h3>";
    $pattern = '/go?d/'; 
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<h3>5.6 - Quantifier {n,m}</h3>";
    $pattern = '/go{1,2}d/'; 
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    ?>
</body>
</html>