<?php

include("../navigation/navigation.php");

?>
<!-- content -->



<style>
  /* Add any additional custom CSS here */


  .display {
    display: flex;
    flex-direction: row;
  }
</style>
</head>

<body>
  <div class="container mt-4">
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
                      <!--  -->


                      <tr class="bg-white">
                        <td valign="top">User ID:</td>
                        <td valign="top">
                          <input name="customername" type="text" class="form-control" id="customername" size="20"
                            autocomplete="off" isdatepicker="true">
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">password:</td>
                        <td valign="top">
                          <input name="customerid" type="password" class="form-control" id="customername" size="20"
                            autocomplete="off" isdatepicker="true">
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Type:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Location:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Reporting Authority:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Support unit:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Existing User:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">User name</td>
                        <td valign="top">
                          <input name="customerid" type="text" class="form-control" id="customername" size="20"
                            autocomplete="off" isdatepicker="true">
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Gender:</td>
                        <td valign="top">
                          <span id="filterprdgroupdisplay">
                            <select name="s_productgroup" class="form-select swiftselect form-control"
                              id="s_productgroup" onchange="">
                              <option value="" selected="selected">
                                Make a Selection
                              </option>
                              <option value="">
                                Male
                              </option>
                              <option value="">
                                Female
                              </option>

                            </select>
                            <!-- Details are in javascript.js page as a function prdgroup();-->
                          </span>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Mobile:</td>
                        <td valign="top">
                          <input name="customerid" type="tel" class="form-control" id="customername" size="20"
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


                    </tbody>
                  </table>



                  <table class="table table-bordered table2">
                    <tbody>
                      <tr class="bg-white">
                        <td valign="top">Present Address:</td>
                        <td valign="top">
                          <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                            data-gramm="false" wt-ignore-input="true"></textarea>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Permanent Address:</td>
                        <td valign="top">
                          <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                            data-gramm="false" wt-ignore-input="true"></textarea>
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Date of joining:</td>
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
                        <td valign="top">Date of Leaving:</td>
                        <td valign="top">
                          <input name="complaintid" type="date" class="form-control swifttext" id="complaintid"
                            size="30" autocomplete="off" isdatepicker="true">
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Contact Number[In case of
                          Emergency]:</td>
                        <td valign="top">
                          <input name="complaintid" type="text" class="form-control swifttext" id="complaintid"
                            size="30" autocomplete="off" isdatepicker="true">
                        </td>
                      </tr>
                      <tr class="bg-white">
                        <td valign="top">Emergency Remarks:</td>
                        <td valign="top">
                          <input name="complaintid" type="text" class="form-control swifttext" id="complaintid"
                            size="30" autocomplete="off" isdatepicker="true">

                        </td>
                      </tr>

                      <tr class="bg-white">
                        <td valign="top">Disable Login:</td>
                        <td valign="top">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">

                            </label>
                          </div>
                        </td>
                      </tr>





                      <!--  -->
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
                      <input name="delete" type="submit" class="btn btn-danger" id="toexcel" value="Delete"
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

  <!--  -->

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
                  <input type="radio" name="databasefield" id="databasefield0" value="username" checked="checked"
                    class="form-check-input">
                  <label class="form-check-label" for="databasefield0">User Name</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" id="databasefield1" value="type" class="form-check-input">
                  <label class="form-check-label" for="databasefield1">Type</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" value="locationname" id="databasefield2"
                    class="form-check-input">
                  <label class="form-check-label" for="databasefield2">Location Name</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" value="reportingauthority" id="databasefield3"
                    class="form-check-input">
                  <label class="form-check-label" for="databasefield3">Reporting Authority</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" value="supportunit" id="databasefield4"
                    class="form-check-input">
                  <label class="form-check-label" for="databasefield4">Support Unit</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" value="existinguser" id="databasefield5"
                    class="form-check-input">
                  <label class="form-check-label" for="databasefield5">Existing User</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="databasefield" value="gender" id="databasefield6" class="form-check-input">
                  <label class="form-check-label" for="databasefield6">Gender</label>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center float-end mt-3">
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
  <div class="col-md-12">
  </div>
  </div>
  </div>
  <?php

  include("../navigation/footer.php");

  ?>