<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    <link href="../css/examples.css" rel="stylesheet">
    <link href="../vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>
<body>
  

<div class="container mt-4">
  <div class="card border " class="rounded" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
      View Profile
      <span class="float-right">
        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle" class="float-end">
      </span>
    </div>
    <div id="maindiv">
      <div class="card-body ">
        <div class="row ">
          <div class="col-md-6 ">
            <table class="table table-bordered ">
              <tbody>
                <tr>
                  <td><strong>User Name:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Gender:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mobile:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Designation:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of Birth:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Present Address:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered ">
              <tbody>
                <tr>
                  <td><strong>Permanent Address:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of joining:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Personal Email:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Official Email:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Contact Number [In case of Emergency]:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Emergency Remarks:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<style>
  .display {
    display: flex;
    flex-direction: row;
  }

  .up {
    display: flex;
    flex-direction: row;
    float: right;
    margin-right: 5px;
  }
</style>
<div class="container mt-4 rounded-1">
  <table class="table table-bordered" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <tbody>
      <tr onclick="showhide('maindiv','toggleimg');" class="header-line">
        <td class="bg-light">&nbsp;&nbsp;Enter/Edit/View Details</td>
        <td align="right" class="bg-light">
          <div align="right"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
              align="absmiddle"></div>
        </td>
      </tr>
      <tr>
        <td colspan="2" valign="top" class="bg-light">
          <div id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
              <div class="display">
                <table class="table table-bordered table1">
                  <tbody>
                    <tr class="bg-white">
                      <td valign="top">Full Name:</td>
                      <td valign="top">
                        <input name="customername" type="text" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">

                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Gender:</td>
                      <td valign="top">
                        <span id="filterprdgroupdisplay">
                          <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup"
                            onchange="">
                            <option value="" selected="selected">
                              ALL
                            </option>

                          </select>
                          <!-- Details are in javascript.js page as a function prdgroup();-->
                        </span>
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">mobile:</td>
                      <td valign="top">
                        <input name="customername" type="tel" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>

                    <tr class="bg-white">
                      <td valign="top">Designation:</td>
                      <td valign="top">
                        <input name="customerid" type="text" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Date of Birth:</td>
                      <td valign="top">
                        <input name="customerid" type="date" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>

                    <tr class="bg-white">
                      <td valign="top">Present Address:</td>
                      <td valign="top">
                        <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                          data-gramm="false" wt-ignore-input="true"></textarea>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table2">
                  <tbody>
                    <tr class="bg-white">
                      <td valign="top">Permanent Address:</td>
                      <td valign="top">
                        <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                          data-gramm="false" wt-ignore-input="true"></textarea>
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Date of joining :</td>
                      <td valign="top">
                        <input name="customerid" type="date" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Personal Email:</td>
                      <td valign="top">
                        <input name="customerid" type="email" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Official Email:</td>
                      <td valign="top">
                        <input name="customerid" type="email" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Contact Number[In case of Emergency]:</td>
                      <td valign="top">
                        <input name="customerid" type="tel" class="form-control" id="customername" size="20"
                          autocomplete="off" isdatepicker="true">
                      </td>
                    </tr>
                    <tr class="bg-white">
                      <td valign="top">Remarks[Details of Person in case of Emergency]:</td>
                      <td valign="top">
                        <input name="customerid" type="tel" class="form-control" id="customername" size="20"
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
                    <input name="new" type="submit" class="btn btn-secondary " id="view" value="New"
                      onclick="formsubmit('toview');">
                    <input name="save" type="submit" class="btn btn-primary " id="view" value="Save"
                      onclick="formsubmit('toview');">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </td>
      </tr>
  </table>
</div>
<!--  -->
<div class="container mt-3 ">
  <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
    <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
      Enter / Edit / View Details
      <span class="float-end">
        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
      </span>
    </div>
    <div id="maindiv" style="display: block;">
      <div class="card-body">
        <form action="" method="post" name="submitform" id="submitform">
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Old Password:</label>
            <div class="col-sm-9">
              <input name="password" type="password" class="form-control" id="password" size="30">
            </div>
          </div> <br>
          <div class="form-group row">
            <label for="newpassword" class="col-sm-3 col-form-label">New Password:</label>
            <div class="col-sm-9">
              <input name="newpassword" type="password" class="form-control" id="newpassword" size="30">
            </div>
          </div> <br>
          <div class="form-group row">
            <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm Password:</label>
            <div class="col-sm-9">
              <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" size="30">
            </div>
          </div> <br>
          <div class="form-group row">
            <div class="col-sm-9 offset-sm-3" id="form-error"></div>
          </div>
          <div class="form-group row">
            <div class="col-sm-9 offset-sm-3 ">
              <input name="update" type="submit" class="btn btn-primary up" id="update" value="Update">
              <input name="clear" type="reset" class="btn btn-secondary up" id="clear" value="Clear"
                onclick="document.getElementById('form-error').innerHTML = ''">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="col-md-12">
</div>
</div>
</div>
<br>

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