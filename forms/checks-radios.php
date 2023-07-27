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



          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Checkbox</strong></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#checks"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckChecked" type="checkbox" checked="">
                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Indeterminate</strong></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Checkboxes can utilize the <code>:indeterminate</code> pseudo
                  class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#indeterminate" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                      <div class="form-check form-example-indeterminate">
                        <input class="form-check-input" id="flexCheckIndeterminate" type="checkbox">
                        <label class="form-check-label" for="flexCheckIndeterminate">Indeterminate checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Checkbox</strong><span class="small ms-1">Disabled</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add the <code>disabled</code> attribute and the associated
                  <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate
                  the input’s state.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#disabled"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckDisabled" type="checkbox" disabled="">
                        <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckCheckedDisabled" type="checkbox" checked=""
                          disabled="">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Radios</strong></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#radios"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"
                          checked="">
                        <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Radios</strong><span class="small ms-1">Disabled</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add the <code>disabled</code> attribute and the associated
                  <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate
                  the input’s state.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#disabled-1" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioDisabled" type="radio" name="flexRadioDisabled"
                          disabled="">
                        <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioCheckedDisabled" type="radio"
                          name="flexRadioDisabled" checked="" disabled="">
                        <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Switches</strong></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">A switch has the markup of a custom checkbox but uses the
                  <code>.form-switch</code> class to render a toggle switch. Switches also support the
                  <code>disabled</code> attribute.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#switches"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                          input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                          input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                          input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckCheckedDisabled" type="checkbox" checked=""
                          disabled="">
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                          checkbox input</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Switches</strong><span class="small ms-1">Sizes</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#sizes"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                          input</label>
                      </div>
                      <div class="form-check form-switch form-switch-lg">
                        <input class="form-check-input" id="flexSwitchCheckDefaultLg" type="checkbox">
                        <label class="form-check-label" for="flexSwitchCheckDefaultLg">Large switch checkbox
                          input</label>
                      </div>
                      <div class="form-check form-switch form-switch-xl">
                        <input class="form-check-input" id="flexSwitchCheckDefaultXl" type="checkbox">
                        <label class="form-check-label" for="flexSwitchCheckDefaultXl">Extra large switch checkbox
                          input</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Default layout
                  (stacked)</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">By default, any number of checkboxes and radios that are immediate
                  sibling will be vertically stacked and appropriately spaced with <code>.form-check</code>.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1007"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#default-stacked" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1007">
                      <div class="form-check">
                        <input class="form-check-input" id="defaultCheck1" type="checkbox">
                        <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="defaultCheck2" type="checkbox" disabled="">
                        <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1008"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#default-stacked" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1008">
                      <div class="form-check">
                        <input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">Default radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios"
                          value="option2">
                        <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="exampleRadios3" type="radio" name="exampleRadios"
                          value="option3" disabled="">
                        <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Inline</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Group checkboxes or radios on the same horizontal row by adding
                  <code>.form-check-inline</code> to any <code>.form-check</code>.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1009"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#inline"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1009">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3"
                          disabled="">
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1010"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/checks-radios/#inline"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1010">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions"
                          value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions"
                          value="option3" disabled="">
                        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Without labels</span>
              </div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Omit the wrapping <code>.form-check</code> for checkboxes and
                  radios that have no label text. Remember to still provide some form of accessible name for assistive
                  technologies (for instance, using <code>aria-label</code>). See the <a
                    href="https://coreui.io/docs/forms/overview/#accessibility">forms overview accessibility</a> section
                  for details.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1011"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#without-labels" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1011">
                      <div>
                        <input class="form-check-input" id="checkboxNoLabel" type="checkbox" aria-label="...">
                      </div>
                      <div>
                        <input class="form-check-input" id="radioNoLabel1" type="radio" name="radioNoLabel"
                          aria-label="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Toggle buttons</strong></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Create button-like checkboxes and radio buttons by using
                  <code>.btn</code> styles rather than <code>.form-check-label</code> on the <code>&lt;label&gt;</code>
                  elements. These toggle buttons can further be grouped in a <a
                    href="https://coreui.io/docs/components/button-group/">button group</a> if needed.
                </p>
                <h3 id="checkbox-toggle-buttons">Checkbox toggle buttons<a class="anchorjs-link" aria-label="Anchor"
                    data-anchorjs-icon="#" href="#checkbox-toggle-buttons" style="padding-left: 0.375em;"></a></h3>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1012"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#toggle-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1012">
                      <input class="btn-check" id="btn-check" type="checkbox" autocomplete="off">
                      <label class="btn btn-primary" for="btn-check">Single toggle</label>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1013"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#toggle-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1013">
                      <input class="btn-check" id="btn-check-2" type="checkbox" checked="" autocomplete="off">
                      <label class="btn btn-primary" for="btn-check-2">Checked</label>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1014"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#toggle-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1014">
                      <input class="btn-check" id="btn-check-3" type="checkbox" autocomplete="off" disabled="">
                      <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Toggle buttons</strong><span class="small ms-1">Radio</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1015"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#radio-toggle-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1015">
                      <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off" checked="">
                      <label class="btn btn-secondary" for="option1">Checked</label>
                      <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off">
                      <label class="btn btn-secondary" for="option2">Radio</label>
                      <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off" disabled="">
                      <label class="btn btn-secondary" for="option3">Disabled</label>
                      <input class="btn-check" id="option4" type="radio" name="options" autocomplete="off">
                      <label class="btn btn-secondary" for="option4">Radio</label>
                    </div>
                  </div>
                </div>
                <h3 id="outlined-styles">Outlined styles<a class="anchorjs-link" aria-label="Anchor"
                    data-anchorjs-icon="#" href="#outlined-styles" style="padding-left: 0.375em;"></a></h3>
                <p class="text-medium-emphasis small">Different variants of <code>.btn</code>, such at the various
                  outlined styles, are supported.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1016"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/checks-radios/#radio-toggle-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1016">
                      <input class="btn-check" id="btn-check-outlined" type="checkbox" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btn-check-outlined">Single toggle</label><br>
                      <input class="btn-check" id="btn-check-2-outlined" type="checkbox" checked="" autocomplete="off">
                      <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label><br>
                      <input class="btn-check" id="success-outlined" type="radio" name="options-outlined"
                        autocomplete="off" checked="">
                      <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                      <input class="btn-check" id="danger-outlined" type="radio" name="options-outlined"
                        autocomplete="off">
                      <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023
        creativeLabs.</div>
      <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
    </footer>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="vendors/simplebar/js/simplebar.min.js"></script>
  <script>
    document.querySelectorAll('.form-example-indeterminate [type="checkbox"]').forEach(function (checkbox) {
      checkbox.indeterminate = true
    })
  </script>

</body>

</html>