<?php

include 'koneksi2.php';

$locations = [];
$query = "SELECT TerritoryID, TerritoryName, CountryRegionCode 
          FROM dimsalesterritory 
          ORDER BY CountryRegionCode DESC 
          LIMIT 10";

if ($result = mysqli_query($conn, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $locations[] = [
            'TerritoryID' => $row['TerritoryID'],
            'TerritoryName' => $row['TerritoryName'],
            'CountryRegionCode' => floatval($row['CountryRegionCode'])
        ];
    }
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Lokasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <style>
        .card {
            margin-top: 20px;
            margin-right: 500px;
        }
        #barchart {
            min-height: 600px;
            min-width: 500px;
            margin: 10 auto;
        }
        .card-header {
            background-color: #4e73df;
            color: white;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "sidebar.php"; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Lokasi dengan Cost Rate Tertinggi</h6>
                        </div>
                        <div class="card-body">
                            <div id="barchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const locationData = <?php echo json_encode($locations); ?>;
            
            // Sort data by Cost Rate descending
            const chartData = locationData
                .sort((a, b) => b.CountryRegionCode - a.CountryRegionCode)
                .map(location => ({
                    name: location.TerritoryName,
                    y: location.CountryRegionCode
                }));

            Highcharts.chart('barchart', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Cost Rate by Territory',
                    style: {
                        fontSize: '20px',
                        fontWeight: 'bold'
                    }
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Nunito'
                        }
                    }
                },
                yAxis: {
                    title: {
                        text: 'Cost Rate (%)',
                        style: {
                            fontSize: '14px'
                        }
                    },
                    labels: {
                        format: '{value}%'
                    }
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true,
                            format: '{y:.1f}%',
                            style: {
                                fontSize: '12px'
                            }
                        },
                        colorByPoint: true
                    }
                },
                series: [{
                    name: 'Cost Rate',
                    data: chartData
                }],
                colors: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', 
                        '#858796', '#5a5c69', '#2e59d9', '#17a673', '#2c9faf'],
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '<b>{point.y:.1f}%</b>'
                }
            });
        });
    </script>
</body>
</html>