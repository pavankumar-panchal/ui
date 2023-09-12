<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("../navigation/navigation.php");
require("../functions/phpfunctions.php");

if (!isset($_POST['fullname'])) {
  $_POST['fullname'] = null;
}
if (!isset($_POST['presentaddress'])) {
  $_POST['presentaddress'] = null;
}
if (!isset($_POST['permanentaddress'])) {
  $_POST['permanentaddress'] = null;
}
if (!isset($_POST['emergencynumber'])) {
  $_POST['emergencynumber'] = null;
}
if (!isset($_POST['emergencyremarks'])) {
  $_POST['emergencyremarks'] = null;
}
if (!isset($_POST['dob'])) {
  $_POST['dob'] = null;
}
if (!isset($_POST['doj'])) {
  $_POST['doj'] = null;
}
if (!isset($_POST['designation'])) {
  $_POST['designation'] = null;
}
if (!isset($_POST['personalemail'])) {
  $_POST['personalemail'] = null;
}
if (!isset($_POST['officialemail'])) {
  $_POST['officialemail'] = null;
}
if (!isset($_POST['mobile'])) {
  $_POST['mobile'] = null;
}
if (!isset($_POST['gender'])) {
  $_POST['gender'] = null;
}
if (!isset($message)) {
  $message = null;
}


$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$presentaddress = $_POST['presentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$mobile = $_POST['mobile'];
$emergencynumber = $_POST['emergencynumber'];
$emergencyremarks = $_POST['emergencyremarks'];
$dob = $_POST['dob'];
$doj = $_POST['doj'];
$designation = $_POST['designation'];
$personalemail = $_POST['personalemail'];
$officialemail = $_POST['officialemail'];

$query = "SELECT * FROM ssm_users where slno = '" . $user . "'";
$fetch = runmysqlqueryfetch($query);

$d_fullname = $fetch['fullname'];
$d_gender = $fetch['gender'];
$d_presentaddress = $fetch['presentaddress'];
$d_permanentaddress = $fetch['permanentaddress'];
$d_mobile = $fetch['mobile'];
$d_emergencynumber = $fetch['emergencynumber'];
$d_emergencyremarks = $fetch['emergencyremarks'];
$d_dob = changedateformat($fetch['dob']);
$d_doj = changedateformat($fetch['doj']);
$d_designation = $fetch['designation'];
$d_personalemail = $fetch['personalemail'];
$d_officialemail = $fetch['officialemail'];

if (!isset($message)) {
  $message = null;
}



if (isset($_POST["update"])) {
  $password = trim($_POST["password"]);
  $newpassword = trim($_POST["newpassword"]);
  $confirmpassword = trim($_POST["confirmpassword"]);
  $message = '';

  $query = "SELECT  AES_DECRYPT(loginpassword,'imaxpasswordkey') as password FROM ssm_users where slno = '" . $user . "'";
  $fetch = runmysqlqueryfetch($query);
  if ($password == '' || $newpassword == '' || $confirmpassword == '')
    $message = '<div class="errorbox"> Enter the old and/or new and/or confirm passwords </div>';
  elseif ($password <> $fetch['password'])
    $message = '<div class="errorbox"> The Password does not match with the user </div>';
  elseif ($newpassword == $fetch['password'])
    $message = '<div class="errorbox"> Please Enter a different password as old and new passwords are same </div>';
  elseif ($newpassword <> $confirmpassword)
    $message = '<div class="errorbox"> New and confirms passwords does not match. </div>';
  else {
    $query = "UPDATE ssm_users SET loginpassword = AES_ENCRYPT('" . $newpassword . "','imaxpasswordkey') WHERE slno = '" . $user . "'";
    $result = runmysqlquery($query);
    $message = '<div class="successbox"> Password changed sucessfully. </div>';
  }
}

?>

<style>
  .form-group label {
    margin: 10px 0px 10px 0px;
  }

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


<div class="container mt-4">
  <div class="card border " class="rounded" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);margin-top: 50px;">
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
                    <font color="#FF6200">
                      <?php echo ($d_fullname); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Gender:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_gender); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mobile:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_mobile); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Designation:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_designation); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of Birth:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_dob); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Present Address:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_presentaddress); ?>
                    </font>
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
                    <font color="#FF6200">
                      <?php echo ($d_permanentaddress); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of joining:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_doj); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Personal Email:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_personalemail); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Official Email:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_officialemail); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Contact Number [In case of Emergency]:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_emergencynumber); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Emergency Remarks:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_emergencyremarks); ?>
                    </font>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container mt-4 col-lg-12">
    <div class="card rounded-1">
      <div class="card-header header-line" onclick="showhide('maindiv','toggleimg');">
        <div class="row">
          <div class="col-md-14">
            Enter/Edit/View Details
          </div>

        </div>
      </div>
      <div class="card-body" id="maindiv">
        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="customername">Full Name:</label>
                <input name="fullname" type="text" class="form-control swifttext" id="fullname" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="s_productgroup">Gender:</label>
                <select name="gender" class="form-select swiftselect form-control" id="gender">
                  <!-- <option value="" selected="selected">ALL</option> -->
                  <?php if ($d_gender == '') { ?>
                    <option value="" selected="selected">Make A Selection</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  <?php } elseif ($d_gender == 'male') { ?>
                    <option value="">Make A Selection</option>
                    <option value="male" selected="selected">Male</option>
                    <option value="female">Female</option>
                  <?php } elseif ($d_gender == 'female') { ?>
                    <option value="">Make A Selection</option>
                    <option value="male">Male</option>
                    <option value="female" selected="selected">Female</option>
                  <?php } ?>
                </select>
                <!-- Details are in javascript.js page as a function prdgroup();-->
              </div>

              <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input name="mobile" type="tel" class="form-control swifttext" id="mobile" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="mobile ">Designation:</label>
                <input name="designation" type="text" class="form-control swifttext" id="designation"
                  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Date of Birth:</label>
                <input name="dob" type="date" class="form-control swifttext" id="DPC_dob" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Present Address:</label>
                <textarea name="presentaddress" cols="45" class="form-control swifttextarea" id="presentaddress"
                  data-gramm="false" wt-ignore-input="true"><?php echo ($d_presentaddress); ?></textarea>
              </div>
              <!-- Repeat similar pattern for other form inputs -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="teamleaderremarks">Present Address:</label>
                <textarea name="permanentaddress" cols="45" class="form-control swifttextarea" id="permanentaddress"
                  data-gramm="false" wt-ignore-input="true"><?php echo ($d_permanentaddress); ?></textarea>
              </div>
              <div class="form-group">
                <label for="mobile">Date of Joining:</label>
                <input name="doj" type="date" class="form-control swifttext" id="DPC_doj" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Personal Email:</label>
                <input name="personalemail" type="email" class="form-control swifttext" id="personalemail"
                  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Official Email:</label>
                <input name="officialemail" type="email" class="form-control swifttext" id="officialemail"
                  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Contatc Number[In case of Emergency]:</label>
                <input name="emergencynumber" type="text" class="form-control swifttext" id="emergencynumber"
                  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Remarks[Details of person in case of Emergency]:</label>
                <input name="emergencyremarks" type="text" class="form-control swifttext" id="emergencyremarks"
                  autocomplete="off">
              </div>
              <!-- Repeat similar pattern for other form inputs -->
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-8">
                <div id="form-error"></div>
              </div>
              <div class="col-md-4 text-end mt-3">
                <input name="clear" type="reset" class="btn btn-secondary" id="view" value="New"
                  onclick="formsubmit('toview');">
                <input name="update" type="submit" class="btn btn-primary swiftchoicebutton" id="update" value="update"
                  onclick="formsubmit('update');">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
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
                <input name="password" type="password" class="form-control swifttext" id="password" size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <label for="newpassword" class="col-sm-3 col-form-label">New Password:</label>
              <div class="col-sm-9">
                <input name="newpassword" type="password" class="form-control swifttext" id="newpassword" size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm Password:</label>
              <div class="col-sm-9">
                <input name="confirmpassword" type="password" class="form-control swifttext" id="confirmpassword"
                  size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <div class="col-sm-9 offset-sm-3" id="form-error">

                <?php
                $message = "";
                echo ($message)
                  ?>
              </div>
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



<?php
include("../navigation/footer.php");

?>