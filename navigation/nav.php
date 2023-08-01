<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="./"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SSM Support</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/examples.css">
    <link rel="stylesheet" href="css/examples.css.map">
    <link rel="stylesheet" href="css/examples.min.css">
    <link rel="stylesheet" href="css/examples.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css.map">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- grid js -->

    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- grid js  -->
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">

<!-- calendar -->



<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


<link rel="stylesheet" href="calendar/fonts/icomoon/style.css">

<link href='calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
<link href='calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="calendar/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="calendar/css/style.css">

<!-- calendar -->



</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">

        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard
                </a></li>
            <li class="nav-title">Options</li>
            <li class="nav-item"><a class="nav-link" href="forms/Authorization_summary.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-book"></use>
                    </svg> Record Authorization</a></li>

            <li class="nav-title">Navigation</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-screen-desktop"></use>
                    </svg> Registers</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="forms/calls.php"><span class="nav-icon"></span>
                            Calls</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/email.php"><span class="nav-icon"></span>
                            Emails</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/error_register.php"><span
                                class="nav-icon"></span>
                            Errors</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/In-house.php"><span class="nav-icon"></span>
                            In-house</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/Onsite_register.php"><span
                                class="nav-icon"></span>
                            Onsite</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/References.php"><span class="nav-icon"></span>
                            References</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Requirements.php"><span
                                class="nav-icon"></span>
                            Requirements</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/skype.php"><span class="nav-icon"></span>
                            Skype</a></li>

                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pen-nib"></use>
                    </svg> Billings</a>
                <ul class="nav-group-items">

                    <li class="nav-item"><a class="nav-link" href="forms/invoices.php"><span class="nav-icon"></span>
                            Invoices</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/receipts.php"><span class="nav-icon"></span>
                            Receipts</a></li>

                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Masters</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="forms/customers.php"> Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Users.php"> Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/location.php"> Locations</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Products.php"> Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/versions.php">Versions</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Out_station.php"> Out Station Employees</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/Dealers.php"> Dealers</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Categories.php"> Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/support.php"> Support Units</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Non-working_days.php"> Non Working Days</a>
                    </li>
                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg> Reports</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="forms/stats&reports.php"><span
                                class="nav-icon"></span>
                            Stats & Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/error_report.php"><span
                                class="nav-icon"></span>
                            Error Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/requirement_report.php"><span
                                class="nav-icon"></span>
                            Onsite Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Onsite.php"><span class="nav-icon"></span>
                            Chart View</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/Attedence.php"><span class="nav-icon"></span>
                            Attendence</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/dailyreport.php"><span class="nav-icon"></span>
                            Daily Reports</a></li>
                </ul>
            </li>
            <li class="nav-divider"></li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column bg-light">
        <header class="header header-sticky ">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button>

                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Profile</div>
                            </div>


                            <a class="dropdown-item" href="forms/Profile.php">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Edir profile</a>


                            <a class="dropdown-item" href="#">
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="./logout.php">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                    </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">

                </div>
                <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
                <script src="vendors/simplebar/js/simplebar.min.js"></script>
                <!-- Plugins and scripts required by this view-->
                <script src="vendors/chart.js/js/chart.min.js"></script>
                <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
                <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
                <script src="js/main.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
                    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
                    crossorigin="anonymous"></script>

                <script>
                    document.getElementById('toggleButton').addEventListener('click', function () {
                        var collapseExample = document.getElementById('collapseExample');
                        if (collapseExample.classList.contains('show')) {
                            collapseExample.classList.remove('show');
                        } else {
                            collapseExample.classList.add('hide');


                        }
                    });
                </script>
</body>

</html>