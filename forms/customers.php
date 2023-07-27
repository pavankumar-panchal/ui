<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
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
    <link rel="manifest" href="../assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="../vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="../css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/examples.css">
    <link rel="stylesheet" href="../css/examples.css.map">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css.map">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="../css/examples.css" rel="stylesheet">
    <link href="../vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">

</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">

            <!-- <img src="ssm-new-logo-removebg-preview.png" alt=""> -->
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
            <li class="nav-title">Options</li>
            <li class="nav-item"><a class="nav-link" href="Authorization_summary.php">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-book"></use>
                    </svg> Record Authorization</a></li>

            <li class="nav-title">Navigation</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-screen-desktop"></use>
                    </svg> Registers</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="calls.php"><span class="nav-icon"></span>
                            Calls</a></li>
                    <li class="nav-item"><a class="nav-link" href="email.php"><span class="nav-icon"></span>
                            Emails</a></li>
                    <li class="nav-item"><a class="nav-link" href="error_register.php"><span
                                class="nav-icon"></span>
                            Errors</a></li>
                    <li class="nav-item"><a class="nav-link" href="In-house.php"><span class="nav-icon"></span>
                            In-house</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Onsite_register.php"><span
                                class="nav-icon"></span>
                            Onsite</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="References.php"><span class="nav-icon"></span>
                            References</a></li>
                    <li class="nav-item"><a class="nav-link" href="Requirements.php"><span
                                class="nav-icon"></span>
                            Requirements</a></li>
                    <li class="nav-item"><a class="nav-link" href="skype.php"><span class="nav-icon"></span>
                            Skype</a></li>

                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-pen-nib"></use>
                    </svg> Billings</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="invoices.php"><span class="nav-icon"></span>
                            Invoices</a></li>
                    <li class="nav-item"><a class="nav-link" href="receipts.php"><span class="nav-icon"></span>
                            Receipts</a></li>

                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Masters</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="customers.php"> Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="Users.php"> Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php"> Locations</a></li>
                    <li class="nav-item"><a class="nav-link" href="Products.php"> Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="versions.php">Versions</a></li>
                    <li class="nav-item"><a class="nav-link" href="Out_station.php"> Out Station Employees</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Dealers.php"> Dealers</a></li>
                    <li class="nav-item"><a class="nav-link" href="Categories.php"> Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="support.php"> Support Units</a></li>
                    <li class="nav-item"><a class="nav-link" href="Non-working_days.php"> Non Working Days</a>
                    </li>
                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg> Reports</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="stats&reports.php"><span
                                class="nav-icon"></span>
                            Stats & Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="error_report.php"><span
                                class="nav-icon"></span>
                            Error Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="requirement_report.php"><span
                                class="nav-icon"></span>
                            Onsite Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="Onsite.php"><span class="nav-icon"></span>
                            Chart View</a></li>
                    <li class="nav-item"><a class="nav-link" href="chartview.php"><span class="nav-icon"></span>
                            Attendence</a></li>
                    <li class="nav-item"><a class="nav-link" href="dailyreport.php"><span class="nav-icon"></span>
                            Daily Reports</a></li>
                </ul>
            </li>
            <li class="nav-divider"></li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="../assets/img/avatars/8.jpg"
                                    alt="user@email.com">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Profile</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> View profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Edir profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                </svg> Change password<span class="badge badge-sm bg-secondary ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
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





                    <div class="container">
                        <div class="parent container d-flex flex-row p-4 rounded-2"  style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); ">
                            <div class="div1">
                                <!-- 1 -->

                                <div class="container mt-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header-line pl-2">Customer Selection</div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <form id="filterform" name="filterform" method="post" action=""
                                                onsubmit="return false;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input name="detailsearchtext" type="text"
                                                                class="form-control" id="detailsearchtext"
                                                                onkeyup="customersearch(event);" autocomplete="off"
                                                                isdatepicker="true" placeholder="search..">
                                                            <span style="display:none">
                                                                <input name="searchtextid" type="hidden"
                                                                    id="searchtextid" disabled="disabled">
                                                            </span>
                                                        </div>
                                                        <div id="detailloadcustomerlist" class="mt-2">
                                                            <select name="customerlist" size="5" class="form-control"
                                                                id="customerlist" style="width:100%; height:400px"
                                                                onclick="selectfromlist();"
                                                                onchange="selectfromlist();">
                                                                <!-- Add options dynamically here -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <strong>Total Count:</strong>
                                        </div>
                                        <div class="col-6" id="totalcount">
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                            <div class="div2">
                                <!-- 2 -->
                                <div class="container mt-4">
                                    <table class="table table-bordered productcontent">
                                        <tbody>
                                            <tr>
                                                <td><span style="display:none" id="short_url"></span>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2" valign="top" style="padding:0px">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light" width="20%">
                                                                                        Business
                                                                                        Name[Company]:</td>
                                                                                    <td class="bg-light" width="80%">
                                                                                        <input name="address"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="address" maxlength="200"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" valign="top" style="padding:0px">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light" width="20%">
                                                                                        Address:</td>
                                                                                    <td class="bg-light" width="80%">
                                                                                        <input name="address"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="address" maxlength="200"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="51%" valign="top"
                                                                    style="border-right:1px solid #d1dceb;">
                                                                    <div class=" table table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light">Place:</td>
                                                                                    <td class="bg-light">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">State:</td>
                                                                                    <td class="bg-light">
                                                                                        <select name="state"
                                                                                            class="form-control"
                                                                                            id="state">
                                                                                            <option value="">Select A
                                                                                                State</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">District:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">pin Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">STD Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Fax Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Type:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Category:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Remarks:</td>
                                                                                    <td class="bg-light">
                                                                                        <textarea name="remarks"
                                                                                            cols="27"
                                                                                            class="form-control"
                                                                                            id="remarks"></textarea>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Add other rows as needed -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td width="50%" class="">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td class="bg-light">Customer ID:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Last Password:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Current Dealer:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">GSTIN:</td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Add other rows as needed -->
                                                                                <tr>
                                                                                    <td class="bg-light">Company Closed:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Promotional
                                                                                        SMS:</td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Promotional
                                                                                        Email:</td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--  -->
                                                                                <div class="container mt">
                                                                                    <table
                                                                                        class="table table-bordered table-border-grid">
                                                                                        <tbody>
                                                                                            <tr class="table-primary">
                                                                                                <td width="22%"></td>
                                                                                                <td width="24%"
                                                                                                    align="center">
                                                                                                    <strong>Bill</strong>
                                                                                                </td>
                                                                                                <td width="25%"
                                                                                                    align="center">
                                                                                                    <strong>PIN</strong>
                                                                                                </td>
                                                                                                <td width="29%"
                                                                                                    align="center">
                                                                                                    <strong>Regn</strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>TDS</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>STO</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>SPP</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>GST</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>SAC</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <!-- Add the Bootstrap JavaScript and jQuery links -->

                                                                                <!--  -->



                                                                            </tbody>
                                                                        </table>
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-10">
                                                                                <div id="form-error"></div>
                                                                            </div>
                                                                            <div class="text-end">
                                                                                <input name="view" type="submit"
                                                                                    class="btn btn-primary" id="view"
                                                                                    value="Save"
                                                                                    onclick="formsubmit('view');"
                                                                                    fdprocessedid="mnaln6">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- 2 -->
                            </div>
                        </div>

                    </div>










                    <!--  -->

                    <div class="container mt-4 p-4 rounded-2"  style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); width: 98%;" >
                        <table class="table table-bordered">
                            <thead class="bg-light text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Cell</th>
                                    <th scope="col">Email Id</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="adddescriptionrows">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <select name="selectiontype1" class="form-select">
                                            <option value="" selected>--Select--</option>
                                            <option value="ithead/edp">IT-Head/EDP</option>
                                            <option value="general">General</option>
                                            <option value="gm/director">GM/Director</option>
                                            <option value="hrhead">HR Head</option>
                                            <option value="softwareuser">Software User</option>
                                            <option value="financehead">Finance Head</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input name="name1" type="text" class="form-control" maxlength="130"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="phone1" type="text" class="form-control" maxlength="100"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="cell1" type="text" class="form-control" maxlength="10"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="emailid1" type="text" class="form-control" maxlength="200"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <font color="#FF0000"><strong><a class="removerow"
                                                    style="cursor:pointer; text-decoration: none; color: red;"
                                                    onclick="row()">X</a></strong></font><input type="hidden"
                                            name="contactslno1" id="contactslno1">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end mt-2">

                            <a onclick="adddescriptionrows();" style="cursor:pointer" class="r-text">Add one More >></a>
                        </div>
                    </div>

                    <!-- Add the following script tag at the end of the body to include Bootstrap JS and custom JavaScript -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        let rowCounter = 1;

                        function adddescriptionrows() {
                            const tableBody = document.getElementById('adddescriptionrows');
                            const lastRow = tableBody.lastElementChild;
                            const newRow = lastRow.cloneNode(true);
                            rowCounter++;
                            newRow.querySelector('td:first-child').innerText = rowCounter;
                            const inputs = newRow.querySelectorAll('input');
                            const selectElement = newRow.querySelector('select');
                            selectElement.name = `selectiontype${rowCounter}`;
                            selectElement.id = `selectiontype${rowCounter}`;
                            inputs.forEach(input => {
                                const inputName = input.name;
                                input.name = inputName.replace(/\d+/, rowCounter);
                                input.value = '';
                            });
                            const removeLink = newRow.querySelector('.removerow');
                            removeLink.addEventListener('click', () => {
                                removedescriptionrows(newRow);
                            });
                            tableBody.appendChild(newRow);
                        }
                        function row() {
                            if (rowCounter == 1) {
                                alert("Can't delete this row");
                            }
                        }
                        function removedescriptionrows(rowToRemove) {
                            const tableBody = document.getElementById('adddescriptionrows');
                            tableBody.removeChild(rowToRemove);
                            rowCounter--;
                            const rows = tableBody.getElementsByTagName('tr');
                            for (let i = 0; i < rows.length; i++) {
                                rows[i].getElementsByTagName('td')[0].innerText = i + 1;
                                const inputs = rows[i].querySelectorAll('input');
                                const selectElement = rows[i].querySelector('select');
                                selectElement.name = `selectiontype${i + 1}`;
                                selectElement.id = `selectiontype${i + 1}`;
                                inputs.forEach(input => {
                                    const inputName = input.name;
                                    input.name = inputName.replace(/\d+/, i + 1);
                                });
                            }
                        }
                    </script>
                    <!--  -->
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <footer class="footer_area section_padding_130_0 m-lg-5">
                <div class="container">
                    <div class="row">
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Footer Logo-->
                                <div class="footer-logo mb-3"></div>
                                <!-- <p>Appland is completely creative, lightweight, clean app landing page.</p> -->
                                <!-- Copywrite Text-->
                                <div class="copywrite-text mb-5">
                                    <p class="mb-0">Connect to Relyonsoft <i class="lni-heart mr-1"></i><a class="ml-1"
                                            href="../https://wrapbootstrap.com/user/DesigningWorld"> </a></p>
                                </div>
                                <!-- Footer Social Area-->
                                <div class="footer_social_area"><a href="../#" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a><a href="../#" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Pinterest"><i
                                            class="fa fa-pinterest"></i></a><a href="../#" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a><a href="../#" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">About</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="../#">About Us</a></li>
                                        <li><a href="../#">Corporate Sale</a></li>
                                        <li><a href="../#">Terms &amp; Policy</a></li>
                                        <li><a href="../#">Community</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">Our websites</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="../https://relyonsoft.com/">Relyonsoft.com</a></li>
                                        <li><a href="../https://www.saraltds.com/">Saraltds.com</a></li>
                                        <li><a href="../http://www.saralvat.com/">Saralvat.com</a></li>
                                        <li><a href="../http://www.saraltaxoffice.com/">saraltaxoffice.com</a></li>
                                        <li><a href="../https://saralpaypack.com/">Saralpaypack.com</a></li>
                                        <li><a href="../https://saralpaypack.com/">Saralpaypack.com</a></li>
                                        <li><a href="../https://www.saralaccounts.com/">Saralaccounts.com</a></li>
                                        <li><a href="../http://saralxbrl.in/">saralxbrl.in</a></li>
                                        <li><a href="../https://userlogin.relyonsoft.com/">userlogin.relyonsoft.com</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">Contact</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="../#">Call Centre</a></li>
                                        <li><a href="../#">Email Us</a></li>
                                        <li><a href="../#">Term &amp; Conditions</a></li>
                                        <li><a href="../#">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="foot" style="text-align: center; position: relative; bottom: -50px;">
                    <p>A product of Relyon Web Management | Copyright © 2023 Relyon Softech Ltd. All rights reserved</p>
                </div>
            </footer>
        </div>
    </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="../vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="../vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="../vendors/chart.js/js/chart.min.js"></script>
    <script src="../vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="../vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="../js/main.js"></script>
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