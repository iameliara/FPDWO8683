<?php
require('koneksi2.php');

// Query to get order dates per product
$sql = "SELECT 
    dv.ProductName, 
    fp.TanggalLkp AS Waktu_Penjualan,
    COUNT(*) as JumlahPesanan
FROM dimtime fp
JOIN factsales fs ON fp.TimeID = fs.TimeID
JOIN dimproduct dv ON fs.ProductID = dv.ProductID
GROUP BY dv.ProductName, fp.TanggalLkp
ORDER BY dv.ProductName, fp.TanggalLkp;";

$result = mysqli_query($conn, $sql);

$pesanan = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pesanan[] = array(
            "tanggal" => $row['Waktu_Penjualan'],
            "produk" => $row['ProductName'],
            "jumlah" => (int)$row['JumlahPesanan']
        );
    }
} else {
    echo "Error in query: " . mysqli_error($conn);
    exit;
}

// Encode data as JSON
$jsonData = json_encode($pesanan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Produk</title>
    
    <!-- Custom fonts and styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">
    
    <style>
        .container {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }
        .chart-container {
            min-height: 500px;
            margin-top: 20px;
        }
        .chart-title {
            text-align: center;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "sidebar.php"; ?>
        
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container">
                    <div class="chart-title">Trend Penjualan Produk per Waktu</div>
                    <div id="productChart" class="chart-container"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    <script>
        // Parse the PHP data
        const rawData = <?php echo $jsonData; ?>;
        
        // Process data for Highcharts
        const processedData = rawData.reduce((acc, curr) => {
            if (!acc[curr.produk]) {
                acc[curr.produk] = [];
            }
            acc[curr.produk].push([
                new Date(curr.tanggal).getTime(),
                curr.jumlah
            ]);
            return acc;
        }, {});

        // Convert to series format
        const series = Object.keys(processedData).map(product => ({
            name: product,
            data: processedData[product].sort((a, b) => a[0] - b[0])
        }));

        // Create the chart
        Highcharts.chart('productChart', {
            chart: {
                type: 'line',
                style: {
                    fontFamily: 'Nunito, sans-serif'
                }
            },
            title: {
                text: null
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Tanggal'
                }
            },
            yAxis: {
                title: {
                    text: 'Jumlah Pesanan'
                },
                min: 0
            },
            plotOptions: {
                line: {
                    marker: {
                        enabled: true,
                        radius: 4
                    },
                    lineWidth: 2
                }
            },
            tooltip: {
                formatter: function() {
                    return `<b>${this.series.name}</b><br/>
                    Tanggal: ${Highcharts.dateFormat('%e %b %Y', this.x)}<br/>
                    Jumlah: ${this.y} pesanan`;
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: series,
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</body>
</html>