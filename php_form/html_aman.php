<!DOCTYPE html>
<html>
<head>
    <title>Keamanan Input PHP</title>
</head>
<body>
    <h2>Form Input dengan Keamanan</h2>
    
    <?php
    $input = "";
    $email = "";
    $email_error = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        }
        
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            } else {
                $email_error = "Format email tidak valid!";
            }
        }
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input Teks:</label><br>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $email_error; ?></span><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Hasil Input yang Sudah Diamankan:</h3>";
        echo "Input Teks: " . $input . "<br>";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: " . $email;
        }
    }
    ?>
</body>
</html>