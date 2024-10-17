<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; 

    if (!is_dir($targetdir)) {
        mkdir($targetdir, 0777, true); 
    }

    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

    if ($_FILES["myfile"]["error"] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Error: " . $_FILES["myfile"]["error"];
    }
}
?>
