<?php 
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png");

    $totalFile = count($_FILES['file']['name']); 
    for ($i = 0; $i < $totalFile; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG,  atau PNG.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File  $file_name berhasil diunggah.<br>";
    } else {
        echo implode("", $errors);
    }
} 
}
?>