<?php

include("../navigation/navigation.php");

?>

<body>
    
    <div class="container mt-5">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv','toggleimg');">
                <span class="header-line">Enter/Edit/View Details</span>

            </div>
            <div class="card-body" id="maindiv" style="display: block;">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="registered-name" class="form-label">Registered Name:</label>
                            <input name="customername" type="text" class="form-control" id="customername"
                                autocomplete="off">
                            <a href="javascript:void(0);"
                                onClick="getinvoiceregister(); getcustomerfunc();registernameload('receipt')"
                                style="cursor:pointer">
                                <img src="../images/userid-bg.gif" width="14" height="16" border="0"
                                    align="absmiddle" /></a>
                            <input type="hidden" name="lastslno" id="lastslno" value="" />
                            <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>" />
                            <input type="hidden" name="loggedusertype" id="loggedusertype"
                                value="<?php echo ($usertype); ?>" />
                            <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                                value="<?php echo ($reportingauthority); ?>" />
                            <input type="hidden" name="hiddenserverdate" id="hiddenserverdate"
                                value="<?php echo (datetimelocal('d-m-Y')); ?>" />
                        </div>
                        <div class="col-md-6">
                            <label for="customerid" class="form-label">Customer Id:</label>
                            <input name="customerid" type="text" class="form-control" id="customerid"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="billno" class="form-label">Bill Number:</label>
                            <input name="billno" type="text" class="form-control" id="billno" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="billdate" class="form-label">Bill Date:</label>
                            <input name="billdate" type="date" class="form-control" id="billdate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">Date:</label>
                            <input name="date" type="text" class="form-control" id="date"
                                value="<?php echo ($localdate); ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="time" class="form-label">Time:</label>
                            <input name="time" type="text" class="form-control" id="time"
                                value="<?php echo ($localtime); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="receiptno" class="form-label">Receipt Number:</label>
                            <input name="receiptno" type="text" class="form-control" id="receiptno" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="receiptdate" class="form-label">Receipt Date:</label>
                            <input name="receiptdate" type="date" class="form-control" id="DPC_receiptdate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="baid-by" class="form-label">Paid By:</label>
                            <select name="cheque_cash" class="form-select form-control" id="cheque_cash">
                                <option value="Cash" selected>Cash</option>
                                <option value="Cheque">Cheque</option>
                                <!-- Add other options here -->
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="chequeno" class="form-label">Cheque Number:</label>
                            <input name="chequeno" type="text" class="form-control" id="chequeno" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">Amount:</label>
                            <input name="amount" type="text" class="form-control" id="amount" autocomplete="off">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="remarks" class="form-label">Remarks:</label>
                            <textarea name="remarks" cols="45" class="form-control" id="remarks" data-gramm="false"
                                wt-ignore-input="true"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="userid" class="form-label">User ID:</label>
                            <input name="userid" type="text" class="form-control swifttext" id="userid"
                                autocomplete="off" value="<?php echo ($loggedusername); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-end float-right">
                                <div id="form-error"></div>
                                <button name="new" type="reset" class="btn btn-secondary" id="new"
                                onclick="newentry();clearinnerhtml();gettime(); " >New</button>
                                <button name="save" type="submit" class="btn btn-primary" id="save"
                                    onclick="formsubmit('save');">Save</button>
                                <button name="delete" type="submit" class="btn btn-danger" id="delete"
                                    onclick="formsubmit('delete');">Delete</button>

                            </div>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>


    <div class="container mt-4">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header header-line bg-light">
                <div class="row">
                    <div class="col-md-6">Filter the Data:</div>
                    <div class="col-md-6 text-end">
                        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div id="maindiv" style="display: block;">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fromdate" class="form-label">From Date:</label>
                                <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                    value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10"
                                    isdatepicker="true">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="todate" class="form-label">To Date:</label>
                                <input name="todate" type="date" class="form-control" id="DPC_todate" value="21-07-2023"
                                    datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="customername" class="form-label">Customer Name:</label>
                                <input name="customername" type="text" class="form-control swifttext" id="customername"
                                    autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="customerid" class="form-label">Customer ID:</label>
                                <input name="customerid" type="text" class="form-control swifttext" id="customerid"
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="billnumber" class="form-label">Bill Number:</label>

                                <input name="billnumber" type="text" class="form-control swifttext" id="billnumber"
                                    autocomplete="off" data-gramm="false" wt-ignore-input="true">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="billdate" class="form-label">Bill Date:</label>
                                <input name="billdate" type="date" class="form-control" id="billdate"
                                    datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="registername" class="form-label">Register Name:</label>
                                <input name="registername" type="text" class="form-control swifttext" id="registername"
                                    autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="receiptdate" class="form-label">Receipt Date:</label>
                                <input name="receiptdate" type="date" class="form-control swifttext" id="receiptdate"
                                    datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="chequenumber" class="form-label">Cheque Number:</label>
                                <input name="chequenumber" type="text" class="form-control swifttext" id="chequenumber"
                                    autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="amount" class="form-label">Amount:</label>
                                <input name="amount" type="text" class="form-control swifttext" id="amount"
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="enteredby" class="form-label">Entered By:</label>
                                <select name="s_productgroup" class="form-select swiftselect form-control"
                                    id="s_productgroup" onchange="">
                                    <option value="" selected="selected">Cash</option>
                                    <option value="">Cheque</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Flags:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="anonymous" id="databasefield11"
                                        value="yes">
                                    <label class="form-check-label" for="databasefield11">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="anonymous" id="databasefield12"
                                        value="no">
                                    <label class="form-check-label" for="databasefield12">No</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="anonymous" id="databasefield13"
                                        value="both">
                                    <label class="form-check-label" for="databasefield13">Both</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Order By:</label>
                                <select name="status" class="form-select form-control swiftselect" id="status">
                                    <option value="customerid">Customer ID</option>
                                    <option value="customername">Registered Name</option>
                                    <option value="receiptdate">Receipt Date</option>
                                    <option value="userid">Entered By</option>
                                    <option value="receiptno" selected="">Receipt Number</option>
                                    <option value="chequeno">Cheque Number</option>
                                    <option value="billno">Bill Number</option>
                                    <option value="billdate">Bill Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-end float-right">
                            <div id="form-error"></div>
                            <button name="view" type="submit" class="btn btn-primary" id="view"
                                onclick="formsubmit('toview');">View</button>
                            <button name="toexcel" type="submit" class="btn btn-info text-white" id="toexcel"
                                onclick="formsubmit('toexcel');">To Excel</button>
                        </div>
                    </div>
                </form>
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