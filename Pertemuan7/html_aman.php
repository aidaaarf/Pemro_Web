<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>

    <?php
    $input = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 
        
        
        echo "<p>Data yang dimasukkan: " . $input . "</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="input">Masukkan Data:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
