<?php

include("../navigation/navigation.php");

?>


<body>



    <div class="container mt-5">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light d-flex justify-content-between" onclick="showhide('maindiv','toggleimg');">
                <div>&nbsp;&nbsp;Enter/Edit/View Details</div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="display">
                                    <div class="mb-3">
                                        <label class="form-label mt-2">Anonymous:</label>  <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="anonymous-yes" value="yes">
                                            <label class="form-check-label" for="anonymous-yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="anonymous-no" value="no">
                                            <label class="form-check-label" for="anonymous-no">No</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Registered Name:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Customer Id:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Time:</label>
                                        <input name="customername" type="time" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Category:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">State:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Caller Type:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Group[Optional]:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Name:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Version:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>

                                    <!-- More input fields -->
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="display">
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Contact Person:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Problem:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">Service Charge:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Status:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Assigned To:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Solved By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Bill Number:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Acknowledgement Number:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Remarks:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Entered By:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Compliant ID:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>

                                    <!-- More input fields -->
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12 float-right text-end">
                                <button name="new" type="submit" class="btn btn-secondary m-2" id="view"
                                    onclick="formsubmit('toview');">New</button>
                                <button name="save" type="submit" class="btn btn-primary m-2" id="view"
                                    onclick="formsubmit('toview');">Save</button>
                                <button name="delete" type="submit" class="btn btn-danger m-2" id="toexcel"
                                    onclick="formsubmit('toexcel');">Delete</button>
                                <button name="error-report" type="submit" class="btn btn-warning m-2" id="toexcel"
                                    onclick="formsubmit('toexcel');">Error Report</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="container mt-4">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light d-flex justify-content-between" onclick="showhide('maindiv','toggleimg');">
                <div>Filter the Data:</div>
                <div>
                    <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
                </div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="from-date" class="form-label">From Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Anonymous:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous" id="anonymous-yes"
                                            value="yes">
                                        <label class="form-check-label" for="anonymous-yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous" id="anonymous-no"
                                            value="no">
                                        <label class="form-check-label" for="anonymous-no">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous"
                                            id="anonymous-both" value="both">
                                        <label class="form-check-label" for="anonymous-both">Both</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customer-name" class="form-label">Customer Name:</label>
                                    <input name="complaintid" type="text" class="form-control swifttext"
                                        id="complaintid" size="30" autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categoryblr"
                                            id="categoryblr" value="" checked>
                                        <label class="form-check-label" for="categoryblr">BLR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categorycsd"
                                            id="categorycsd" value="" checked>
                                        <label class="form-check-label" for="categorycsd">CSD</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categorykkg"
                                            id="categorykkg" value="" checked>
                                        <label class="form-check-label" for="categorykkg">KKG</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Product Group:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Product Name:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Problem:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Compliant ID:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Order By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>


                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="state" class="form-label">Entered By</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">To Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Customer ID:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Caller Type:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_customer"
                                            id="s_customer" value="Customer" checked="checked">
                                        <label class="form-check-label" for="s_customer">Customers</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_dealer" id="s_dealer"
                                            value="Dealer" checked="checked">
                                        <label class="form-check-label" for="s_dealer">Dealers</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_employee"
                                            id="s_employee" value="employee" checked="checked">
                                        <label class="form-check-label" for="s_employee">Employees</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_ssmuser" id="s_ssmuser"
                                            value="SSMUser" checked="checked">
                                        <label class="form-check-label" for="s_ssmuser">SSM Users</label>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="state" class="form-label">Status:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Solved By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Bill NUmber:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Flags:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-yes"
                                            value="yes">
                                        <label class="form-check-label" for="anonymous-yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-no"
                                            value="no">
                                        <label class="form-check-label" for="anonymous-no">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-both"
                                            value="both">
                                        <label class="form-check-label" for="anonymous-both">Both</label>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="state" class="form-label">Support Unit:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Acknoledgement Number:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>

                                <!-- More fields in the right column -->
                            </div>
                        </div>

                        <div class="container  mt-2">
                            <div class="row">
                                <div class="col-md-12 float-right text-end">
                                    <button name="view" type="submit" class="btn btn-primary m-2" id="view"
                                        onclick="formsubmit('toview');">View</button>
                                    <button name="toexcel" type="submit" class="btn btn-info m-2" id="toexcel"
                                        onclick="formsubmit('toexcel');">To Excel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

    include("../navigation/footer.php");

    ?>