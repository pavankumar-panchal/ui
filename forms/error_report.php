<?php

include("../navigation/navigation.php");

?>
<!-- content -->






<style>
  .form-group {
    margin-bottom: 5px;
  }
</style>

<div class="container mt-4">
  <div class="form-title" onclick="toggleFormVisibility();">
    Enter the Details <span id="toggleimg" class="float-end">+</span>
  </div>
  <div class="main-form" id="maindiv" style="display: block;">
    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="fromdate">From Date:</label>
            <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30" autocomplete="off"
              value="" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
          </div>
          <div class="form-group">
            <label for="todate">To Date:</label>
            <input name="todate" type="date" class="form-control" id="DPC_todate" size="30" autocomplete="off" value=""
              datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
          </div>
          <div class="form-group">
            <label for="s_productgroup">Product group:</label>
            <select name="s_productgroup" class="form-control" id="s_productgroup" onchange="">
              <option value="" selected="selected">Make a Selection</option>
              <option value="null">null</option>
              <option value="pro">pro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="productname">Product Name:</label>
            <select name="productname" id="productname" class="form-control">
              <option value="">Make A Selection</option>
              <option value="2">null</option>
              <option value="1">products</option>
            </select>
          </div>
          <div class="form-group">
            <label for="errorreported">Error Description:</label>
            <input name="errorreported" type="text" class="form-control" id="errorreported" size="30" autocomplete="off"
              isdatepicker="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
              <option value="">Make A Selection</option>
              <option value="solved">Solved</option>
              <option value="unsolved">Un Solved</option>
            </select>
          </div>
          <div class="form-group">
            <label for="userid">Entered By:</label>
            <select name="userid" id="userid" class="form-control">
              <option value="">ALL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="reportedto">Reported To:</label>
            <input name="reportedto" type="text" class="form-control" id="reportedto" size="30" autocomplete="off"
              isdatepicker="true">
          </div>
          <div class="form-group">
            <label for="customername">Reported By:</label>
            <input name="customername" type="text" class="form-control" id="customername" size="30" autocomplete="off"
              isdatepicker="true">
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
<div class="col-md-12">
</div>
</div>
</div>
<?php

include("../navigation/footer.php");

?>