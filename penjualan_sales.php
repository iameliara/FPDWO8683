<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Vendor</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styleGraph.css">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            padding: 30px;
            max-width: 2000px;
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

        .highcharts-description {
            font-size: 1rem;
            color: #666;
            text-align: center;
            margin-top: 50px;
            padding: 0 15px;
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

<?php 
// Mengambil data vendor dari PHP
include 'data_jual2.php';

$data3 = json_decode($data2, TRUE);

?>

<!-- Page Wrapper -->
<div id="wrapper">

    <?php include "sidebar.php";?>
   
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="container">
                <h1 class="chart-title">Pendapatan Product Terbanyak</h1>
                <div id="barchart" style="width: 100%; height: 500px;"></div>
                <p class="highcharts-description">
                    Grafik ini menampilkan produk dengan pendapatan terbanyak berdasarkan data yang tersedia.
                </p>
            </div>
           
        </div>

    </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script type="text/javascript">
    const data3 = <?= json_encode($data3); ?>;

    if (data3.length === 0) {
        console.error("Tidak ada data untuk grafik.");
    } else {
        const categories = data3.map(item => item.product); 
        const seriesData = data3.map(item => parseFloat(item.total_pendapatan));

        Highcharts.chart('barchart', {
            chart: {
                type: 'column',
                backgroundColor: '#f9f9f9',
            },
            title: {
                text: 'Pendapatan Produk',
                style: {
                    fontSize: '16px',
                    color: '#333',
                    fontWeight: 'bold'
                },
            },
            xAxis: {
                categories: categories,
                title: {
                    text: 'Produk',
                    style: { color: '#555' }
                }
            },
            yAxis: {
                title: {
                    text: 'Total Pendapatan (IDR)',
                    style: { color: '#555' }
                }
            },
            series: [{
                name: 'Pendapatan',
                data: seriesData,
                color: '#00aaff'
            }],
            tooltip: {
                shared: true,
                valuePrefix: 'IDR '
            },
            credits: {
                enabled: false
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 600
                    },
                    chartOptions: {
                        legend: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    }
</script>

<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>

</body>

</html>
