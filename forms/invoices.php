<?php

include("../navigation/navigation.php");

?>


<style>
    .display {
        display: flex;
        flex-direction: row;
    }
</style>

<body>



    <div class="container mt-5">
        <div class="card " style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light" onclick="showhide('maindiv','toggleimg');">
                <div class="d-flex justify-content-between">
                    <div class="py-2">&nbsp;&nbsp;Enter/Edit/View Details</div>
                    <div class="py-2">
                        <div><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                align="absmiddle"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row ">
                        <div class="col-md-6 ">

                            <div class="mb-3">
                                <label for="customername" class="form-label">Registered Name:</label>
                                <input name="customername" type="text" class="form-control" id="customername"
                                    autocomplete="off" isdatepicker="true">
                                <span id="getcustomerlink" style="visibility:visible;"> <a href="javascript:void(0);"
                                        onClick="getregisterdata(); getcustomerfunc();registernameload('invoice');"
                                        style="cursor:pointer">
                                        <img src="../images/userid-bg.gif" width="14" height="16" border="0"
                                            align="absmiddle" /></a></span>
                                <input type="hidden" name="lastslno" id="lastslno" value="" />
                                <input type="hidden" name="cusid" id="cusid" value="" />
                                <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>" />
                                <input type="hidden" name="loggedusertype" id="loggedusertype"
                                    value="<?php echo ($usertype); ?>" />
                                <input type="hidden" name="endtime" id="endtime" value="" />
                                <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                                    value="<?php echo ($reportingauthority); ?>" />
                                <input type="hidden" name="hiddenserverdate" id="hiddenserverdate"
                                    value="<?php echo (datetimelocal('d-m-Y')); ?>" />

                            </div>
                            <div class="mb-3">
                                <label for="customerid" class="form-label">Customer Id:</label>
                                <input name="customerid" type="text" class="form-control" id="customerid"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="productgroup" class="form-label">product Group:</label>
                                <input name="productgroup" type="text" class="form-control" id="productgroup"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="productname" class="form-label">Product Name:</label>
                                <input name="productname" type="text" class="form-control" id="productname"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="productversion" class="form-label">Product Version:</label>
                                <input name="productversion" type="text" class="form-control" id="productversion"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">State:</label>
                                <select name="state" class="form-select swiftselect form-control" id="state"
                                    onchange="">
                                    <?php include('../inc/state.php'); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="billno" class="form-label">Bill Number:</label>
                                <input name="billno" type="text" class="form-control" id="billno" autocomplete="off"
                                    isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="billdate" class="form-label">Bill Date:</label>
                                <input name="billdate" type="date" class="form-control" id="billdate" autocomplete="off"
                                    isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="registername" class="form-label">Register Number:</label>
                                <input name="registername" type="text" class="form-control" id="registername"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="complaintid" class="form-label">Complaint ID:</label>
                                <input name="complaintid" type="text" class="form-control" id="complaintid"
                                    autocomplete="off" isdatepicker="true">
                            </div>
                            <!-- Add more divs for other fields -->
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date:</label>
                                <input name="date" type="text" class="form-control" id="date" autocomplete="off"
                                    isdatepicker="true" value="<?php echo ($localdate); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time:</label>
                                <input name="time" type="text" class="form-control" id="time" autocomplete="off"
                                    isdatepicker="true" value="<?php echo ($localtime); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="billto" class="form-label">Bill Given To:</label>
                                <input name="billto" type="text" class="form-control" id="billto" autocomplete="off"
                                    isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="billedby" class="form-label">Billed By:</label>
                                <select name="billedby" class="form-select swiftselect form-control" id="billedby"
                                    onchange="">
                                    <option value="" selected="selected"> ALL</option>
                                    <?php include('../inc/useridselection.php'); ?>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount:</label>
                                <input name="amount" type="text" class="form-control" id="amount" autocomplete="off"
                                    isdatepicker="true" onKeyPress="javascript:invoicetotalamount();"
                                    onChange="javascript:invoicetotalamount();">
                            </div>
                            <div class="mb-3">
                                <label for="tax" class="form-label">Tax Amount:</label>
                                <input name="tax" type="text" class="form-control" id="tax" autocomplete="off"
                                    isdatepicker="true" onKeyPress="javascript:invoicetotalamount();"
                                    onChange="javascript:invoicetotalamount();">
                            </div>
                            <div class="mb-3">
                                <label for="tamount" class="form-label">Total Amount:</label>
                                <input name="tamount" type="date" class="form-control" id="tamount" autocomplete="off"
                                    isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="remarks" class="form-label">Remarks:</label>
                                <input name="remarks" type="text" class="form-control" id="remarks" autocomplete="off"
                                    isdatepicker="true">
                            </div>
                            <div class="mb-3">
                                <label for="userid" class="form-label">User ID:</label>
                                <input name="userid" type="text" class="form-control" id="userid" autocomplete="off"
                                    isdatepicker="true" value="<?php echo ($loggedusername); ?>">
                            </div>

                            <!-- Add more divs for other fields -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="form-error"></div>
                        </div>
                        <div class="col-md-4 text-end">
                            <button name="new" type="submit" class="btn btn-secondary" id="new"
                                onclick="newentry();clearinnerhtml();gettime(); ">New</button>
                            <button name="save" type="submit" class="btn btn-primary" id="save"
                                onclick="formsubmit('save');">Save</button>
                            <button name="delete" type="submit" class="btn btn-danger" id="delete"
                                onclick="formsubmit('delete');">Delete</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



















    <div class="container mt-4">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light" onclick="showhide('maindiv','toggleimg');">
                <div class="d-flex justify-content-between">
                    <div class="py-2">&nbsp;&nbsp;Filter the Data:</div>
                    <div class="py-2">
                        <div><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                align="absmiddle"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fromdate" class="form-label">From Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="todate" class="form-label">To Date:</label>
                                    <input name="todate" type="date" class="form-control" id="DPC_todate"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="customername" class="form-label">Customer Name:</label>
                                    <input name="customername" type="text" class="form-control swifttext"
                                        id="customername" autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="customerid" class="form-label">Customer ID:</label>
                                    <input name="customerid" type="text" class="form-control swifttext" id="customerid"
                                        autocomplete="off" isdatepicker="true">
                                </div>

                                <div class="mb-3">
                                    <label for="productgroup" class="form-label">Product Group:</label>
                                    <select name="productgroup" id="productgroup"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="productname" class="form-label">Product Name:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <select name="state" id="state" class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="billnumber" class="form-label">Bill Number:</label>
                                    <textarea name="billnumber" cols="45" class="form-control" id="billnumber"
                                        data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>




                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="customerid" class="form-label">Bill Date:</label>
                                    <input name="customerid" type="date" class="form-control swifttext" id="customerid"
                                        autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="productgroup" class="form-label">Register Name:</label>
                                    <input name="customerid" type="text" class="form-control swifttext" id="customerid"
                                        autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="productname" class="form-label">Billed By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Amount:</label>
                                    <input name="customerid" type="text" class="form-control swifttext" id="customerid"
                                        autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="billnumber" class="form-label">Entered By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Compliant ID:</label>
                                    <input name="customerid" type="text" class="form-control swifttext" id="customerid"
                                        autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Order By :</label>


                                    <select name="order_by" class="form-select form-control swiftselect" id="order_by">
                                        <option value="callertype">Caller Type</option>
                                        <option value="category">Category</option>
                                        <option value="complaintid" selected="selected">Complaint ID</option>
                                        <option value="customerid">Customer ID</option>
                                        <option value="customername">Registered Name</option>
                                        <option value="date">Date</option>
                                        <option value="userid">Entered By</option>
                                        <option value="problem">Problem</option>
                                        <option value="productname">Product Group</option>
                                        <option value="productname">Product Name</option>
                                        <option value="status">Status</option>
                                        <option value="solvedby">Solved By</option>
                                        <option value="billno">Bill Number</option>
                                        <option value="billdate">Bill Date</option>
                                        <option value="acknowledgementno">Acknowledgement Number</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Flags:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flags" id="flags_yes"
                                            value="yes">
                                        <label class="form-check-label" for="flags_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flags" id="flags_no"
                                            value="no">
                                        <label class="form-check-label" for="flags_no">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flags" id="flags_both"
                                            value="both">
                                        <label class="form-check-label" for="flags_both">Both</label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="form-error"></div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button name="view" type="submit" class="btn btn-primary" id="view"
                                        onclick="formsubmit('toview');">View</button>
                                    <button name="toexcel" type="submit" class="btn btn-info" id="toexcel"
                                        onclick="formsubmit('toexcel');">To Excel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="tab container"
            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius: 10px; padding: 10px;">
            <span id="toggleButton" class="btn btn-primary btn-sm mb-3 float-end">Default/Flagged</span>
            <div class="table-container1">
                <h2 class="mb-3">Default</h2>
                <div id="tableContainer1"></div>
            </div>
            <div class="table-container2" style="display: none;">
                <h2 class="mb-3">Flagged</h2>
                <div id="tableContainer2"></div>
            </div>
        </div>
    </div>

    <script>
        const data1 = [
            ["1", "first", "Address 1", "123456789", "john@example.com", "Contact 1", /* ... */],
            ["2", "Jane Smith", "Address 2", "987654321", "jane@example.com", "Contact 2", /* ... */],
            // Add more rows here...
        ];

        const data2 = [
            ["1", "second", "Address 1", "123456789", "john@example.com", "Contact 1", /* ... */],
            ["2", "Jane Smith", "Address 2", "987654321", "jane@example.com", "Contact 2", /* ... */],
            // Add more rows here...
        ];

        const columns = [
            "Sl No",
            "Flag",
            "Call Type",
            "Date",
            "Start Time",
            "End Time",
            "Duration",
            "User Id",
            "Anonymous",
            "Customer ID",
            "Customer Name",
            "Person Name",
            "Category",
            "State",
            "Caller Type",
            "Product Group",
            "Product Name",
            "Product Version",
            "Problem",
            "Remarks",
            "Status",
            "Remote Connection",
            "Compliant ID",
            "Authorized",
            "Authorized Group",
            "Team Leader Remarks",
            "Authorized Person",
            "Authorized Date&amp",
            "Time",
            "Call Category",
        ];

        // Create both tables
        const table1 = new gridjs.Grid({
            columns: columns.map((col) => ({ name: col })),
            data: data1,
            pagination: true,
            search: true,
            sort: true,
            language: {
                search: {
                    placeholder: 'Search...'
                },
                pagination: {
                    previous: 'Previous',
                    next: 'Next',
                    showing: 'Showing',
                    results: () => 'Records'
                }
            }
        });

        const table2 = new gridjs.Grid({
            columns: columns.map((col) => ({ name: col })),
            data: data2,
            pagination: true,
            search: true,
            sort: true,
            language: {
                search: {
                    placeholder: 'Search...'
                },
                pagination: {
                    previous: 'Previous',
                    next: 'Next',
                    showing: 'Showing',
                    results: () => 'Records'
                }
            }
        });

        // Render the initial table (table1)
        const tableContainer1 = document.getElementById('tableContainer1');
        table1.render(tableContainer1);

        // Add event listener to the toggle button
        document.getElementById('toggleButton').addEventListener('click', function () {

            const tableContainer1 = document.querySelector('.table-container1');
            const tableContainer2 = document.querySelector('.table-container2');

            // Toggle between tables
            if (tableContainer1.style.display === 'none') {
                tableContainer1.style.display = 'block';
                tableContainer2.style.display = 'none';
                table2.destroy();
                table1.render(tableContainer1.querySelector('#tableContainer1'));
            } else {
                tableContainer1.style.display = 'none';
                tableContainer2.style.display = 'block';
                table1.destroy();
                table2.render(tableContainer2.querySelector('#tableContainer2'));
            }
        });
    </script>


    <?php

    include("../navigation/footer.php");

    ?>