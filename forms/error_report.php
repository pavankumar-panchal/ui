<?php

include("../navigation/navigation.php");

?>

<div class="container mt-4 p-4 rounded-4">
  <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <div class="card-header form-title" onclick="toggleFormVisibility();">
      Enter the Details <span id="toggleimg" class="float-end pointer-event">+</span>
    </div>
    <div class="card-body main-form" id="maindiv" style="display: block;">
      <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
        <!-- Rest of the form content goes here -->

        <div class="row" >
          <div class="col-md-6">
            <div class="row mb-3">
              <label for="fromdate" class="col-sm-4 col-form-label">From Date:</label>
              <div class="col-sm-8">
                <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
                  value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
              </div>
            </div>
            <div class="row mb-3">
              <label for="fromdate" class="col-sm-4 col-form-label">From Date:</label>
              <div class="col-sm-8">
                <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
                  value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
              </div>
              <!-- Other form groups for 'To Date', 'Product Group', 'Product Name', and 'Error Description' -->
            </div>
            <div class="row mb-3">
              <label for="fromdate" class="col-sm-4 col-form-label">Product group:</label>
              <div class="col-sm-8">
                <select name="status" id="status" class="form-control form-select">
                  <option value="">Make A Selection</option>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Un Solved</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="fromdate" class="col-sm-4 col-form-label">Product Name:</label>
              <div class="col-sm-8">
                <select name="status" id="status" class="form-control form-select">
                  <option value="">Make A Selection</option>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Un Solved</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="fromdate" class="col-sm-4 col-form-label">Error Description:</label>
              <div class="col-sm-8">
                <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
                  value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row mb-3">
              <label for="status" class="col-sm-4 col-form-label">Status:</label>
              <div class="col-sm-8">
                <select name="status" id="status" class="form-control form-select">
                  <option value="">Make A Selection</option>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Un Solved</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="status" class="col-sm-4 col-form-label">Entered By:</label>
              <div class="col-sm-8">
                <select name="status" id="status" class="form-control form-select">
                  <option value="">Make A Selection</option>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Un Solved</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="status" class="col-sm-4 col-form-label">Reported To:</label>
              <div class="col-sm-8">
                <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
                  value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
              </div>
            </div>
            <div class="row mb-3">
              <label for="status" class="col-sm-4 col-form-label">Reported by:</label>
              <div class="col-sm-8">
                <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
                  value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
              </div>
            </div>
          </div>
        </div>
        <div class="text-end submit-btn">
          <div class="form-group">
            <div id="form-error"></div>
          </div>
          <button name="view" type="submit" class="btn btn-primary" id="view" onclick="formsubmit();">View</button>
        </div>



      </form>
    </div>
  </div>
</div>

<?php

include("../navigation/footer.php");

?>