<?php
// File: index.php

// Start session to maintain user state
session_start();

// Database connection
$host = 'localhost';
$user = 'root';
$password = ''; // Adjust as necessary
$db = 'toko_kue';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Helper functions
function getProducts($conn) {
    $sql = "SELECT * FROM produk";
    $result = $conn->query($sql);
    return $result;
}

function addProduct($conn, $name, $price, $stock) {
    $stmt = $conn->prepare("INSERT INTO produk (nama, harga, stok) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $name, $price, $stock);
    return $stmt->execute();
}

function updateProduct($conn, $id, $name, $price, $stock) {
    $stmt = $conn->prepare("UPDATE produk SET nama = ?, harga = ?, stok = ? WHERE id = ?");
    $stmt->bind_param("sdii", $name, $price, $stock, $id);
    return $stmt->execute();
}

function deleteProduct($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM produk WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

function processPayment($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['harga'] * $item['jumlah'];
    }
    return $total;
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        addProduct($conn, $_POST['nama'], $_POST['harga'], $_POST['stok']);
    } elseif (isset($_POST['update'])) {
        updateProduct($conn, $_POST['id'], $_POST['nama'], $_POST['harga'], $_POST['stok']);
    } elseif (isset($_POST['delete'])) {
        deleteProduct($conn, $_POST['id']);
    } elseif (isset($_POST['checkout'])) {
        $_SESSION['total'] = processPayment($_SESSION['cart']);
        $_SESSION['cart'] = [];
    }
}

// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to cart
if (isset($_GET['add_to_cart'])) {
    $id = $_GET['add_to_cart'];
    $product = $conn->query("SELECT * FROM produk WHERE id = $id")->fetch_assoc();
    if ($product) {
        $_SESSION['cart'][] = $product;
    }
}

// Fetch products
$products = getProducts($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Toko Kue</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h1>Website Toko Kue</h1>

<h2>Tambah Produk</h2>
<form method="POST">
    <input type="text" name="nama" placeholder="Nama Produk" required>
    <input type="number" name="harga" placeholder="Harga" step="0.01" required>
    <input type="number" name="stok" placeholder="Stok" required>
    <button type="submit" name="add">Tambah</button>
</form>

<h2>Daftar Produk</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $products->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="text" name="nama" value="<?= $row['nama'] ?>">
                        <input type="number" name="harga" value="<?= $row['harga'] ?>" step="0.01">
                        <input type="number" name="stok" value="<?= $row['stok'] ?>">
                        <button type="submit" name="update">Edit</button>
                    </form>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="delete">Hapus</button>
                    </form>
                    <a href="?add_to_cart=<?= $row['id'] ?>">Tambah ke Keranjang</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<h2>Keranjang Belanja</h2>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['cart'] as $item) : ?>
            <tr>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['harga'] ?></td>
                <td>1</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form method="POST">
    <button type="submit" name="checkout">Bayar</button>
</form>

<?php if (isset($_SESSION['total'])) : ?>
    <h3>Total Pembayaran: <?= $_SESSION['total'] ?></h3>
<?php endif; ?>

</body>
</html>
