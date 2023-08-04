<?php

include("../navigation/navigation.php");

?>
<style>
    .display {
        display: flex;
        flex-direction: row;
    }
</style>
<!-- <div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Options</span>
            </li>
            <li class="breadcrumb-item active"><span>Record Authorization</span></li>
        </ol>
    </nav>
</div> -->
<!-- </header>  -->

<!-- content -->
<div class="container">


    <table class="table table-bordered "
        style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); margin-top:50px; border-radius:10px; width: 99%; margin-left: 5px; ">
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
                    <table class="table ">
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
        <div class="card mt-4"
            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius: 10px; margin:0px -0px 0px -0px;">
            <div class="card-header bg-light" style="cursor:pointer; height: 45px;">
                <h6 class="m-0">Enter / Edit / View Details</h6>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                        <div class="form-group text-center" style="width: 100%; height: 150px;">
                            <div id="displayregisters">
                                <h6 class="" style="margin: auto;">Make A Selection of record from the grid below</h6>
                            </div>
                        </div>
                        <hr class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="authorizedgroup">Category:</label>
                                    <select name="solvedby" id="solvedby" class="form-select form-control">
                                        <option value="">Make a selection</option>
                                        <!-- Add other options here -->
                                    </select>
                                </div>

                                <br>

                                <div class="form-group">
                                    <!-- <label>Flag the Entry: -->
                                    <div class="opt d-flex flex-row ">

                                        Authorized: &nbsp;
                                        <div class="form-check me-3 align-items-center">
                                            <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                    class="form-check-input" type="radio" name="anonymou"
                                                    id="databasefield11" value="yes"> Yes</label>
                                        </div>
                                        <div class="form-check me-3 align-items-center">
                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymou"
                                                    id="databasefield12" value="no">No</label>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6" style="margin-top:20px;">
                                <div class="form-group">
                                    <!-- <label>Flag the Entry: -->
                                    <div class="opt d-flex flex-row ">

                                        Flag the Entry: &nbsp;
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

                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <!-- <label>Flag the Entry: -->
                                    <div class="opt d-flex flex-row mt-2">

                                        Publish: &nbsp;
                                        <div class="form-check me-3 align-items-center">
                                            <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                    class="form-check-input" type="radio" name="anonymou"
                                                    id="databasefield11" value="yes"> Yes</label>
                                        </div>
                                        <div class="form-check me-3 align-items-center">
                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymou"
                                                    id="databasefield12" value="no">No</label>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group mt-2">
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
    </div>
    <!--  third table-->


    <div class="container users_la mt-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                    <div class="card-header bg-light">
                        Enter/Edit/View Details
                    </div>
                    <div class="card-body">
                        <div id="maindiv" style="display: block;">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <!-- Your form content goes here -->
                                <div class="display" style="display: flex; flex-direction: row; width:100%;">
                                    <!-- first div -->

                                    <div class="mb-3" style="width: 50%; margin:20px;">
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

                                    <!-- second -->
                                    <div class="mb-3 " style="width: 50%; margin:20px;">

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
                                                <div class="col-md-2">In:</div>
                                                <div class="col-md-10">
                                                    <label class="me-3">
                                                        <input name="databasefield" type="radio" value="call"
                                                            checked="checked">
                                                        Call
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="email">
                                                        Email
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="error">
                                                        Error
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="inhouse">
                                                        Inhouse
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="onsite">
                                                        Onsite
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="reference">
                                                        Reference
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="requirement">
                                                        Requirement
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="skype">
                                                        Skype
                                                    </label>
                                                    <label class="me-3">
                                                        <input type="radio" name="databasefield" value="invoice">
                                                        Invoice
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="databasefield" value="receipt">
                                                        Receipts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- Add more textarea fields as needed -->
                                </div>
                                <div class="text-end float-right">
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