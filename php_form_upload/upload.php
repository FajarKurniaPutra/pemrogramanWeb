<?php
    if(isset($_POST["submit"])){
        $targetdir = "uploads/"; 
        $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

        // $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        // $maxsize = 5*1024*1024;
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxsize = 3*1024*1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] < $maxsize)
        {
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
                echo "File berhasil diunggah.<br>";
                
                // echo "<h3>Thumbnail Gambar:</h3>";
                // list($width, $height) = getimagesize($targetfile);
                // $newWidth = 200;
                // $newHeight = ($height / $width) * $newWidth;
                
                // echo "<img src='$targetfile' width='$newWidth' height='$newHeight' alt='Thumbnail'>";
                // echo "<br><small>Original Size: {$width}x{$height} | Thumbnail Size: {$newWidth}x{$newHeight}</small>";
            }
            else{
                echo "Gagal mengunggah file.";
            }
        }
        else{
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }
    }
?>