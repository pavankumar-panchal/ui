<?php

include("../navigation/navigation.php");

?>
<style>
    body {
        background-color: white;
    }

    .display {
        display: flex;
        flex-direction: row;
    }
</style>

<div class="container users_la mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                <div class="card-header bg-light">
                    Enter the Details
                </div>
                <div class="card-body">
                    <div id="maindiv" style="display: block;">
                        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                            <!-- Your form content goes here -->
                            <div class="display" style="display: flex; flex-direction: row; width:100%;">
                                <!-- first div -->

                                <div class="mb-3" style="width: 50%; margin:20px;">
                                    <label for="customername" class="form-label">Call Type:</label>
                                    <div class="opt d-flex flex-row ">
                                        <div class="form-check me-3 align-items-center">

                                            <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield11" value="yes"> Incoming</label>
                                        </div>
                                        <div class="form-check me-3 align-items-center">

                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield12" value="no">Outgoing</label>
                                        </div>
                                    </div>
                                    <label for="customername" class="form-label">Anonymous:</label>
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
                                    </div>
                                    <label for="customername" class="form-label">Registered Name:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Customer ID:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Date:</label>
                                    <input name="customerid" type="date" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Time:</label>
                                    <input name="customerid" type="time" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Category:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">State:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Caller Type:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Product Group:</label>

                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>

                                </div>

                                <!-- second -->

                                <div class="mb-3 " style="width: 50%; margin:20px;">
                                    <label for="customername" class="form-label">Product Name(optional):</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Person version:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Person Name:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Problem:</label>

                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="teamleaderremarks" class="form-label">Status:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <!-- second div -->
                                    <label for="customername" class="form-label">Call Category:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Solved Through:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Transferred To: </label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Remarks:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Complaint ID: </label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <!-- <label for=""> Team Leader Remarks:</label> -->
                                </div>
                                <!-- Add more textarea fields as needed -->
                            </div>
                            <div class="text-end float-right flex">
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
</div>



<div class="container users_la mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                <div class="card-header bg-light">
                    Filter the Data:
                </div>
                <div class="card-body">
                    <div id="maindiv" style="display: block;">
                        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                            <!-- Your form content goes here -->
                            <div class="display" style="display: flex; flex-direction: row; width:100%;">
                                <!-- first div -->

                                <div class="mb-3" style="width: 50%; margin:20px;">
                                    <label for="customername" class="form-label">From Date:</label>
                                    <input name="customerid" type="date" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">To Date:</label>
                                    <input name="customerid" type="date" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Call Type:</label>
                                    <div class="opt d-flex flex-row ">
                                        <div class="form-check me-3 align-items-center">

                                            <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield11" value="yes"> Incoming</label>
                                        </div>
                                        <div class="form-check me-3 align-items-center">

                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield12" value="no">Outgoing</label>
                                        </div>
                                        <div class="form-check me-3 align-items-center">

                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield12" value="no">Both</label>
                                        </div>
                                    </div>
                                    <label for="customername" class="form-label">Anonymous:</label>
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

                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield12" value="no">Both</label>
                                        </div>
                                    </div>
                                    <label for="customername" class="form-label">Customer Name:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Customer ID:</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Category:</label>
                                    <br>

                                    <label class="form-check-label" for="stremoteconnection"> <input
                                            class="form-check-input" type="checkbox" name="stremoteconnection"
                                            id="stremoteconnection" value=""> BLR</label>

                                    <label class="form-check-label" for="marketingperson"> <input
                                            class="form-check-input" type="checkbox" name="marketingperson"
                                            id="marketingperson" value=""> CSD</label>

                                    <label class="form-check-label" for="onsitevisit"> <input class="form-check-input"
                                            type="checkbox" name="onsitevisit" id="onsitevisit" value="" checked>
                                        KKG</label>

                                    <br>
                                    <label for="customername" class="form-label">Status:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Call Type:</label>
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

                                </div>

                                <!-- second -->

                                <div class="mb-3 " style="width: 50%; margin:20px;">
                                    <label for="customername" class="form-label">Product Name:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Problem</label>
                                    <input name="customerid" type="text" class="form-control" id="customername"
                                        size="20" autocomplete="off" isdatepicker="true">
                                    <label for="customername" class="form-label">Status:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Call Category:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Transferred To:</label>

                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="teamleaderremarks" class="form-label">Entered By:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <!-- second div -->
                                    <label for="customername" class="form-label">Compliant ID:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Flags:</label>
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

                                            <label class="form-check-label" for="databasefield12"><input
                                                    class="form-check-input" type="radio" name="anonymous"
                                                    id="databasefield12" value="no">Both</label>
                                        </div>
                                    </div>
                                    <label for="customername" class="form-label">Support Unit: </label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <label for="customername" class="form-label">Order By:</label>
                                    <select name="s_productgroup" class="form-select swiftselect form-control"
                                        id="s_productgroup" onchange="">
                                        <option value="" selected="selected">
                                            Make a Selection
                                        </option>
                                    </select>
                                    <!-- <label for=""> Team Leader Remarks:</label> -->
                                </div>
                                <!-- Add more textarea fields as needed -->
                            </div>
                            <div class="text-end float-right flex">
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
</div>
<!-- tables -->


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
</div>
<?php
include("../navigation/footer.php");
?>