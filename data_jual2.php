<?php
require('koneksi2.php'); // Pastikan koneksi ke database sudah benar

// Query untuk mendapatkan total pendapatan per produk
$sql2 = "SELECT dp.ProductName, 
       SUM(fs.QuantitySold) AS total_pendapatan
FROM factsales fs
JOIN dimproduct dp ON fs.ProductID = dp.ProductID
GROUP BY dp.ProductName
ORDER BY total_pendapatan DESC;";

$result2 = mysqli_query($conn, $sql2);

$pendapatan_produk = array();

// Jika query berhasil, proses data
if ($result2) {
    while ($row = mysqli_fetch_array($result2)) {
        array_push($pendapatan_produk, array(
            "total_pendapatan" => $row['total_pendapatan'],
            "product" => $row['ProductName']
        ));
    }
} else {
    echo "Error in query: " . mysqli_error($conn);
    exit;
}

// Encode data sebagai JSON untuk digunakan di chart
$data2 = json_encode($pendapatan_produk);
?>
