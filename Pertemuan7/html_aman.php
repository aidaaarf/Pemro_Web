<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>

    <?php
    $input = $email = "";
    $inputErr = $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');   
    }else{
        $inputErr = "Input tidak boleh kosong";
    }
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
        } else {
            $emailErr = "Format email tidak valid";
        }
    } else {
        $emailErr = "Email tidak boleh kosong";
    }
    
    if (empty($inputErr) && empty($emailErr)) {
            echo "<p>Data yang dimasukkan: " . $input . "</p>";
            echo "<p>Email yang dimasukkan: " . $email . "</p>";
        }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="input">Masukkan Data:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>

        <label for="email">Masukkan Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
