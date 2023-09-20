<?php

include("../navigation/navigation.php");

?>
<style>
    .display {
        display: flex;
        flex-direction: row;
    }

    label {
        margin-top: 15px;
    }
</style>
</head>

<body>

    <div class="container users_la mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                    <div class="card-header bg-light">
                        Enter /Edit/View Details
                    </div>
                    <div class="card-body">
                        <div id="maindiv" style="display: block;">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <!-- Your form content goes here -->
                                <div class="display" style="display: flex; flex-direction: row; width:100%;">
                                    <!-- first div -->
                                    <div class="mb-3" style="width: 50%; margin:20px;">
                                        <label for="customername" class="form-label">Anonymous:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield0">&nbsp;
                                                    <input class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield0" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="anonymous"
                                                        id="databasefield1" value="no" checked>No</label>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">Registered Name:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <input type="hidden" name="lastslno" id="lastslno" value="" />
                                        <input type="hidden" name="cusid" id="cusid" value="" />
                                        <input type="hidden" name="loggeduser" id="loggeduser"
                                            value="<?php echo ($user); ?>" />
                                        <input type="hidden" name="loggedusertype" id="loggedusertype"
                                            value="<?php echo ($usertype); ?>" />
                                        <input type="hidden" name="loggedreportingauthority"
                                            id="loggedreportingauthority"
                                            value="<?php echo ($reportingauthority); ?>" />
                                        <input type="hidden" name="hiddenserverdate" id="hiddenserverdate"
                                            value="<?php echo (datetimelocal('d-m-Y')); ?>" /></td>



                                        <label for="customername" class="form-label">Cusomer ID:</label>
                                        <input name="customerid" type="text" class="form-control" id="customerid"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Date:</label>
                                        <input name="date" type="text" class="form-control" id="date" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Time:</label>
                                        <input name="time" type="text" class="form-control" id="time" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Category:</label>
                                        <input name="category" type="text" class="form-control" id="category" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">State:</label>
                                        <select name="state" class="form-select form-control" id="state" onchange="">
                                            <?php include('../inc/state.php'); ?>

                                        </select>
                                        <label for="callertype" class="form-label">Caller Type:</label>
                                        <input name="callertype" type="text" class="form-control" id="callertype"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Person Name[if any]:</label>
                                        <input name="personname" type="text" class="form-control" id="personname"
                                            size="20" autocomplete="off" isdatepicker="true">

                                        <label for="customername" class="form-label">Product group:</label>
                                        <?php include('../inc/productgroup.php');
                                        productname('productgroup', '');
                                        ?>
                                        <label for="customername" class="form-label">Product Name(Optional):</label>
                                        <select name="productname" class="form-select swiftselect form-control"
                                            id="productname" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                    </div>
                                    <!-- second -->
                                    <div class="mb-3 " style="width: 50%; margin:20px;">
                                        <label for="customername" class="form-label">Product version:</label>
                                        <select name="productversion" class="form-select swiftselect form-control"
                                            id="productversion" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>




                                        <label for="customername" class="form-label">Email ID:</label>
                                        <input name="emailid" type="text" class="form-control" id="emailid" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Subject:</label>
                                        <input name="subject" type="text" class="form-control" id="subject" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Problem:</label>
                                        <input name="content" type="text" class="form-control" id="content" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <a href="javascript:void(0);" style="cursor:pointer"
                                            onclick="getquestionfunc(); getquestion();"><img
                                                src="../images/get-problem.gif" width="22" height="22" border="0"
                                                align="top" /></a>

                                        <label for="customername" class="form-label">Error File:</label>
                                        <input name="errorfile" type="file" class="form-control" id="errorfile"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Status:</label>
                                        <select name="status" class="form-select swiftselect form-control" id="status"
                                            onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                            <option value="solved">Solved</option>
                                            <option value="unsolved">Un Solved</option>
                                            <option value="forwarded">Forwarded</option>
                                            <option value="registration">Registration</option>
                                        </select>
                                        <label for="teamleaderremarks" class="form-label">Forworded To:</label>
                                        <select name="forwardedto" class="form-select swiftselect form-control"
                                            id="forwardedto" onchange="">
                                            <option value="" selected="selected">
                                                ALL
                                            </option>
                                            <?php include('../inc/useridselection.php'); ?>
                                            <option value="others">Others</option>
                                        </select>
                                        <!-- second div -->
                                        <label for="customername" class="form-label">Thanking Email:</label> <br>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <input class="form-check-input" type="checkbox" value="" id="thankingemail"
                                                name="thankingemail">
                                            Check for Thaking email
                                        </label> <br>
                                        <label for="customername" class="form-label">Remarks:</label>
                                        <input name="remarks" type="text" class="form-control" id="remarks" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Entered By: </label>
                                        <input name="userid" type="text" class="form-control" id="userid" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Email Register ID:</label>
                                        <input name="compliantid" type="text" class="form-control" id="compliantid"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <!-- <label for=""> Team Leader Remarks:</label> -->
                                    </div>
                                    <!-- Add more textarea fields as needed -->
                                </div>
                                <div class="text-end float-right flex">
                                    <button name="new" type="reset" class="btn btn-secondary" id="new">New</button>
                                    <button name="save" type="submit" class="btn btn-primary" id="save" value="save">
                                        View</button>
                                    <button name="delete" type="submit" class="btn btn-warning"
                                        id="delete">Delete<button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- table 2 -->

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
                                        <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">To Date:</label>
                                        <input name="todate" type="date" class="form-control" id="DPC_todate" size="20"
                                            autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Anonymous:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="s_anonymous"
                                                        id="databasefield9" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="s_anonymous"
                                                        id="databasefield10" value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="s_anonymous"
                                                        id="databasefield11" value="no">Both</label>
                                            </div>
                                        </div>
                                        <label for="customername" class="form-label">Customer Name:</label>
                                        <input name="s_customername" type="text" class="form-control"
                                            id="s_customername" size="20" autocomplete="off" isdatepicker="true">


                                        <label for="customername" class="form-label">Customer ID:</label>
                                        <input name="s_customerid" type="text" class="form-control" id="s_customerid"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Category:</label>
                                        <br>

                                        <label class="form-check-label" for="stremoteconnection"> <input
                                                class="form-check-input" type="checkbox" name="categoryblr"
                                                id="categoryblr" value=""> BLR</label>

                                        <label class="form-check-label" for="marketingperson"> <input
                                                class="form-check-input" type="checkbox" name="categorycsd"
                                                id="categorycsd" value=""> CSD</label>

                                        <label class="form-check-label" for="onsitevisit"> <input
                                                class="form-check-input" type="checkbox" name="categorykkg"
                                                id="categorykkg" value="" checked>
                                            KKG</label>

                                        <br>
                                        <label for="customername" class="form-label">State:</label>
                                        <select name="s_state" class="form-select swiftselect form-control" id="s_state"
                                            onchange="">
                                            <?php include('../inc/state.php'); ?>

                                        </select>
                                        <label for="customername" class="form-label">Call Type:</label>
                                        <label class="form-check-label" for="stremoteconnection"> <input
                                                class="form-check-input" type="checkbox" name="s_customer"
                                                id="s_customer" value=""> Customers</label>

                                        <label class="form-check-label" for="marketingperson"> <input
                                                class="form-check-input" type="checkbox" name="s_dealer" id="s_dealer"
                                                value=""> Dealers</label>

                                        <label class="form-check-label" for="onsitevisit"> <input
                                                class="form-check-input" type="checkbox" name="s_employee"
                                                id="s_employee" value="" checked>
                                            Employees</label>
                                        <label class="form-check-label" for="onsitevisit">
                                            <input class="form-check-input" type="checkbox" name="s_ssmuser"
                                                id="s_ssmuser" value="" checked>
                                            SSM Users</label>
                                        <br>
                                        <label for="customername" class="form-label">Product group:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <span id="filterprdgroupdisplay">
                                                <?php productname('s_productgroup', ''); ?>
                                                <!-- Details are in javascript.js page as a function prdgroup();-->
                                            </span>
                                        </select>

                                        <label for="customername" class="form-label">Product Name:</label>
                                        <select name="s_productname" class="form-select swiftselect form-control"
                                            id="s_productname" onchange="">
                                            <option value="">All</option>
                                            <?php include('../inc/productfilter.php'); ?>
                                        </select>

                                        <label for="customername" class="form-label">Email ID:</label>
                                        <input name="s_emailid" type="text" class="form-control" id="s_emailid"
                                            size="20" autocomplete="off" isdatepicker="true">

                                    </div>

                                    <!-- second -->

                                    <div class="mb-3 " style="width: 50%; margin:20px;">
                                        <label for="customername" class="form-label">Content:</label>
                                        <input name="s_content" type="text" class="form-control" id="s_content"
                                            size="20" autocomplete="off" isdatepicker="true">

                                        <label for="customername" class="form-label">Status:</label>
                                        <select name="s_status" class="form-select swiftselect form-control"
                                            id="s_status" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                            <option value="solved">Solved</option>
                                            <option value="unsolved">Un Solved</option>
                                            <option value="forwarded">Forwarded</option>
                                            <option value="registration">Registration</option>
                                        </select>

                                        <label for="customername" class="form-label">Forwarded To:</label>
                                        <select name="s_forwardedto" class="form-select swiftselect form-control"
                                            id="s_forwardedto" onchange="">
                                            <option value="" selected="selected">All</option>
                                            <?php include('../inc/useridselection.php'); ?>
                                            <option value="others">Others</option>
                                        </select>
                                        <label for="customername" class="form-label">Error File:</label>
                                        <input name="s_errorfile" type="text" class="form-control" id="s_errorfile"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="teamleaderremarks" class="form-label">Thanking Email:</label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="s_thankingemail"
                                                        id="s_thankingemail0" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="s_thankingemail"
                                                        id="s_thankingemail1" value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="s_thankingemail"
                                                        id="s_thankingemail2" value="">Both</label>
                                            </div>
                                        </div>


                                        <!-- second div -->
                                        <label for="customername" class="form-label">Entered By:</label>
                                        <select name="s_userid" class="form-select swiftselect form-control"
                                            id="s_userid" onchange="">
                                            <option value="" selected="selected">All</option>
                                            <?php include('../inc/useridselection.php'); ?>
                                        </select>
                                        <label for="customername" class="form-label">Compliant ID:</label>
                                        <input name="s_compliantid" type="text" class="form-control" id="s_compliantid"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Flags: </label>
                                        <div class="opt d-flex flex-row ">
                                            <div class="form-check me-3 align-items-center">
                                                <label class="form-check-label" for="databasefield11">&nbsp; <input
                                                        class="form-check-input" type="radio" name="flagdatabasefield"
                                                        id="flagdatabasefield0" value="yes"> Yes</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="flagdatabasefield"
                                                        id="flagdatabasefield1" value="no">No</label>
                                            </div>
                                            <div class="form-check me-3 align-items-center">

                                                <label class="form-check-label" for="databasefield12"><input
                                                        class="form-check-input" type="radio" name="flagdatabasefield"
                                                        id="flagdatabasefield2" value="">Both</label>
                                            </div>
                                        </div>


                                        <label for="customername" class="form-label">Support Unit:</label>
                                        <select name="s_supportunit" class="form-select swiftselect form-control"
                                            id="s_supportunit" onchange="">
                                            <option value="" selected="selected">
                                                ALL
                                            </option>
                                            <?php include('../inc/supportunit.php'); ?>

                                        </select>
                                        <label for="customername" class="form-label">Order By:</label>
                                        <select name="orderby" class="form-select swiftselect form-control" id="orderby"
                                            onchange="">
                                            <option value="callertype">Caller Type</option>
                                            <option value="category">Category</option>
                                            <option value="compliantid" selected="selected">Compliant ID</option>
                                            <option value="content">Content</option>
                                            <option value="customerid">Customer ID</option>
                                            <option value="customername">Registered Name</option>
                                            <option value="date">Date</option>
                                            <option value="forwardedto">Forwarded To</option>
                                            <option value="userid">Entered By</option>
                                            <option value="productgroup">Product Group</option>
                                            <option value="productname">Product Name</option>
                                            <option value="status">Status</option>
                                            <option value="time">Time</option>
                                        </select>
                                        <!-- <label for=""> Team Leader Remarks:</label> -->
                                    </div>
                                    <!-- Add more textarea fields as needed -->
                                </div>
                                <div class="text-end float-right flex">
                                    <button name="new" type="reset" class="btn btn-secondary">New</button>
                                    <button name="save" type="submit" class="btn btn-primary" id="view"
                                        value="View">View</button>
                                    <button name="delete" type="submit" class="btn btn-warning"
                                        onclick="formfilter('toexcel');">To Excel</button>
                                </div>
                            </form>
                        </div>
                    </div>
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