<?php
require('koneksi2.php');

// Query untuk mendapatkan data
$sql = "SELECT 
    DimTime.tahun AS Tahun,
    SUM(fs.QuantitySold) AS JumlahProduk
FROM factsales fs
JOIN DimTime ON fs.TimeID = DimTime.TimeID
GROUP BY DimTime.tahun
ORDER BY DimTime.tahun";

$result = mysqli_query($conn, $sql);

// Array untuk menyimpan data
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        "Tahun" => $row['Tahun'],
        "JumlahProduk" => (int)$row['JumlahProduk']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Purchase Order</title>

    <!-- Custom fonts and styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleGraph.css">

    <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .chart-title {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }
        footer {
            background-color: #f8f9fc;
            padding: 15px 0;
            font-size: 0.875rem;
        }
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #00aaff;
            color: white;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            z-index: 1000;
        }
        .scroll-to-top:hover {
            background-color: #007bb5;
        }
    </style>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include "sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="container">
                <h1 class="chart-title">Jumlah Produk per Tahun</h1>
                <div id="barchart" style="width: 100%; height: 500px;"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Grafik ini menampilkan jumlah produk terjual per tahun berdasarkan data yang tersedia.</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Highcharts Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Data dari PHP
    const data = <?php echo json_encode($data); ?>;

    // Proses Data
    const years = data.map(item => item.Tahun);
    const productCounts = data.map(item => item.JumlahProduk);

    // Render Highcharts
    Highcharts.chart('barchart', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Jumlah Produk per Tahun'
        },
        xAxis: {
            categories: years,
            title: {
                text: 'Tahun'
            }
        },
        yAxis: {
            title: {
                text: 'Jumlah Produk'
            }
        },
        series: [{
            name: 'Produk',
            data: productCounts,
            color: '#00aaff'
        }]
    });
});
</script>

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>

</body>
</html>