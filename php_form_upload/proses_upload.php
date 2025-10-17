<?php
$targetDirectory = "images/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 2 * 1024 * 1024; 
    
    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;
        
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "File $fileName ditolak. Hanya format JPG, JPEG, PNG, GIF yang diizinkan.<br>";
            continue;
        }
        
        if ($fileSize > $maxFileSize) {
            echo "File $fileName terlalu besar. Maksimal 2MB.<br>";
            continue;
        }
        
        $checkImage = getimagesize($_FILES['files']['tmp_name'][$i]);
        if ($checkImage === false) {
            echo "File $fileName bukan gambar yang valid.<br>";
            continue;
        }
        
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "Gambar $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah gambar $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>