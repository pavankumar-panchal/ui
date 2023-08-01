<?php

include("../navigation/navigation.php");

?>
<style>
    .display{
        display: flex;
        flex-direction: row;
    }
</style>
<div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Options</span>
            </li>
            <li class="breadcrumb-item active"><span>Record Authorization</span></li>
        </ol>
    </nav>
</div>
<!-- </header>  -->

<!-- content -->
<div class="container mt-4 ">
    <table class="table table-bordered table-striped" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <thead>
            <tr style="cursor:pointer" onclick="showhide('pendingauthorization','toggleimg');">
                <th class="header-line bg-light" colspan="2">
                    &nbsp;&nbsp;Authorization Summary - You have <strong>0</strong> Records Pending
                    for
                    Authorization
                    <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                            align="absmiddle"></div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="50%">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-white">

                                <td valign="top">Calls:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Emails:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Errors:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Inhouse:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Onsite:</td>
                                <td valign="top">0</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="50%">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-white">
                                <td valign="top">Reference:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Requirement:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Skype:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Invoice:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Receipts:</td>
                                <td valign="top">0</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- second form  -->
    <div class="container mt-4">
        <table class="table table-bordered table-striped" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <thead>
                <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                    <th class="header-line bg-light" colspan="2">
                        &nbsp;&nbsp;Enter / Edit / View Details
                        <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                align="absmiddle"></div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" valign="top">
                        <div id="maindiv" style="display: block;">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <table class="table table-bordered bg-white">
                                    <tbody>
                                        <tr>
                                            <td valign="middle" align="center"
                                                style="border-bottom:1px solid #d1dceb; padding:0" height="170">
                                                <div id="displayregisters"><img src="../images/warn.gif" border="0"
                                                        align="absmiddle">&nbsp;
                                                    <strong>Make A Selection of record from the grid
                                                        below</strong>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="authorizedgroup">Category:</label>
                                                            <select name="solvedby" id="solvedby"
                                                                class="form-select form-control">
                                                                <option value="">Make a selection
                                                                </option>
                                                                <!-- Add other options here -->
                                                            </select>
                                                        </div>
                                                        <br>
                                                        <div class="form-group"
                                                            style="display: flex; flex-direction: row;">
                                                            <label>Authorized:</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="authorizedatabasefield"
                                                                    id="authorizedatabasefield0" value="yes"
                                                                    checked="checked" class="form-check-input">
                                                                <label for="authorizedatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="authorizedatabasefield"
                                                                    id="authorizedatabasefield1" value="no"
                                                                    class="form-check-input">
                                                                <label for="authorizedatabasefield1"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="margin-top:20px;">
                                                        <div class="form-group "
                                                            style="display: flex; flex-direction: row;">
                                                            <label>Flag the Entry:</label>
                                                            &nbsp;&nbsp;&nbsp;

                                                            <div class="form-check">
                                                                <input type="radio" name="flagdatabasefield"
                                                                    id="flagdatabasefield0" value="yes"
                                                                    class="form-check-input">
                                                                <label for="flagdatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="flagdatabasefield"
                                                                    id="flagdatabasefield1" value="no" checked="checked"
                                                                    class="form-check-input">
                                                                <label for="flagdatabasefield1"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="form-group"
                                                            style="display: flex; flex-direction: row; word-spacing: 10px; margin-top: 10px ;">
                                                            <label>Publish:</label> &nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="publishdatabasefield"
                                                                    id="publishdatabasefield0" value="yes"
                                                                    class="form-check-input">
                                                                <label for="publishdatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="publishdatabasefield"
                                                                    id="publishdatabasefield2" value="no"
                                                                    checked="checked" class="form-check-input">
                                                                <label for="publishdatabasefield2"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="middle"
                                                style="padding-right:15px; border-top:1px solid #d1dceb;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="teamleaderremarks"
                                                                class="float-start">Remarks:</label>
                                                            <textarea name="teamleaderremarks" cols="45"
                                                                class="form-control" id="teamleaderremarks"
                                                                data-gramm="false" wt-ignore-input="true"></textarea>
                                                            <input type="hidden" name="lastslno" id="lastslno" value="">
                                                            <input type="hidden" name="registervalue" id="registervalue"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="loggedusertype" id="loggedusertype"
                                                            value="ADMIN">
                                                        <input type="hidden" name="loggeduser" id="loggeduser"
                                                            value="1">
                                                        <input type="hidden" name="loggedreportingauthority"
                                                            id="loggedreportingauthority" value="">
                                                    </div>
                                                    <div class="col-md-6 text-end" style="margin-top: 10px;">
                                                        <div id="form-error"></div>
                                                        <input name="save" type="submit" class="btn btn-primary"
                                                            id="save" value="Save" onclick="formsubmit('save')">
                                                        <input name="new" type="reset" class="btn btn-secondary"
                                                            id="new" value="Clear" onclick="clearinnerhtml();">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<!--  -->


        
<div class="container mt-4">
            <table class="table table-bordered" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                <tbody>
                    <tr onclick="showhide('maindiv','toggleimg');" class="header-line">
                        <td class="bg-light">&nbsp;&nbsp;Filter the Data:
                        <td align="right" class="bg-light">
                            <div align="right"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                    align="absmiddle"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" valign="top " class="bg-light">
                            <div id="maindiv" style="display: block;">
                                <form action="" method="post" name="submitform" id="submitform"
                                    onsubmit="return false;">
                                    <div class="display">
                                        <table class="table table-bordered  table1">
                                            <tbody>
                                                <tr class="bg-white">
                                                    <td valign="top">From Date:</td>
                                                    <td valign="top">
                                                        <div class="d-flex">
                                                            <input name="fromdate" type="date" class="form-control"
                                                                id="DPC_fromdate" size="30" autocomplete="off"
                                                                value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                                                maxlength="10" isdatepicker="true">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">To Date:</td>
                                                    <td valign="top">
                                                        <div class="d-flex">
                                                            <input name="todate" type="date" class="form-control"
                                                                id="DPC_todate" size="30" autocomplete="off"
                                                                value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                                                maxlength="10" isdatepicker="true">

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Customer Name:</td>
                                                    <td valign="top">
                                                        <input name="complaintid" type="text"
                                                            class="form-control swifttext" id="complaintid" size="30"
                                                            autocomplete="off" isdatepicker="true">
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Customer ID:</td>
                                                    <td valign="top">
                                                        <input name="complaintid" type="text"
                                                            class="form-control swifttext" id="complaintid" size="30"
                                                            autocomplete="off" isdatepicker="true">
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Category:</td>
                                                    <td valign="top">
                                                        <select name="productname" id="productname"
                                                            class="form-select form-control swiftselect">
                                                            <option value="">ALL</option>

                                                        </select>

                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Flag:</td>
                                                    <td valign="top">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield11" value="yes">
                                                            <label class="form-check-label"
                                                                for="databasefield11">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">No</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">Both</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Publish Record:</td>
                                                    <td valign="top">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield11" value="yes">
                                                            <label class="form-check-label"
                                                                for="databasefield11">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">No</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">Both</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Problem:</td>
                                                    <td valign="top">

                                                        <textarea name="teamleaderremarks" cols="45"
                                                            class="form-control" id="teamleaderremarks"
                                                            data-gramm="false" wt-ignore-input="true"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <table class="table table-bordered table2">
                                            <tbody>
                                                <tr class="bg-white">
                                                    <td valign="top">Transferred To:</td>
                                                    <td valign="top">
                                                        <span id="filterprdgroupdisplay">
                                                            <select name="s_productgroup"
                                                                class="form-select swiftselect form-control"
                                                                id="s_productgroup" onchange="">
                                                                <option value="" selected="selected">Make a
                                                                    Selection
                                                                </option>

                                                            </select>
                                                            <!-- Details are in javascript.js page as a function prdgroup();-->
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Authorized:</td>
                                                    <td valign="top">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield11" value="yes">
                                                            <label class="form-check-label"
                                                                for="databasefield11">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">No</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="anonymous" id="databasefield12" value="no">
                                                            <label class="form-check-label"
                                                                for="databasefield12">Both</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Status:</td>
                                                    <td valign="top">
                                                        <input name="complaintid" type="text"
                                                            class="form-control swifttext" id="complaintid" size="30"
                                                            autocomplete="off" isdatepicker="true">
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Entered By:</td>
                                                    <td valign="top">
                                                        <select name="productname" id="productname"
                                                            class="form-select form-control swiftselect">
                                                            <option value="">ALL</option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Product group:</td>
                                                    <td valign="top">
                                                        <select name="status"
                                                            class="form-select form-control swiftselect" id="status">
                                                            <option value="">ALL</option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Product Name:</td>
                                                    <td valign="top">
                                                        <select name="userid" id="userid"
                                                            class="form-control swiftselect form-select">
                                                            <option value="">ALL</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Compliant ID(Register ID, etc):</td>
                                                    <td valign="top">
                                                        <input name="complaintid" type="text"
                                                            class="form-control swifttext" id="complaintid" size="30"
                                                            autocomplete="off" isdatepicker="true">
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Support Unit:</td>
                                                    <td valign="top">
                                                        <select name="status"
                                                            class="form-select form-control swiftselect" id="status">
                                                            <option value="">ALL</option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <td valign="top">Order By:</td>
                                                    <td valign="top">
                                                        <select name="status"
                                                            class="form-select form-control swiftselect" id="status">
                                                            <option value="callertype">Caller Type</option>
                                                            <option value="category">Category</option>
                                                            <option value="compliantid" selected="selected">
                                                                Compliant ID
                                                            </option>
                                                            <option value="customerid">Customer ID</option>
                                                            <option value="customername">Registered Name
                                                            </option>
                                                            <option value="date">Date</option>
                                                            <option value="userid">Entered By</option>
                                                            <option value="problem">Problem</option>
                                                            <option value="productgroup">Product Group
                                                            </option>
                                                            <option value="productname">Product Name
                                                            </option>
                                                            <option value="status">Status</option>
                                                            <option value="callcategory">Call Category
                                                            </option>
                                                            <option value="transferredto">Transferred To
                                                            </option>
                                                            <option value="time">Time</option>
                                                        </select>

                                                    </td>

                                                </tr>

                                                <td colspan="2" valign="middle"
                                                    style="padding-right:15px; border-top:1px solid #d1dceb;"
                                                    height="35" class="bg-white">In:
                                                    <label>
                                                        <input name="databasefield" type="radio" id="databasefield0"
                                                            value="call" checked="checked">
                                                        Call</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="email">
                                                        Email</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="error">
                                                        Error</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="inhouse">
                                                        Inhouse</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="onsite">
                                                        Onsite</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="reference">
                                                        Reference</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="requirement">
                                                        Requirement</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="skype">
                                                        Skype</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="invoice">
                                                        Invoice</label>
                                                    <label>
                                                        <input type="radio" name="databasefield" id="databasefield0"
                                                            value="receipt">
                                                        Receipts</label>
                                                </td>
                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="container bg-light">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div id="form-error"></div>
                                            </div>
                                            <div class="col-md-4 float-right bg-light " align="right">

                                                <input name="view" type="submit" class="btn btn-primary " id="view"
                                                    value="View" onclick="formsubmit('toview');">
                                                <input name="toexcel" type="submit" class="btn btn-warning" id="toexcel"
                                                    value="To Excel" onclick="formsubmit('toexcel');">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-12">

                <div id="wrapper" class="table-container"></div>
            </div>
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