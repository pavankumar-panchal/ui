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
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Basic example</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email"
                          placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Sizing</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Set heights using classes like <code>.form-control-lg</code> and
                  <code>.form-control-sm</code>.
                </p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#sizing"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                      <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
                        aria-label=".form-control-lg example">
                      <input class="form-control" type="text" placeholder="Default input"
                        aria-label="default input example">
                      <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                        aria-label=".form-control-sm example">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Disabled</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add the <code>disabled</code> boolean attribute on an input to
                  give it a grayed out appearance and remove pointer events.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#disabled"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                      <input class="form-control" type="text" placeholder="Disabled input"
                        aria-label="Disabled input example" disabled="">
                      <input class="form-control" type="text" placeholder="Disabled readonly input"
                        aria-label="Disabled input example" disabled="" readonly="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Readonly</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add the <code>readonly</code> boolean attribute on an input to
                  prevent modification of the input’s value. Read-only inputs appear lighter (just like disabled
                  inputs), but retain the standard cursor.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#readonly"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                      <input class="form-control" type="text" placeholder="Readonly input here..."
                        aria-label="readonly input example" readonly="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Readonly plain text</span>
              </div>
              <div class="card-body">
                <p class="text-medium-emphasis small">If you want to have <code>&lt;input readonly&gt;</code> elements
                  in your form styled as plain text, use the <code>.form-control-plaintext</code> class to remove the
                  default form field styling and preserve the correct margin and padding.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/form-control/#readonly-plain-text" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                      <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                        <div class="col-sm-10">
                          <input class="form-control-plaintext" id="staticEmail" type="text" readonly=""
                            value="email@example.com">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="inputPassword">Password</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputPassword" type="password">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/form-control/#readonly-plain-text" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                      <form class="row g-3">
                        <div class="col-auto">
                          <label class="visually-hidden" for="staticEmail2">Email</label>
                          <input class="form-control-plaintext" id="staticEmail2" type="text" readonly=""
                            value="email@example.com">
                        </div>
                        <div class="col-auto">
                          <label class="visually-hidden" for="inputPassword2">Password</label>
                          <input class="form-control" id="inputPassword2" type="password" placeholder="Password">
                        </div>
                        <div class="col-auto"></div>
                      </form>
                      <button class="btn btn-primary mb-3" type="submit">Confirm identity</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">File input</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/form-control/#file-input" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                      <div class="mb-3">
                        <label class="form-label" for="formFile">Default file input example</label>
                        <input class="form-control" id="formFile" type="file">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formFileMultiple">Multiple files input example</label>
                        <input class="form-control" id="formFileMultiple" type="file" multiple="">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formFileDisabled">Disabled file input example</label>
                        <input class="form-control" id="formFileDisabled" type="file" disabled="">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formFileSm">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                      </div>
                      <div>
                        <label class="form-label" for="formFileLg">Large file input example</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Color</span></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1007"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#color"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1007">
                      <label class="form-label" for="exampleColorInput">Color picker</label>
                      <input class="form-control form-control-color" id="exampleColorInput" type="color" value="#563d7c"
                        title="Choose your color">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong><span class="small ms-1">Datalists</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Datalists allow you to create a group of
                  <code>&lt;option&gt;</code>s that can be accessed (and autocompleted) from within an
                  <code>&lt;input&gt;</code>. These are similar to <code>&lt;select&gt;</code> elements, but come with
                  more menu styling limitations and differences. While most browsers and operating systems include some
                  support for <code>&lt;datalist&gt;</code> elements, their styling is inconsistent at best.
                </p>
                <p class="text-medium-emphasis small">Learn more about <a href="https://caniuse.com/datalist">support
                    for datalist elements</a>.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1008"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#datalists"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1008">
                      <label class="form-label" for="exampleDataList">Datalist example</label>
                      <input class="form-control" id="exampleDataList" list="datalistOptions"
                        placeholder="Type to search...">
                      <datalist id="datalistOptions">
                        <option value="San Francisco"></option>
                        <option value="New York"></option>
                        <option value="Seattle"></option>
                        <option value="Los Angeles"></option>
                        <option value="Chicago"></option>
                      </datalist>
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