<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dashboard Penjualan">
    <meta name="author" content="">

    <title>Dashboard Penjualan</title>

    <!-- Custom fonts and styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleGraph.css">

    <!-- Highcharts library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php include "sidebar.php";?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" class="text-center my-4">
                <div id="container" class="grafik"></div>
                <p class="highcharts-description mt-3">
                    Berikut adalah grafik total order per tahun berdasarkan data dari database.
                </p>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Highcharts Script -->
    <!-- QUERY YANG DI INPUTKAN 
    SELECT 
    YEAR(t.tahun) as OrderYear,
    SUM(f.QuantitySold) as TotalQuantity,
    ROUND(SUM(f.SalesAmount), 2) as TotalSales
    FROM factsales f
    JOIN dimtime t ON f.TimeID = t.TimeID
    WHERE YEAR(t.tahun) BETWEEN 2011 AND 2014
    GROUP BY YEAR(t.tahun)
    ORDER BY OrderYear; -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            // Data yang benar sesuai query
            const totalOrders = [
                { OrderYear: "2011", TotalQuantity: 6481, TotalSales: 4837207.36 },
                { OrderYear: "2012", TotalQuantity: 30963, TotalSales: 12743417.59 },
                { OrderYear: "2013", TotalQuantity: 48197, TotalSales: 15266328.87 },
                { OrderYear: "2014", TotalQuantity: 16351, TotalSales: 5683058.77 }
            ];

            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Total Order Per Tahun'
                },
                subtitle: {
                    text: 'Source: Database Penjualan'
                },
                xAxis: {
                    type: 'category',
                    title: {
                        text: 'Tahun'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Total Order'
                    }
                },
                tooltip: {
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
                },
                series: [{
                    name: 'Total Order Quantity',
                    colorByPoint: true,
                    data: totalOrders.map(order => ({
                        name: order.OrderYear,
                        y: order.TotalQuantity
                    }))
                }],
                credits: {
                    enabled: false
                }
            });
        });
    </script>

    <!-- Bootstrap and Core Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>
</body>
</html>