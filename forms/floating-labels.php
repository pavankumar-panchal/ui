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
              <div class="card-header"><strong>Floating labels</strong><span class="small ms-1">Basic example</span>
              </div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and
                  <code>&lt;label&gt;</code> elements in <code>.form-floating</code> to enable floating labels with
                  Bootstrap’s textual form fields. A <code>placeholder</code> is required on each
                  <code>&lt;input&gt;</code> as our method of CSS-only floating labels uses the
                  <code>:placeholder-shown</code> pseudo-element. Also note that the <code>&lt;input&gt;</code> must
                  come first so we can utilize a sibling selector (e.g., <code>~</code>).</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#example" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" type="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input class="form-control" id="floatingPassword" type="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-medium-emphasis small">When there’s a <code>value</code> already defined,
                  <code>&lt;label&gt;</code>s will automatically adjust to their floated position.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#example" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                      <form class="form-floating">
                        <input class="form-control" id="floatingInputValue" type="email" placeholder="name@example.com"
                          value="test@example.com">
                        <label for="floatingInputValue">Input with value</label>
                      </form>
                    </div>
                  </div>
                </div>
                <p class="text-medium-emphasis small">Form validation styles also work as expected.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#example" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                      <form class="form-floating">
                        <input class="form-control is-invalid" id="floatingInputInvalid" type="email"
                          placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputInvalid">Invalid input</label>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Floating labels</strong><span class="small ms-1">Textareas</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">By default, <code>&lt;textarea&gt;</code>s with
                  <code>.form-control</code> will be the same height as <code>&lt;input&gt;</code>s.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#textareas" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                      <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea"
                          placeholder="Leave a comment here"></textarea>
                        <label for="floatingTextarea">Comments</label>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-medium-emphasis small">To set a custom height on your <code>&lt;textarea&gt;</code>, do
                  not use the <code>rows</code> attribute. Instead, set an explicit <code>height</code> (either inline
                  or via custom CSS).</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#textareas" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                      <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" placeholder="Leave a comment here"
                          style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Floating labels</strong><span class="small ms-1">Selects</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Other than <code>.form-control</code>, floating labels are only
                  available on <code>.form-select</code>s. They work in the same way, but unlike
                  <code>&lt;input&gt;</code>s, they’ll always show the <code>&lt;label&gt;</code> in its floated
                  state.<strong>Selects with <code>size</code> and <code>multiple</code> are not supported.</strong></p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link"
                        href="https://coreui.io/docs/forms/floating-labels/#selects" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Floating labels</strong><span class="small ms-1">Layout</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">When working with the CoreUI for Bootstrap grid system, be sure to
                  place form elements within column classes.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006"
                        role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/floating-labels/#layout"
                        target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input class="form-control" id="floatingInputGrid" type="email"
                              placeholder="name@example.com" value="mdo@example.com">
                            <label for="floatingInputGrid">Email address</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid"
                              aria-label="Floating label select example">
                              <option selected="">Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <label for="floatingSelectGrid">Works with selects</label>
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