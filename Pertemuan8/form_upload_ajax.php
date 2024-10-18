<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</head>
<body>
    <h2>Upload File</h2>
    <form id="upload-form" method="POST" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple="multiple" accept=".jpg, .jpeg, .png">
    <input type="submit" value="Upload">
</form>
    </form>
    <div id="status"></div> 
</body>
</html>