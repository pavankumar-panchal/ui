<?php
include("../navigation/navigation.php");
?>

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
                                        <label class="form-label mt-2">Anonymous:</label> <br>
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
                                        <label for="registered-name" class="form-label">Reported By:</label>
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
                                        <label for="registered-name" class="form-label">State:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Group:</label>
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
                                        <label for="registered-name" class="form-label">Product version:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Database:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Requirements:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>

                                    <!-- More input fields -->
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="display">
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Reported To:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Reference Through:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Solved Date:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Solution Given:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Solution Entered Time:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Remarks:</label>
                                        <input name="customername" type="email" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Order Status:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">Remarks:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Entered BY:</label> <br>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Requirement ID:</label>
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
                                    <label for="from-date" class="form-label">To Date:</label>
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
                                    <label for="customer-name" class="form-label">Reported By:</label>
                                    <input name="complaintid" type="text" class="form-control swifttext"
                                        id="complaintid" size="30" autocomplete="off" isdatepicker="true">
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
                                    <label for="state" class="form-label">Requirement:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Reported To:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="state" class="form-label">Status:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Solution Given:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Solved Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Remarks : </label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Entered By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Requirement ID :</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Flags:</label> <br>
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
                                    <label for="state" class="form-label">Order By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="category">Category</option>
                                        <option value="contactno">Contact Number
                                        </option>
                                        <option value="contactperson">Contact Person
                                        </option>
                                        <option value="userid">Entered By</option>
                                        <option value="email">Email ID</option>
                                        <option value="productname">Product Group
                                        </option>
                                        <option value="productname">Product Name
                                        </option>
                                        <option value="referenceid" selected="">Reference ID</option>
                                        <option value="customername">Registered Name
                                        </option>
                                        <option value="referencethrough">Reference Through</option>
                                        <option value="status">Status</option>
                                        <option value="time">Time</option>

                                    </select>
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

    <div class="container mt-4">
    <div class="tab container"
        style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius: 10px; padding:10px;">
        <span id="toggleButton" class="btn btn-primary mb-3">Default/Flagged</span>
        <div class="table-container1">
            <h2>Default</h2>
            <div id="tableContainer1"></div>
        </div>
        <div class="table-container2" style="display: none;">
            <h2>Flagged</h2>
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