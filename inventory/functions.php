<?php
try {
    $conn = new PDO("sqlsrv:server=LAPTOP-PPR3590F\SQLEXPRESS;database=InventoryAida");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}


function query($query, $params = [])
{
    global $conn;
    $stmt = $conn->prepare($query);
    $stmt->execute($params);  
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function tambahBarang($data)
{
	global $conn;

	$nama_baju = htmlspecialchars($data['nama_baju']);
	$size = htmlspecialchars($data['size']);
	$warna = htmlspecialchars($data['warna']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO baju (nama_baju, size, warna, jumlah, harga) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($query);
	$stmt->execute([$nama_baju, $size, $warna, $jumlah, $harga]);

	return $stmt;
}

function editBarang($data)
{
	global $conn;
	$id = $data["id"];
	$nama_baju = htmlspecialchars($data["nama_baju"]);
	$size = htmlspecialchars($data["size"]);
	$warna = htmlspecialchars($data["warna"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "UPDATE baju SET nama_baju = ?, size = ?, warna = ?, jumlah = ?, harga = ? WHERE id = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute([$nama_baju, $size, $warna, $jumlah, $harga, $id]);

	return $stmt;
}

function deleteBarang($id)
{
	global $conn;
	$query = "DELETE FROM baju WHERE id = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute([$id]);

	return $stmt;
}


function registrasi($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $confirm_password = $data["password2"];

    $query = "SELECT username FROM [user] WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);

    if ($stmt->fetch()) {
        echo "<script>
            alert('username sudah terdaftar');
        </script>";
        return false;
    }

    if ($password !== $confirm_password) {
        echo "
        <script>
            alert('konfirmasi password salah');
        </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO [user] (nama, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$nama, $email, $username, $password]);

    return $stmt->rowCount();
}


function search($keyword)
{
	$query = "SELECT * FROM baju WHERE nama_baju LIKE ? 
    OR warna LIKE ? OR harga LIKE ? OR size LIKE ?";
	$keyword = "%$keyword%";
	return query($query, [$keyword, $keyword, $keyword, $keyword]);
}
