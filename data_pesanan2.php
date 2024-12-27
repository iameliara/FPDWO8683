<?php
require('koneksi2.php'); // Pastikan koneksi ke database sudah benar

// Query untuk mendapatkan daftar tanggal pesanan per produk
$sql1 = "SELECT dv.ProductName, 
       fp.TanggalLkp AS Waktu_Penjualan
FROM dimtime fp
JOIN factsales fs ON fp.TimeID = fs.TimeID  -- Join with fact table
JOIN dimproduct dv ON fs.ProductID = dv.ProductID  -- Join with product dimension
ORDER BY dv.ProductName, fp.TanggalLkp;";

$result1 = mysqli_query($conn, $sql1);

$pesanan = array();

// Jika query berhasil, proses data
if ($result1) {
    while ($row = mysqli_fetch_assoc($result1)) {
        array_push($pesanan, array(
            "Waktu_Penjualan" => $row['Waktu_Penjualan'],
            "ProductName" => $row['ProductName']
        ));
    }
} else {
    echo "Error in query: " . mysqli_error($conn);
    exit;
}

// Encode data sebagai JSON untuk digunakan di chart
$data3 = json_encode($pesanan);
?>