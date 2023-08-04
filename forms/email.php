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
                                        <label for="customername" class="form-label">Cusomer ID:</label>
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
                                        <label for="customername" class="form-label">Person Name[if any]:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">

                                        <label for="customername" class="form-label">Product group:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Product Name(Optional):</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                    </div>
                                    <!-- second -->
                                    <div class="mb-3 " style="width: 50%; margin:20px;">
                                        <label for="customername" class="form-label">Product version:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Person Name:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Subject:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Problem:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Error File:</label>
                                        <input name="customerid" type="file" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Status:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                        <label for="teamleaderremarks" class="form-label">Forworded To:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                ALL
                                            </option>
                                        </select>
                                        <!-- second div -->
                                        <label for="customername" class="form-label">Thanking Email:</label> <br>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            Check for Thaking email
                                        </label> <br>
                                        <label for="customername" class="form-label">Remarks:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Entered By: </label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Email Register ID:</label>
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
                                        <input name="customerid" type="date" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">To Date:</label>
                                        <input name="customerid" type="date" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
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

                                        <label class="form-check-label" for="onsitevisit"> <input
                                                class="form-check-input" type="checkbox" name="onsitevisit"
                                                id="onsitevisit" value="" checked>
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
                                        <label class="form-check-label" for="stremoteconnection"> <input
                                                class="form-check-input" type="checkbox" name="stremoteconnection"
                                                id="stremoteconnection" value=""> Customers</label>

                                        <label class="form-check-label" for="marketingperson"> <input
                                                class="form-check-input" type="checkbox" name="marketingperson"
                                                id="marketingperson" value=""> Dealers</label>

                                        <label class="form-check-label" for="onsitevisit"> <input
                                                class="form-check-input" type="checkbox" name="onsitevisit"
                                                id="onsitevisit" value="" checked>
                                            Employees</label>
                                        <label class="form-check-label" for="onsitevisit">
                                            <input class="form-check-input" type="checkbox" name="onsitevisit"
                                                id="onsitevisit" value="" checked>
                                            SSM Users</label>
                                        <br>
                                        <label for="customername" class="form-label">Product group:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>

                                        <label for="customername" class="form-label">Product Name:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>

                                        <label for="customername" class="form-label">Email ID:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">

                                    </div>

                                    <!-- second -->

                                    <div class="mb-3 " style="width: 50%; margin:20px;">
                                        <label for="customername" class="form-label">Content:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">

                                        <label for="customername" class="form-label">Status:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>

                                        <label for="customername" class="form-label">Forwarded To:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                Make a Selection
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Error File:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="teamleaderremarks" class="form-label">Thanking Email:</label>
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


                                        <!-- second div -->
                                        <label for="customername" class="form-label">Entered By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                ALL
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Compliant ID:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                        <label for="customername" class="form-label">Flags: </label>
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


                                        <label for="customername" class="form-label">Support Unit:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                ALL
                                            </option>
                                        </select>
                                        <label for="customername" class="form-label">Order By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup" onchange="">
                                            <option value="" selected="selected">
                                                ALL
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








    <?php

    include("../navigation/footer.php");

    ?>