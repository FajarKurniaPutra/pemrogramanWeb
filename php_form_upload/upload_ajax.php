<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $maxFileSize = 2 * 1024 * 1024; 
    
    foreach ($_FILES['files']['name'] as $key => $fileName) {
        $fileSize = $_FILES['files']['size'][$key];
        $fileTmp = $_FILES['files']['tmp_name'][$key];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        if (!in_array($fileExt, $allowedExtensions)) {
            $errors[] = "File $fileName: Ekstensi tidak diizinkan (Hanya JPG, JPEG, PNG, GIF)";
            continue;
        }
        
        if ($fileSize > $maxFileSize) {
            $errors[] = "File $fileName: Ukuran melebihi 2MB";
            continue;
        }
        
        if (!getimagesize($fileTmp)) {
            $errors[] = "File $fileName: Bukan gambar yang valid";
            continue;
        }
        
        if (move_uploaded_file($fileTmp, "images/" . $fileName)) {
            echo "Gambar $fileName berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah $fileName";
        }
    }
    
    if (!empty($errors)) {
        echo "Error:<br>" . implode('<br>', $errors);
    }
}
?>