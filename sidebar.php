<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard TransTrack</title>

    <!-- Custom fonts and styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
        }

        .sidebar {
            background: linear-gradient(180deg, rgb(93, 158, 227) 0%, #0056b3 100%);
            color: #fff;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #fff;
            font-weight: 900;
        }

        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border-radius: 70px;
        }

        .sidebar .sidebar-brand {
            font-size: 1.5rem;
            font-weight: 900;
            text-transform: uppercase;
            margin: 0;
            color: #fff;
        }

        .sidebar .sidebar-heading {
            font-size: 0.9rem;
            text-transform: uppercase;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 0.5rem;
        }

        .container-fluid {
            background-color: #fff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background: #ffffff;
            padding: 0.5rem 0;
            text-align: right;
            font-size: 0.9rem;
            color: #6c757d;
            bottom: 0;
            width: 100%;
            left: 0;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .scroll-to-top {
            background-color: #007bff;
        }

        .scroll-to-top:hover {
            background-color: #0056b3;
        }

        .sidebar .dropdown-menu {
            position: static !important;
            background: transparent;
            border: none;
            margin: 0;
            padding-left: 2rem;
            transform: none !important;
        }

        .sidebar .dropdown-menu.show {
            display: block;
        }

        .sidebar .dropdown-menu .dropdown-item {
            color: #fff;
            padding: 0.5rem 1rem;
        }

        .sidebar .dropdown-menu .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-item.dropdown .dropdown-menu {
            display: none;
        }

        .sidebar .nav-item.dropdown.show .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper" class="d-flex">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar">
            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">TransTrack</div>
            </a>
            <hr class="sidebar-divider">

            <!-- Heading: Grafik Data -->
            <div class="sidebar-heading">GRAPHIC DATA</div>

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-desktop"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Dropdown: Penjualan Terbanyak -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="penjualanDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Most Selling</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="penjualanDropdown">
                    <li><a class="dropdown-item" href="penjualan_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="penjualan_sales.php" target="_blank">Data Sales</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown: Vendor Tiap Tahun -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="vendorDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="far fa-clock"></i>
                    <span>Vendors by Year</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="vendorDropdown">
                    <li><a class="dropdown-item" href="vendor_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="vendor_sales.php" target="_blank">Data Sales</a></li>
                </ul>
            </li>

            <!-- Dropdown: Cost Rate Tertinggi -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="costRateDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-money-bill"></i>
                    <span>Highest Cost Rate</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="costRateDropdown">
                    <li><a class="dropdown-item" href="costrate_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="costrate_sales.php" target="_blank">Data Sales</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown: Pesanan Berdasarkan Tanggal -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pesananDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-tasks"></i>
                    <span>Order</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="pesananDropdown">
                    <li><a class="dropdown-item" href="pesanan_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="pesanan_sales.php" target="_blank">Data Sales</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown: Total Order Pada Tahun -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="totalOrderDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>Total Orders</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="totalOrderDropdown">
                    <li><a class="dropdown-item" href="totalorder_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="totalorder_sales.php" target="_blank">Data Sales</a>
                    </li>
                </ul>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading: OLAP -->
            <div class="sidebar-heading">OLAP</div>

            <!-- Dropdown: Mondrian -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="mondrianDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-database"></i>
                    <span>Mondrian</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="mondrianDropdown">
                    <li><a class="dropdown-item" href="mondrian_purchase.php" target="_blank">Data Purchase Order</a></li>
                    <li><a class="dropdown-item" href="mondrian_sales.php" target="_blank">Data Sales</a>
                    </li>
                </ul>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdowns = document.querySelectorAll('.nav-item.dropdown');

            dropdowns.forEach(dropdown => {
                const toggle = dropdown.querySelector('.nav-link');
                const menu = dropdown.querySelector('.dropdown-menu');

                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Close other dropdowns
                    dropdowns.forEach(other => {
                        if (other !== dropdown) {
                            other.classList.remove('show');
                            other.querySelector('.dropdown-menu').classList.remove('show');
                        }
                    });

                    // Toggle current dropdown
                    dropdown.classList.toggle('show');
                    menu.classList.toggle('show');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.nav-item.dropdown')) {
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('show');
                        dropdown.querySelector('.dropdown-menu').classList.remove('show');
                    });
                }
            });

            // Prevent dropdown items from closing parent when clicked
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            });
        });
    </script>
</body>

</html>