<?php

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
                    <table class="table">
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
                    <table class="table">
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
                                <select name="solvedby" id="solvedby" class="form-select">
                                    <option value="">Make a selection</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>

                            <div class="form-group mt-4">
                                <label for="authorizedgroup">Authorized:</label>
                                <div class="opt d-flex flex-row">
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield11"> <input
                                                class="form-check-input" type="radio" name="authorized"
                                                id="databasefield11" value="yes"> Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield12"> <input
                                                class="form-check-input" type="radio" name="authorized"
                                                id="databasefield12" value="no"> No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label>Flag the Entry:</label>
                                <div class="opt d-flex flex-row">
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield21"> <input
                                                class="form-check-input" type="radio" name="flagged"
                                                id="databasefield21" value="yes">Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield22"> <input
                                                class="form-check-input" type="radio" name="flagged"
                                                id="databasefield22" value="no"> No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label>Publish:</label>
                                <div class="opt d-flex flex-row mt-2">
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield31"> <input
                                                class="form-check-input" type="radio" name="publish"
                                                id="databasefield31" value="yes"> Yes</label>
                                    </div>
                                    <div class="form-check me-3 align-items-center">

                                        <label class="form-check-label" for="databasefield32"> <input
                                                class="form-check-input" type="radio" name="publish"
                                                id="databasefield32" value="no"> No</label>
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
                        <input type="hidden" name="loggedusertype" id="loggedusertype" value="ADMIN">
                        <input type="hidden" name="loggeduser" id="loggeduser" value="1">
                        <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority" value="">
                    </div>
                    <div class="form-group text-end mt-4">
                        <div id="form-error"></div>
                        <input name="save" type="submit" class="btn btn-primary" id="save" value="Save"
                            onclick="formsubmit('save')">
                        <input name="new" type="reset" class="btn btn-secondary" id="new" value="Clear"
                            onclick="clearinnerhtml();">
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
                        Enter/Edit/View Details
                    </div>
                    <div class="card-body">
                        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- First column content -->
                                    <div class="mb-3">
                                        <!-- Input fields and labels here -->
                                        <label for="customername" class="form-label">From Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">To Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Customer Name:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Customer ID:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Category:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Flag:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield11" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield12" value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield13">
                                                    <input class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield13" value="both">Both</span>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">Publish Record:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield11" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield12" value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield13">
                                                    <input class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield13" value="both">Both</span>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">problem:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Transferred To:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>


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

                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield11" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield12" value="no">No</label>
                                            </div>

                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield13">
                                                    <input class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield13" value="both">Both</span>
                                            </div>
                                        </div>



                                        <label for="teamleaderremarks" class="form-label">Status:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <!-- second div -->
                                        <label for="customername" class="form-label">Entered By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>

                                        </select>
                                        <label for="customername" class="form-label">Product group:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>

                                        </select>
                                        <label for="customername" class="form-label">Product Name: </label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>

                                        </select>
                                        <label for="customername" class="form-label">Compliant ID(Register ID
                                            ,etc):</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Support Unit: </label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>

                                        </select>
                                        <label for=""> Order By</label>
                                        <select name="status" class="form-select form-control swiftselect" id="status">
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
                                                            checked="checked" class="form-check-input">
                                                        Call
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="email"
                                                            class="form-check-input">
                                                        Email
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="error"
                                                            class="form-check-input">
                                                        Error
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="inhouse"
                                                            class="form-check-input">
                                                        Inhouse
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="onsite"
                                                            class="form-check-input">
                                                        Onsite
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="reference"
                                                            class="form-check-input">
                                                        Reference
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="requirement"
                                                            class="form-check-input">
                                                        Requirement
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="skype"
                                                            class="form-check-input">
                                                        Skype
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="invoice"
                                                            class="form-check-input">
                                                        Invoice
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="databasefield" value="receipt"
                                                            class="form-check-input">
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
                                    <button name="new" type="submit" class="btn btn-secondary">New</button>
                                    <button name="save" type="submit" class="btn btn-primary">View</button>
                                    <button name="delete" type="submit" class="btn btn-warning">To Excel</button>
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