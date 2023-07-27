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
          <li class="nav-item"><a class="nav-link" href="requirement_report.php"><span class="nav-icon"></span>
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
          <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
              aria-haspopup="true" aria-expanded="false">
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
                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                  <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item"
                href="#">
                <svg class="icon me-2">
                  <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
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
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Basic example</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Place one add-on or button on either side of an input. You may
                  also place one on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the
                  input group.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#basic-example" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span>
                        <input class="form-control" type="text" placeholder="Username" aria-label="Username"
                          aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Recipient's username"
                          aria-label="Recipient's username" aria-describedby="basic-addon2"><span
                          class="input-group-text" id="basic-addon2">@example.com</span>
                      </div>
                      <label class="form-label" for="basic-url">Your vanity URL</label>
                      <div class="input-group mb-3"><span class="input-group-text"
                          id="basic-addon3">https://example.com/users/</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3">
                      </div>
                      <div class="input-group mb-3"><span class="input-group-text">$</span>
                        <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)"><span
                          class="input-group-text">.00</span>
                      </div>
                      <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Username" aria-label="Username"><span
                          class="input-group-text">@</span>
                        <input class="form-control" type="text" placeholder="Server" aria-label="Server">
                      </div>
                      <div class="input-group"><span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Wrapping</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Input groups wrap by default via <code>flex-wrap: wrap</code> in
                  order to accommodate custom form field validation within an input group. You may disable this with
                  <code>.flex-nowrap</code>.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/input-group/#wrapping"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                      <div class="input-group flex-nowrap"><span class="input-group-text" id="addon-wrapping">@</span>
                        <input class="form-control" type="text" placeholder="Username" aria-label="Username"
                          aria-describedby="addon-wrapping">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Sizing</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add the relative form sizing classes to the
                  <code>.input-group</code> itself and contents within will automatically resize—no need for repeating
                  the form control size classes on each element.
                </p>
                <p class="text-medium-emphasis small"><strong>Sizing on the individual input group elements isn’t
                    supported.</strong></p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/input-group/#sizing"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                      <div class="input-group input-group-sm mb-3"><span class="input-group-text"
                          id="inputGroup-sizing-sm">Small</span>
                        <input class="form-control" type="text" aria-label="Sizing example input"
                          aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group mb-3"><span class="input-group-text"
                          id="inputGroup-sizing-default">Default</span>
                        <input class="form-control" type="text" aria-label="Sizing example input"
                          aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group input-group-lg"><span class="input-group-text"
                          id="inputGroup-sizing-lg">Large</span>
                        <input class="form-control" type="text" aria-label="Sizing example input"
                          aria-describedby="inputGroup-sizing-lg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Checkboxes and radios</span>
              </div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Place any checkbox or radio option within an input group’s addon
                  instead of text. We recommend adding <code>.mt-0</code> to the <code>.form-check-input</code> when
                  there’s no visible text next to the input.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#checkboxes-and-radios" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                      <div class="input-group mb-3">
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox"
                            aria-label="Checkbox for following text input">
                        </div>
                        <input class="form-control" type="text" aria-label="Text input with checkbox">
                      </div>
                      <div class="input-group">
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="radio"
                            aria-label="Radio button for following text input">
                        </div>
                        <input class="form-control" type="text" aria-label="Text input with radio button">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Multiple inputs</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">While multiple <code>&lt;input&gt;</code>s are supported visually,
                  validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#multiple-inputs" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                      <div class="input-group"><span class="input-group-text">First and last name</span>
                        <input class="form-control" type="text" aria-label="First name">
                        <input class="form-control" type="text" aria-label="Last name">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Multiple addons</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Multiple add-ons are supported and can be mixed with checkbox and
                  radio input versions.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#multiple-addons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                      <div class="input-group mb-3"><span class="input-group-text">$</span><span
                          class="input-group-text">0.00</span>
                        <input class="form-control" type="text"
                          aria-label="Dollar amount (with dot and two decimal places)">
                      </div>
                      <div class="input-group">
                        <input class="form-control" type="text"
                          aria-label="Dollar amount (with dot and two decimal places)"><span
                          class="input-group-text">$</span><span class="input-group-text">0.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Button addons</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#button-addons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" id="button-addon1" type="button">Button</button>
                        <input class="form-control" type="text" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Recipient's username"
                          aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" id="button-addon2" type="button">Button</button>
                      </div>
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <input class="form-control" type="text" placeholder=""
                          aria-label="Example text with two button addons">
                      </div>
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Recipient's username"
                          aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Buttons with
                  dropdowns</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1007"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#buttons-with-dropdowns" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1007">
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input class="form-control" type="text" aria-label="Text input with dropdown button">
                      </div>
                      <div class="input-group mb-3">
                        <input class="form-control" type="text" aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <div class="input-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action before</a></li>
                          <li><a class="dropdown-item" href="#">Another action before</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input class="form-control" type="text" aria-label="Text input with 2 dropdown buttons">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Input group</strong><span class="small ms-1">Segmented buttons</span>
              </div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1008"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#segmented-buttons" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1008">
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Action</button>
                        <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                            Dropdown</span></button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                      </div>
                      <div class="input-group">
                        <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                        <button class="btn btn-outline-secondary" type="button">Action</button>
                        <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button"
                          data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                            Dropdown</span></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
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
              <div class="card-header"><strong>Custom forms</strong><span class="small ms-1">Custom select</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1009"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#custom-select" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1009">
                      <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected="">Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02">
                          <option selected="">Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                      </div>
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <select class="form-select" id="inputGroupSelect03"
                          aria-label="Example select with button addon">
                          <option selected="">Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="input-group">
                        <select class="form-select" id="inputGroupSelect04"
                          aria-label="Example select with button addon">
                          <option selected="">Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Custom forms</strong><span class="small ms-1">Custom file input</span>
              </div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1010"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/input-group/#custom-file-input" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1010">
                      <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input class="form-control" id="inputGroupFile01" type="file">
                      </div>
                      <div class="input-group mb-3">
                        <input class="form-control" id="inputGroupFile02" type="file">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" id="inputGroupFileAddon03"
                          type="button">Button</button>
                        <input class="form-control" id="inputGroupFile03" type="file"
                          aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      </div>
                      <div class="input-group">
                        <input class="form-control" id="inputGroupFile04" type="file"
                          aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" id="inputGroupFileAddon04"
                          type="button">Button</button>
                      </div>
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
  </script>

</body>

</html>