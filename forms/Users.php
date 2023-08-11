<?php

include("../navigation/navigation.php");

?>


<style>
  label {
    margin: 10px 0px 10px 0px;
  }
</style>

</head>


<div class="container users_la" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <div class="card-header bg-light">
          Enter/Edit/View Details
        </div>
        <div class="card-body">
          <div id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
              <!-- Your form content goes here -->
              <div class="display" style="display: flex; flex-direction: row; width:100%;">
                <!-- first div -->

                <div class="mb-3" style="width: 50%; margin:20px;">
                  <label for="customername" class="form-label">User ID:</label>
                  <input name="customername" type="text" class="form-control" id="customername" autocomplete="off"
                    isdatepicker="true">

                  <label for="customername" class="form-label">Password:</label>

                  <input name="customername" type="password" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Type:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">Location:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">Reporting Authority:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">Reporting Authority:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">Existing User:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">User name:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Gender:</label>
                  <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>

                  </select>
                  <label for="customername" class="form-label">Mobile:</label>
                  <input name="customerid" type="tel" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Disable Login: &nbsp; &nbsp; &nbsp;
                    <input class="form-check-input" type="checkbox" name="existingUser" id="existingUser">
                </div>

                <!-- second -->
                <div class="mb-3 " style="width: 50%; margin:20px;">
                  <label for="customername" class="form-label">Designation:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Date of Birth:</label>
                  <input name="customerid" type="date" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="teamleaderremarks" class="form-label">Present Address:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <!-- second div -->
                  <label for="customername" class="form-label">Reporting Authority:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Date of joining:</label>
                  <input name="customerid" type="date" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Personal Email: </label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Official Email:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Date of Leaving: </label>
                  <input name="customerid" type="date" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="customername" class="form-label">Contact Number:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true" placeholder="In case of Emergency">
                  <label for="customername" class="form-label">Emergency Remarks:</label>
                  <input name="customerid" type="text" class="form-control" id="customername" size="20"
                    autocomplete="off" isdatepicker="true">
                  </label>
                </div>
                <!-- Add more textarea fields as needed -->
              </div>
              <div class="text-end float-right">
                <button name="new" type="submit" class="btn btn-secondary">New</button>
                <button name="save" type="submit" class="btn btn-primary">Save</button>
                <button name="delete" type="submit" class="btn btn-danger">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container mt-4">
  <div class="card " style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <div class="card-header bg-light">
      Filter the Data:
    </div>
    <div class="card-body">
      <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="searchcriteria">Search Text:</label>
              <input name="searchcriteria" type="text" class="form-control swifttext" id="searchcriteria" size="40"
                isdatepicker="true">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="orderby">Order By:</label>
              <select name="orderby" class="form-control form-select swiftselect" id="orderby">
                <option value="username" selected="selected">User Name</option>
                <option value="type">Type</option>
                <option value="locationname">Location Name</option>
                <option value="reportingauthority">Reporting Authority</option>
                <option value="supportunit">Support Unit</option>
                <option value="existinguser">Existing User</option>
                <option value="gender">Gender</option>
              </select>
            </div>
          </div>
        </div> <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              In:
              <div class="form-check form-check-inline">

                <label class="form-check-label" for="databasefield0"> <input type="radio" name="databasefield"
                    id="databasefield0" value="username" checked="checked" class="form-check-input"> User Name</label>
              </div>
              <div class="form-check-label form-check-inline">
                <label class="form-check-label" for="databasefield1"> <input type="radio" name="databasefield"
                    id="databasefield0" value="username" checked="checked" class="form-check-input"> Type</label>
              </div>
              <div class="form-check form-check-inline">

                <label class="form-check-label" for="databasefield2"> <input type="radio" name="databasefield"
                    value="locationname" id="databasefield2" class="form-check-input"> Location Name</label>
              </div>
              <div class="form-check form-check-inline">

                <label class="form-check-label" for="databasefield3"> <input type="radio" name="databasefield"
                    value="reportingauthority" id="databasefield3" class="form-check-input"> Reporting Authority</label>
              </div>
              <div class="form-check form-check-inline">

                <label class="form-check-label" for="databasefield4"> <input type="radio" name="databasefield"
                    value="supportunit" id="databasefield4" class="form-check-input"> Support Unit</label>
              </div>
              <div class="form-check form-check-inline">

                <label class="form-check-label" for="databasefield5"> <input type="radio" name="databasefield"
                    value="existinguser" id="databasefield5" class="form-check-input"> Existing User</label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="databasefield6">
                  <input type="radio" name="databasefield" value="gender" id="databasefield6" class="form-check-input">
                  Gender</label>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center float-end mt-3 float-right">
          <div id="filter-form-error"></div>
          <input name="view" type="submit" class="btn btn-primary swiftchoicebutton" id="view" value="View"
            onclick="formfilter('view');">
          <input name="excel" type="submit" class="btn btn-warning swiftchoicebutton" id="excel" value="excel"
            onclick="formfilter('excel');">
        </div>
      </form>
    </div>
  </div>
  <!--  -->


  <?php

  include("../navigation/footer.php");

  ?>