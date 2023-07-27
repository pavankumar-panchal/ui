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
            <li class="nav-item"><a class="nav-link" href="../index.php">
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
                    <li class="nav-item"><a class="nav-link" href="error_register.php"><span class="nav-icon"></span>
                            Errors</a></li>
                    <li class="nav-item"><a class="nav-link" href="In-house.php"><span class="nav-icon"></span>
                            In-house</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Onsite_register.php"><span class="nav-icon"></span>
                            Onsite</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="References.php"><span class="nav-icon"></span>
                            References</a></li>
                    <li class="nav-item"><a class="nav-link" href="Requirements.php"><span class="nav-icon"></span>
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
                    <li class="nav-item"><a class="nav-link" href="stats&reports.php"><span class="nav-icon"></span>
                            Stats & Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="error_report.php"><span class="nav-icon"></span>
                            Error Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="requirement_report.php"><span
                                class="nav-icon"></span>
                            Onsite Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="Onsite.php"><span class="nav-icon"></span>
                            Chart View</a></li>
                    <li class="nav-item"><a class="nav-link" href="Attendence.php"><span class="nav-icon"></span>
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
                                        <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                                        </use>
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




                    <!-- content -->
                    <div class="container mt-4 ">
                        <table class="table table-bordered table-striped"
                            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                            <thead>
                                <tr style="cursor:pointer" onclick="showhide('pendingauthorization','toggleimg');">
                                    <th class="header-line bg-light" colspan="2">
                                        &nbsp;&nbsp;Authorization Summary - You have <strong>0</strong> Records Pending
                                        for
                                        Authorization
                                        <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg"
                                                name="toggleimg" align="absmiddle"></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="50%">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="bg-white">

                                                    <td valign="top">Calls:</td>
                                                    <td valign="top">0</td>
                                                </tr>

                                                <tr class="bg-white">

                                                    <td valign="top">Emails:</td>
                                                    <td valign="top">0</td>
                                                </tr>

                                                <tr class="bg-white">

                                                    <td valign="top">Errors:</td>
                                                    <td valign="top">0</td>
                                                </tr>

                                                <tr class="bg-white">

                                                    <td valign="top">Inhouse:</td>
                                                    <td valign="top">0</td>
                                                </tr>

                                                <tr class="bg-white">

                                                    <td valign="top">Onsite:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="50%">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="bg-white">
                                                    <td valign="top">Reference:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Requirement:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Skype:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Invoice:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Receipts:</td>
                                                    <td valign="top">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- second form  -->
                    <div class="container mt-4">
                        <table class="table table-bordered table-striped"
                            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                            <thead>
                                <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                                    <th class="header-line bg-light" colspan="2">
                                        &nbsp;&nbsp;Enter / Edit / View Details
                                        <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg"
                                                name="toggleimg" align="absmiddle"></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" valign="top">
                                        <div id="maindiv" style="display: block;">
                                            <form action="" method="post" name="submitform" id="submitform"
                                                onsubmit="return false;">
                                                <table class="table table-bordered bg-white">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="middle" align="center"
                                                                style="border-bottom:1px solid #d1dceb; padding:0"
                                                                height="170">
                                                                <div id="displayregisters"><img src="../images/warn.gif"
                                                                        border="0" align="absmiddle">&nbsp;
                                                                    <strong>Make A Selection of record from the grid
                                                                        below</strong>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="authorizedgroup">Category:</label>
                                                                            <select name="solvedby" id="solvedby"
                                                                                class="form-select form-control">
                                                                                <option value="">Make a selection
                                                                                </option>
                                                                                <!-- Add other options here -->
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-group"
                                                                            style="display: flex; flex-direction: row;">
                                                                            <label>Authorized:</label>&nbsp;&nbsp;&nbsp;
                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="authorizedatabasefield"
                                                                                    id="authorizedatabasefield0"
                                                                                    value="yes" checked="checked"
                                                                                    class="form-check-input">
                                                                                <label for="authorizedatabasefield0"
                                                                                    class="form-check-label">Yes</label>
                                                                            </div>&nbsp;&nbsp;
                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="authorizedatabasefield"
                                                                                    id="authorizedatabasefield1"
                                                                                    value="no" class="form-check-input">
                                                                                <label for="authorizedatabasefield1"
                                                                                    class="form-check-label">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6" style="margin-top:20px;">
                                                                        <div class="form-group "
                                                                            style="display: flex; flex-direction: row;">
                                                                            <label>Flag the Entry:</label>
                                                                            &nbsp;&nbsp;&nbsp;

                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="flagdatabasefield"
                                                                                    id="flagdatabasefield0" value="yes"
                                                                                    class="form-check-input">
                                                                                <label for="flagdatabasefield0"
                                                                                    class="form-check-label">Yes</label>
                                                                            </div>&nbsp;&nbsp;
                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="flagdatabasefield"
                                                                                    id="flagdatabasefield1" value="no"
                                                                                    checked="checked"
                                                                                    class="form-check-input">
                                                                                <label for="flagdatabasefield1"
                                                                                    class="form-check-label">No</label>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div class="form-group"
                                                                            style="display: flex; flex-direction: row; word-spacing: 10px; margin-top: 10px ;">
                                                                            <label>Publish:</label> &nbsp;
                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="publishdatabasefield"
                                                                                    id="publishdatabasefield0"
                                                                                    value="yes"
                                                                                    class="form-check-input">
                                                                                <label for="publishdatabasefield0"
                                                                                    class="form-check-label">Yes</label>
                                                                            </div>&nbsp;
                                                                            <div class="form-check">
                                                                                <input type="radio"
                                                                                    name="publishdatabasefield"
                                                                                    id="publishdatabasefield2"
                                                                                    value="no" checked="checked"
                                                                                    class="form-check-input">
                                                                                <label for="publishdatabasefield2"
                                                                                    class="form-check-label">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" valign="middle"
                                                                style="padding-right:15px; border-top:1px solid #d1dceb;">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="teamleaderremarks"
                                                                                class="float-start">Remarks:</label>
                                                                            <textarea name="teamleaderremarks" cols="45"
                                                                                class="form-control"
                                                                                id="teamleaderremarks"
                                                                                data-gramm="false"
                                                                                wt-ignore-input="true"></textarea>
                                                                            <input type="hidden" name="lastslno"
                                                                                id="lastslno" value="">
                                                                            <input type="hidden" name="registervalue"
                                                                                id="registervalue" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <input type="hidden" name="loggedusertype"
                                                                            id="loggedusertype" value="ADMIN">
                                                                        <input type="hidden" name="loggeduser"
                                                                            id="loggeduser" value="1">
                                                                        <input type="hidden"
                                                                            name="loggedreportingauthority"
                                                                            id="loggedreportingauthority" value="">
                                                                    </div>
                                                                    <div class="col-md-6 text-end"
                                                                        style="margin-top: 10px;">
                                                                        <div id="form-error"></div>
                                                                        <input name="save" type="submit"
                                                                            class="btn btn-primary" id="save"
                                                                            value="Save" onclick="formsubmit('save')">
                                                                        <input name="new" type="reset"
                                                                            class="btn btn-secondary" id="new"
                                                                            value="Clear" onclick="clearinnerhtml();">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="col-md-12">
                        <div id="wrapper" class="table-container"></div>

                    </div>
                </div>
            </div>
            <footer class="footer_area section_padding_130_0">
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