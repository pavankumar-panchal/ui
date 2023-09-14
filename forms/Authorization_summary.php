<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("../functions/phpfunctions.php");
if ($usertype <> 'TEAMLEADER' && $usertype <> 'MANAGEMENT' && $usertype <> 'ADMIN')
    // header("location:../index.php");

    $fetch = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_callregister WHERE authorized = 'no' ORDER BY slno;");
$calls = $fetch['count'];
$fetch1 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_emailregister WHERE authorized = 'no' ORDER BY slno;");
$emails = $fetch1['count'];
$fetch2 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_errorregister WHERE authorized = 'no' ORDER BY slno;");
$errors = $fetch2['count'];
$fetch3 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_inhouseregister WHERE authorized = 'no' ORDER BY slno;");
$inhouse = $fetch3['count'];
$fetch4 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_onsiteregister WHERE authorized = 'no' ORDER BY slno;");
$onsite = $fetch4['count'];
$fetch5 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_referenceregister WHERE authorized = 'no' ORDER BY slno;");
$references = $fetch5['count'];
$fetch6 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_requirementregister WHERE authorized = 'no' ORDER BY slno;");
$requirements = $fetch6['count'];
$fetch7 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_skyperegister WHERE authorized = 'no' ORDER BY slno;");
$skype = $fetch7['count'];
$fetch8 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_invoice WHERE authorized = 'no' ORDER BY slno;");
$invoices = $fetch8['count'];
$fetch9 = runmysqlqueryfetch("SELECT COUNT(*) AS count FROM ssm_receipts WHERE authorized = 'no' ORDER BY slno;");
$receipts = $fetch9['count'];

$total = $calls + $emails + $errors + $inhouse + $onsite + $references + $requirements + $skype + $invoices + $receipts;
include("../navigation/navigation.php");


?>
<style>
    label {
        margin-top: 15px;
    }
</style>





<div class="container l-12">
    <table class="table table-bordered"
        style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); margin-top:50px; border-radius:10px; width: 98%; margin-left: 10px; ">
        <thead style="border-radius:10px;">
            <tr style="cursor:pointer; border-radius:10px;" onclick="showhide('pendingauthorization','toggleimg');">
                <th class="header-line card-header bg-light" colspan="2">
                    &nbsp;&nbsp;Authorization Summary - You have <strong>
                        <?php echo ($total); ?>
                    </strong> Records Pending for Authorization
                    <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                            align="absmiddle"></div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="50%">
                    <table class="table">
                        <tbody>
                            <tr class="bg-white">

                                <td valign="top">Calls:</td>
                                <td valign="top">
                                    <?php echo ($calls); ?>

                                </td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Emails:</td>
                                <td valign="top">
                                    <?php echo ($emails); ?>

                                </td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Errors:</td>
                                <td valign="top">
                                    <?php echo ($errors); ?>

                                </td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Inhouse:</td>
                                <td valign="top">
                                    <?php echo ($inhouse); ?>

                                </td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Onsite:</td>
                                <td valign="top">
                                    <?php echo ($onsite); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="50%">
                    <table class="table">
                        <tbody>
                            <tr class="bg-white">
                                <td valign="top">Reference:</td>
                                <td valign="top">
                                    <?php echo ($references); ?>

                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Requirement:</td>
                                <td valign="top">
                                    <?php echo ($requirements); ?>

                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Skype:</td>
                                <td valign="top">
                                    <?php echo ($skype); ?>


                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Invoice:</td>
                                <td valign="top">
                                    <?php echo ($invoices); ?>

                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Receipts:</td>
                                <td valign="top">
                                    <?php echo ($receipts); ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- second form  -->
    <div class="container">
        <div class="card mt-4" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius: 10px;">
            <div class="card-header bg-light" style="cursor:pointer;">
                <h6 class="m-0">Enter / Edit / View Details</h6>
            </div>
            <div class="card-body">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="form-group text-center mb-4 mt-4 ">
                        <div id="displayregisters">
                            <h6 class="">Make A Selection of record from the grid below</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <label for="authorizedgroup">Category:</label>
                                <select name="authorizedgroup" id="authorizedgroup" class="form-select swiftselect">
                                    <option value="">Make a selection</option>
                                    <?php
                                    include('../inc/authorizinggroup.php');
                                    ?>
                                </select>
                            </div>

                            <div class="form-group mt-4">
                                <label for="authorizedgroup">Authorized:</label>
                                <div class="opt d-flex flex-row">
                                    <div class="form-check me-3 align-items-center">
                                        <label class="form-check-label" for="databasefield11">
                                            <input class="form-check-input" type="radio" name="authorizedatabasefield"
                                                id="authorizedatabasefield0" value="yes" checked="checked"> Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">
                                        <label class="form-check-label" for="databasefield12">
                                            <input class="form-check-input" type="radio" name="authorizedatabasefield"
                                                id="authorizedatabasefield1" value="no"> No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label>Flag the Entry:</label>
                                <div class="opt d-flex flex-row">
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield21">
                                            <input class="form-check-input" type="radio" name="flagdatabasefield"
                                                id="flagdatabasefield0" value="yes">Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield22">
                                            <input class="form-check-input" type="radio" name="flagdatabasefield"
                                                id="flagdatabasefield1" value="no"> No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label>Publish:</label>
                                <div class="opt d-flex flex-row mt-2">
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield31">
                                            <input class="form-check-input" type="radio" name="publishdatabaseefield"
                                                id="publishdatabasefield0" value="yes"> Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield32">
                                            <input class="form-check-input" type="radio" name="publishdatabaseefield"
                                                id="publishdatabasefield2" value="no" checked="checked"> No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="teamleaderremarks" class="float-start">Remarks:</label>
                        <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                            data-gramm="false" wt-ignore-input="true"></textarea>
                        <input type="hidden" name="lastslno" id="lastslno" value="">
                        <input type="hidden" name="registervalue" id="registervalue" value="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="loggedusertype" id="loggedusertype"
                            value="<?php echo ($usertype); ?>">
                        <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>">
                        <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                            value="<?php echo ($reportingauthoritytype); ?>">
                    </div>
                    <div class="form-group text-end mt-4">
                        <div id="form-error"></div>
                        <input name="save" type="submit" class="btn btn-primary swiftchoicebutton" id="save"
                            value="Save" onclick="formsubmit('save')">
                        <input name="new" type="reset" class="btn btn-secondary swiftchoicebutton" id="new"
                            value="Clear" onclick="clearinnerhtml();">
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!--  third table-->
    <div class="container users_la mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                    <div class="card-header bg-light">
                        Filter data
                    </div>
                    <div class="card-body">
                        <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- First column content -->
                                    <div class="mb-3">
                                        <!-- Input fields and labels here -->
                                        <label for="customername" class="form-label">From Date:</label>
                                        <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                            autocomplete="off" isdatepicker="true"
                                            value="<?php datetimelocal('d-m-Y'); ?>">
                                        <label for="customername" class="form-label">To Date:</label>
                                        <input name="todate" type="date" class="form-control" id="DPC_todate" size="20"
                                            autocomplete="off" isdatepicker="true"
                                            value="<?php datetimelocal('d-m-Y'); ?>">
                                        <label for="customername" class="form-label">Customer Name:</label>
                                        <input name="s_customername" type="text" class="form-control swifttext"
                                            id="s_customername" size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Customer ID:</label>
                                        <input name="s_customerid" type="text" class="form-control swifttext"
                                            id="s_customerid" size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Category:</label>
                                        <select name="s_category" class="form-select swiftselect form-control"
                                            id="s_category" onchange="">
                                            <option value="" selected="selected">ALL</option>
                                            <option value="BLR">Bangalore</option>
                                            <option value="CSD">CSD</option>
                                            <option value="KKG">KKG</option>
                                        </select>
                                        <label for="customername" class="form-label">Flag:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp;
                                                    <input class="form-check-input" type="radio"
                                                        name="s_flagdatabasefield" id="s_flagdatabasefield0"
                                                        value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield12">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_flagdatabasefield" id="s_flagdatabasefield1"
                                                        value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield13">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_flagdatabasefield" id="s_flagdatabasefield2"
                                                        value="both">Both</span>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">Publish Record:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="s_publishdatabasefield0">&nbsp;
                                                    <input class="form-check-input" type="radio"
                                                        name="s_publishdatabasefield" id="s_publishdatabasefield0"
                                                        value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="s_publishdatabasefield1">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_publishdatabasefield" id="s_publishdatabasefield1"
                                                        value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="s_publishdatabasefield1">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_publishdatabasefield" id="s_publishdatabasefield1"
                                                        value="both" checked="checked">Both</span>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">problem:</label>
                                        <input name="s_problem" type="text" class="form-control swifttextarea"
                                            id="s_problem" size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Transferred To:</label>
                                        <select name="s_transferredto" class="form-select swiftselect form-control"
                                            id="s_transferredto" onchange="">
                                            <option value="" selected="selected">All</option>
                                            <option value="none" selected="selected">None</option>
                                            <?php include('../inc/useridselection.php'); ?>
                                            <option value="registration">Registration Department</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <!-- Additional input fields for the first column -->

                                </div>
                                <div class="col-md-6">
                                    <!-- Second column content -->
                                    <div class="mb-3">
                                        <!-- Input fields and labels here -->
                                        <label for="customername" class="form-label">Authorized:</label>

                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield11">&nbsp;
                                                    <input class="form-check-input" type="radio"
                                                        name="s_authorizedatabasefield" id="s_authorizedatabasefield0"
                                                        value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_authorizedatabasefield" id="s_authorizedatabasefield1"
                                                        value="no">No</label>
                                            </div>

                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield13">
                                                    <input class="form-check-input" type="radio"
                                                        name="s_authorizedatabasefield" id="s_authorizedatabasefield2"
                                                        value="both">Both</span>
                                            </div>
                                        </div>

                                        <label for="teamleaderremarks" class="form-label">Status:</label>
                                        <input name="s_status" type="text" class="form-control" id="s_status" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <!-- second div -->
                                        <label for="customername" class="form-label">Entered By:</label>
                                        <select name="s_userid" class="form-select swiftselect form-control"
                                            id="s_userid" onchange="">
                                            <option value="" selected="selected">All</option>
                                            <?php include('../inc/useridselectionreports.php'); ?>

                                        </select>
                                        <label for="customername" class="form-label">Product group:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="filterprdgroupdisplay" onchange="">

                                            <span id="filterprdgroupdisplay">
                                                <?php include('../inc/productgroup.php');
                                                productname('s_productgroup', ''); ?>
                                                <!-- Details are in javascript.js page as a function prdgroup();-->
                                            </span>
                                        </select>
                                        <label for="customername" class="form-label">Product Name: </label>
                                        <select name="s_productname" class="form-select swiftselect form-control"
                                            id="s_productname" onchange="">
                                            <option value="" selected="selected">ALL
                                            </option>
                                            <?php include('../inc/productfilter.php'); ?>
                                        </select>
                                        <label for="customername" class="form-label">Compliant ID(Register ID
                                            ,etc):</label>
                                        <input name="s_compliantid" type="text" class="form-control" id="s_compliantid"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Support Unit: </label>
                                        <select name="s_supportunit" class="form-select swiftselect form-control"
                                            id="s_supportunit" onchange="">
                                            <option value="">ALL</option>
                                            <?php include('../inc/supportunit.php'); ?>
                                        </select>
                                        <label for=""> Order By</label>
                                        <select name="orderby" class="form-select form-control swiftselect"
                                            id="orderby">
                                            <option value="callertype">Caller Type</option>
                                            <option value="category">Category</option>
                                            <option value="compliantid" selected="selected">Compliant ID</option>
                                            <option value="customerid">Customer ID</option>
                                            <option value="customername">Registered Name</option>
                                            <option value="date">Date</option>
                                            <option value="userid">Entered By</option>
                                            <option value="problem">Problem</option>
                                            <option value="productgroup">Product Group</option>
                                            <option value="productname">Product Name</option>
                                            <option value="status">Status</option>
                                            <option value="callcategory">Call Category</option>
                                            <option value="transferredto">Transferred To</option>
                                            <option value="time">Time</option>
                                        </select>

                                        <div class="bg-white p-3" style="border-top:1px solid #d1dceb;">
                                            <div class="row">
                                                <!-- <div class="col-md-2">In:</div> -->
                                                <div class="col-md-10">
                                                    <label class="me-3"> In:
                                                        <input name="databasefield" type="radio" value="call"
                                                            checked="checked" class="form-check-input"
                                                            id="databasefield0">
                                                        Call
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="email"
                                                            class="form-check-input" id="databasefield0">
                                                        Email
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="error"
                                                            class="form-check-input" id="databasefield0">
                                                        Error
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="inhouse"
                                                            class="form-check-input" id="databasefield0">
                                                        Inhouse
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="onsite"
                                                            class="form-check-input" id="databasefield0">
                                                        Onsite
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="reference"
                                                            class="form-check-input" id="databasefield0">
                                                        Reference
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="requirement"
                                                            class="form-check-input" id="databasefield0">
                                                        Requirement
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="skype"
                                                            class="form-check-input" id="databasefield0">
                                                        Skype
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="invoice"
                                                            class="form-check-input" id="databasefield0">
                                                        Invoice
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="databasefield" value="receipt"
                                                            class="form-check-input" id="databasefield0">
                                                        Receipts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Additional input fields for the second column -->
                                    </div>
                                </div>
                                <!-- Additional textarea fields go here -->
                                <div class="text-end mt-3">
                                    <button name="new" type="reset" class="btn btn-secondary">New</button>
                                    <button name="view" type="submit" class="btn btn-primary swiftchoicebutton"
                                        id="view" onclick="formfilter('view'); ">View</button>
                                    <button name="" type="submit" class="btn btn-warning"
                                        onclick="formfilter('toexcel');">To Excel</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 mt-4">
        <div id="wrapper" class="table-container"
            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); padding:10px; border-radius:10px"></div>
    </div>

    <!--  -->
    <div class="col-md-12">
        <div id="wrapper" class="table-container"></div>

    </div>
</div>
</div>

<?php


include("../navigation/footer.php");
?>