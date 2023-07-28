<?php

include("../navigation/navigation.php");

?>
<!-- content -->


<div class="container mt-4">
  <div class="card">
    <div class="card-header bg-light " style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
      <div class="d-flex justify-content-between align-items-center">
        <span class="header-line pl-3">Enter / Edit / View Details</span>
        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" class="img-fluid"
          style="max-height: 20px;" align="absmiddle">
      </div>
    </div>
    <div class="card-body" id="maindiv" style="display: block;">
      <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
        <div class="row">
          <div class="col-md-6 border-right">
            <div class="form-group">
              <label for="s_productgroup">Product group:</label>
              <select name="s_productgroup" class="form-control swiftselect" id="s_productgroup" onchange="">
                <option value="" selected="selected">Make a Selection</option>
                <option value="null">null</option>
                <option value="pro">pro</option>
              </select>
              <!-- Details are in javascript.js page as a function prdgroup(); -->
            </div>
            <div class="form-group">
              <label for="productname">Product Name:</label>
              <select name="productname" class="form-control swiftselect" id="productname">
                <option value="" selected="">Make A Selection</option>
                <option value="2">null</option>
                <option value="1">products</option>
              </select>
              <input type="hidden" name="lastslno" id="lastslno" value="">
              <input type="hidden" name="loggeduser" id="loggeduser" value="1">
              <input type="hidden" name="loggedusertype" id="loggedusertype" value="ADMIN">
              <!-- Replace the following line with the actual value from the backend -->
              <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="productversion">Product Version:</label>
              <input name="productversion" type="text" class="form-control swifttext" id="productversion" size="30"
                isdatepicker="true">
            </div>
            <div class="form-group">
              <label for="releasedate">Release Date:</label>
              <div class="input-group">
                <input name="releasedate" type="date" class="form-control swifttext" id="DPC_releasedate" size="30"
                  datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">

              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-3 float-end">
          <div id="form-error"></div>
          <input name="new" type="reset" class="btn btn-secondary" id="new" value="New"
            onclick="newentry();clearinnerhtml();">
          <input name="save" type="submit" class="btn btn-primary" users="" id="save" value="Save"
            onclick="formsubmit('save')">
          <input name="delete" type="submit" class="btn btn-danger" id="delete" value="Delete"
            onclick="formsubmit('delete')" disabled>
        </div>
      </form>
    </div>
  </div>
</div>

<!--  -->
<div class="container mt-4">
  <div class="card">
    <div class="card-header bg-light" style="cursor:pointer" onclick="showhide('filterdiv','toggleimg1');">
      <div class="d-flex justify-content-between align-items-center">
        <span class="header-line pl-3">&nbsp;&nbsp;Filter the Data:</span>
        <img src="../images/minus.jpg" border="0" id="toggleimg1" name="toggleimg1" class="img-fluid"
          style="max-height: 20px;" align="absmiddle">
      </div>
    </div>
    <div class="card-body" id="filterdiv" style="display: block;">
      <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
        <div class="row">
          <div class="col-md-6 border-right">
            <div class="form-group">
              <label for="searchcriteria">Search Text:</label>
              <div id="textname" style="display:block">
                <input name="searchcriteria" type="text" class="form-control swifttext" id="searchcriteria" size="40"
                  isdatepicker="true">
              </div>
              <div id="groupname" style="display:none">
                <select name="s_productgroup" class="form-control swiftselect" id="s_productgroup" onchange="">
                  <option value="" selected="selected">Make a Selection</option>
                  <option value="null">null</option>
                  <option value="pro">pro</option>
                </select>
                <!-- Details are in javascript.js page as a function prdgroup(); -->
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="orderby">Order By:</label>
              <select name="orderby" class="form-control swiftselect" id="orderby">
                <option value="productname" selected="selected">Product Group</option>
                <option value="productname">Product Name</option>
                <option value="releasedate">Release Date</option>
                <option value="productinuse">Product In Use</option>
              </select>
            </div>
          </div>
        </div>
        <div class="mt-3">
          In:
          <div class="form-check form-check-inline">
            <input type="radio" name="databasefield" id="databasefield0" value="productname" checked="checked"
              onclick="prdname('textname',databasefield0);" class="form-check-input">
            <label class="form-check-label" for="databasefield0">Product Name</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="databasefield" id="databasefield2" value="releasedate"
              onclick="prdname('textname',databasefield2);" class="form-check-input">
            <label class="form-check-label" for="databasefield2">Release Date</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="databasefield" id="databasefield1" value="productgroup"
              onclick="prdgroup('groupname',databasefield1);" class="form-check-input">
            <label class="form-check-label" for="databasefield1">Product Group</label>
          </div>
        </div>
        <div class="text-center mt-3 float-end">
          <div id="filter-form-error"></div>
          <input name="view" type="submit" class="btn btn-primary swiftchoicebutton" id="view" value="View"
            onclick="formfilter('view');">

          <input name="view" type="submit" class="btn btn-warning swiftchoicebutton" id="view" value="Excel"
            onclick="formfilter('view');">


        </div>
      </form>
    </div>
  </div>
</div>


<!--  -->
<div class="col-md-12">
</div>
</div>
</div>
<?php

include("../navigation/footer.php");

?>