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
                  <label for="username" class="form-label">User ID:</label>
                  <input name="username" type="text" class="form-control" id="username" autocomplete="off"
                    isdatepicker="true">
                  <input type="hidden" name="lastslno" id="lastslno" value="" />
                  <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>" />
                  <input type="hidden" name="loggedusertype" id="loggedusertype" value="<?php echo ($usertype); ?>" />
                  <input type="hidden" name="time" id="time" value="" />
                  <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                    value="<?php echo ($reportingauthority); ?>" />

                  <label for="password" class="form-label">Password:</label>

                  <input name="password" type="password" class="form-control" id="password" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="type" class="form-label">Type:</label>
                  <select name="type" class="form-select swiftselect form-control" id="type" onchange="">
                    <option selected="selected" value="">Make A Selection</option>
                    <option value="ADMIN">Administrator</option>
                    <option value="EXECUTIVE-ONSITE">Executive - Onsite</option>
                    <option value="EXECUTIVE-OTHERS">Executive - Others</option>
                    <option value="GUEST">Guest</option>
                    <option value="HR">HR</option>
                    <option value="MANAGEMENT">Management</option>
                    <option value="TEAMLEADER">Team Leader</option>

                  </select>
                  <label for="locationname" class="form-label">Location:</label>
                  <select name="locationname" class="form-select  form-control" id="locationname" onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>
                    <?php include('../inc/selectlocation.php'); ?>


                  </select>
                  <label for="reportingauthority" class="form-label">Reporting Authority:</label>
                  <select name="reportingauthority" class="form-select swiftselect form-control" id="reportingauthority"
                    onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>
                    <?php include('../inc/reportingauthority.php'); ?>


                  </select>
                  <label for="supportunit" class="form-label">Support Unit:</label>
                  <select name="supportunit" class="form-select  form-control" id="supportunit" onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>
                    <?php include('../inc/supportunit.php'); ?>
                  </select>
                  <label for="existinguser" class="form-label">Existing User:</label>
                  <select name="existinguser" class="form-select form-control" id="existinguser" onchange="">
                    <option value="" selected="selected">
                      Make a Selection
                    </option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                  <label for="fullname" class="form-label">User name:</label>
                  <input name="fullname" type="text" class="form-control" id="fullname" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="gender" class="form-label">Gender:</label>
                  <select name="gender" class="form-select swiftselect form-control" id="gender" onchange="">
                    <option value="">Make A Selection</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                  </select>
                  <label for="mobile" class="form-label">Mobile:</label>
                  <input name="mobile" type="tel" class="form-control" id="mobile" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="disablelogin" class="form-label">Disable Login: &nbsp; &nbsp; &nbsp;
                    <input class="form-check-input" type="checkbox" name="disablelogin" id="disablelogin">
                </div>

                <!-- second -->
                <div class="mb-3 " style="width: 50%; margin:20px;">
                  <label for="designation" class="form-label">Designation:</label>
                  <input name="designation" type="text" class="form-control" id="designation" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="dob" class="form-label">Date of Birth:</label>
                  <input name="dob" type="date" class="form-control" id="dob" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="presentaddress" class="form-label">Present Address:</label>
                  <input name="presentaddress" type="text" class="form-control" id="presentaddress" size="20"
                    autocomplete="off" isdatepicker="true">
                  <!-- second div -->
                  <label for="permanentaddress" class="form-label">Permanent Address:</label>
                  <input name="permanentaddress" type="text" class="form-control" id="permanentaddress" size="20"
                    autocomplete="off" isdatepicker="true">



                  <label for="doj" class="form-label">Date of joining:</label>
                  <input name="doj" type="date" class="form-control" id="doj" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="personalemail" class="form-label">Personal Email: </label>
                  <input name="personalemail" type="text" class="form-control" id="personalemail" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="officialemail" class="form-label">Official Email:</label>
                  <input name="officialemail" type="text" class="form-control" id="officialemail" size="20"
                    autocomplete="off" isdatepicker="true">
                  <label for="dol" class="form-label">Date of Leaving: </label>
                  <input name="dol" type="date" class="form-control" id="dol" size="20" autocomplete="off"
                    isdatepicker="true">
                  <label for="emergencynumber" class="form-label">Contact Number:</label>
                  <input name="emergencynumber" type="text" class="form-control" id="emergencynumber" size="20"
                    autocomplete="off" isdatepicker="true" placeholder="In case of Emergency">
                  <label for="emergencyremarks" class="form-label">Emergency Remarks:</label>
                  <input name="emergencyremarks" type="text" class="form-control" id="emergencyremarks" size="20"
                    autocomplete="off" isdatepicker="true">
                  </label>
                </div>
                <!-- Add more textarea fields as needed -->
              </div>
              <div class="text-end float-right">
                <button name="new" type="reset" class="btn btn-secondary">New</button>
                <button name="save" type="submit" id="save" value="Save" class="btn btn-primary"
                  onclick="formsubmit('save');">Save</button>
                <button name="delete" type="submit" class="btn btn-danger" value="Delete" onclick="formsubmit('delete')"
                  disabled="disabled" id="delete">Delete</button>
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