<?php
include("../navigation/navigation.php");
?>


<div class="container mt-4 ">
  <div class="table-responsive ">
    <table class="table table-bordered  rounded-3"
      style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); overflow: hidden; margin-top: 50px;">
      <thead>
        <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
          <th class="header-line pl-3 bg-light">Enter Details </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div id="maindiv" style="display: block;">
              <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="userid">Executive Name:</label>
                      <select name="userid" id="userid" class="form-select form-control">
                        <option value="">Make a selection</option>
                        <!-- Add other options here -->
                        <?php include('../inc/a-useridselectionreports.php'); ?>

                      </select>
                      <input type="hidden" name="lastslno" id="lastslno" value="" />
                      <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>" />
                      <input type="hidden" name="loggedusertype" id="loggedusertype"
                        value="<?php echo ($usertype); ?>" />
                      <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                        value="<?php echo ($reportingauthority); ?>" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="month">Month:</label>
                      <select name="month" id="month" class="form-select form-control">
                        <option value="">Make a selection</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December </option>
                        <!-- Add other options here -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="year">Year:</label>
                      <select name="year" id="year" class="form-select form-control">
                        <option value="">Make a selection</option>
                        <!-- Add other options here -->
                        <?php
                        $query = "SELECT DISTINCT LEFT(logindate,4) AS year FROM ssm_usertime WHERE LEFT(logindate,4) <>'0000' ORDER BY LEFT(logindate,4) desc;";
                        $result = runmysqlquery($query);
                        while ($fetch = mysqli_fetch_array($result)) {
                          echo ('<option value="' . $fetch['year'] . '">' . $fetch['year'] . '</option>');
                        }

                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mt-3" align="right">
                  <div class="col-md-12 text-right">
                    <div class="form-group">
                      <div id="form-error"></div>
                    </div>
                    <button type="button" class="btn btn-primary" id="display" onclick="attendancedisplay() "
                      name="display">Display</button>
                    &nbsp;&nbsp;&nbsp;
                    <a href="./index.php?a_link=attendance_report_adv" class="btn btn-primary">Advanced</a>
                  </div>
                </div>
              </form>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p class="header-line">View Records:</p>
    </div>
    <div class="col-md-7">
      <p class="header-line"><span id="tabgroupgridwb1"></span></p>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row text-center">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3">
          <img src="../images/white-box.gif" alt="Absent" class="box-icon" />
          <p>Absent</p>
        </div>
        <div class="col-md-3">
          <img src="../images/orange-box.gif" alt="Holiday" class="box-icon" />
          <p>Holiday</p>
        </div>
        <div class="col-md-3">
          <img src="../images/blue-box.gif" alt="Present on Holiday" class="box-icon" />
          <p>Present on Holiday</p>
        </div>
        <div class="col-md-3">
          <img src="../images/yellow-box.gif" alt="Half Day" class="box-icon" />
          <p>Half Day</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <img src="../images/green-box.gif" alt="Present" class="box-icon" />
          <p>Present</p>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<style>
  .header-line {
    padding: 0;
  }

  .box-icon {
    border: 1px solid #666666;
    margin: 0 auto;
  }
</style>


<?php

include("../navigation/footer.php");

?>