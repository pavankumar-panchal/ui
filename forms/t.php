<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



</head>

<body>





  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="card bg-light">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="searchcriteria">Text:</label>
                <input type="text" class="form-control" id="searchcriteria" placeholder="Leave Empty for all"
                  isdatepicker="true">
              </div>
              <!-- Look in -->
              <div class="container row " style="display: flex; flex-direction: row;">
                <div class="form-group">
                  <strong>Look in:</strong>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Customer ID
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="businessname" checked> Business Name
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Contact Person
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="businessname" checked> Place
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Phone / Cell
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="businessname" checked> Email
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Card ID
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="businessname" checked> Pin No

                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Bill No
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="businessname" checked> Computer ID
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="databasefield" value="slno"> Softkey
                    </label>
                  </div>

                  <!-- Other radio inputs... -->
                </div>
                <!-- Selections -->
                <div class="form-group float-end">
                  <strong>Selections:</strong>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="region2">Region:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">State:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">District:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">Dealer:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">Branch:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">Type:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>
                    <div class="col-md-6">
                      <label for="region2">Category:</label>
                      <select class="form-control swiftselect" id="region2" style="width:180px;">
                        <option value="">ALL</option>
                        <option value="1">BKG</option>
                        <!-- Other options... -->
                      </select>
                      <!-- Other select inputs... -->
                    </div>

                  </div>
                </div>
              </div>
                <div class="form-group">
                  <div id="filter-form-error"></div>
                </div>
                <div class="form-group">
                  <input type="button" class="btn btn-primary" id="filter" value="Search"
                    onclick="searchcustomerarray();">
                  <input type="button" class="btn btn-secondary" name="reset_form" value="Reset"
                    onclick="resetDefaultValues(this.form);">
                  <input type="button" class="btn btn-secondary" id="close" value="Close"
                    onclick="document.getElementById('filterdiv').style.display='none';">
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card bg-light">
          <div class="card-body">
            <strong>Products:</strong>
            <div class="card" style="border:solid 1px #A8A8A8; height: 230px; overflow: scroll;">
              <!-- Product list -->


            </div>
            <div class="form-group">
              <input type="checkbox" checked="checked" name="selectall" id="selectall" value="selectall"
                onclick="selectdeselectall();">
              <label for="selectall">Select All</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
</body>

</html>