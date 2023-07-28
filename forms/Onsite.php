<?php

include("../navigation/navigation.php");

?>
<style>
  .display {
    display: flex;
    flex-direction: row;
  }
</style>
<div class="container mt-4 rounded ">
  <table class="table table-bordered bg-light" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <tbody>
      <tr onclick="showhide('maindiv','toggleimg');" class="header-line">
        <td class="bg-light">&nbsp;&nbsp;Enter the Details</td>
        <td align="right" class="bg-light">

        </td>
      </tr>
      <tr>
        <td colspan="2" valign="top">
          <div id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
              <div class="display">
                <table class="table table-bordered table1">
                  <tbody>
                    <tr class="bg-light">
                      <td valign="top">From Date:</td>
                      <td valign="top">
                        <div class="d-flex">
                          <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                            autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10"
                            isdatepicker="true">
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">To Date:</td>
                      <td valign="top">
                        <div class="d-flex">
                          <input name="todate" type="date" class="form-control" id="DPC_todate" size="30"
                            autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10"
                            isdatepicker="true">

                        </div>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Service Charge:</td>
                      <td valign="top">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="servicecharge" id="servicecharge"
                            onclick="enableoutstandingbills();">
                          <label class="form-check-label" for="servicecharge">Service Charge</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Solved By:</td>
                      <td valign="top">
                        <select name="solvedby" id="solvedby" class="form-select form-control">
                          <option value="">ALL</option>
                          <!-- Add other options here -->
                        </select>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Solved Through:</td>
                      <td valign="top">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="stremoteconnection"
                            id="stremoteconnection" value="">
                          <label class="form-check-label" for="stremoteconnection">Remote Connection</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="marketingperson" id="marketingperson"
                            value="">
                          <label class="form-check-label" for="marketingperson">Marketing Person</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="onsitevisit" id="onsitevisit" value=""
                            checked>
                          <label class="form-check-label" for="onsitevisit">Onsite Visit</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="overphone" id="overphone" value="">
                          <label class="form-check-label" for="overphone">Over Phone</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mail" id="mail" value="">
                          <label class="form-check-label" for="mail">Mail</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Anonymous:</td>
                      <td valign="top">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="anonymous" id="databasefield11"
                            value="yes">
                          <label class="form-check-label" for="databasefield11">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="anonymous" id="databasefield12" value="no">
                          <label class="form-check-label" for="databasefield12">No</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="anonymous" id="databasefield13" value=""
                            checked>
                          <label class="form-check-label" for="databasefield13">Both</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Reports on:</td>
                      <td valign="top">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="reporton" id="reporton0"
                            value="statistics">
                          <label class="form-check-label" for="reporton0">Statistics</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="reporton" id="reporton1" value="details">
                          <label class="form-check-label" for="reporton1">Details</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="reporton" id="reporton3"
                            value="pendingvisits" checked>
                          <label class="form-check-label" for="reporton3">Pending Visits</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>



                <table class="table table-bordered table2">
                  <tbody>
                    <tr class="bg-light">
                      <td valign="top">Customer Name:</td>
                      <td valign="top">
                        <input name="customername" type="text" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Product group:</td>
                      <td valign="top">
                        <span id="filterprdgroupdisplay">
                          <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                            onchange="">
                            <option value="" selected="selected">Make a Selection</option>

                          </select>
                          <!-- Details are in javascript.js page as a function prdgroup();-->
                        </span>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Product Name:</td>
                      <td valign="top">
                        <select name="productname" id="productname" class="form-select form-control swiftselect">
                          <option value="">ALL</option>

                        </select>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Status:</td>
                      <td valign="top">
                        <select name="status" class="form-select form-control swiftselect" id="status">
                          <option value="">ALL</option>
                          <option value="notyetattended" selected="selected">Un Attended</option>
                          <option value="postponed">Postponed</option>
                          <option value="inprocess">In Process</option>
                          <option value="solved">Solved</option>
                          <option value="skipped">Skipped</option>
                          <option value="unsolved">Un Solved</option>
                        </select>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Registered By:</td>
                      <td valign="top">
                        <select name="userid" id="userid" class="form-control swiftselect">
                          <option value="">ALL</option>
                        </select>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Support Unit:</td>
                      <td valign="top">
                        <select name="supportunit" class="form-control swiftselect" id="supportunit">
                          <option value="">ALL</option>

                        </select>
                      </td>
                    </tr>
                    <tr class="bg-light">
                      <td valign="top">Complaint Id:</td>
                      <td valign="top">
                        <input name="complaintid" type="text" class="form-control swifttext" id="complaintid" size="30"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="container bg-light">
                <div class="row">
                  <div class="col-md-8">
                    <div id="form-error"></div>
                  </div>
                  <div class="col-md-4 float-right bg-light " align="right">
                    <input name="view" type="submit" class="btn btn-primary " id="view" value="View"
                      onclick="formsubmit('toview');">
                    <input name="toexcel" type="submit" class="btn btn-warning" id="toexcel" value="To Excel"
                      onclick="formsubmit('toexcel');">
                  </div>
                </div>
              </div>

            </form>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<!-- stop -->

<div class="col-md-12">
</div>
</div>
</div>
<?php

include("../navigation/footer.php");

?>