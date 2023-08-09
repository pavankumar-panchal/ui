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
                            <input name="registeredname" type="text" class="form-control" id="registered-name"
                                autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="customer-id" class="form-label">Customer Id:</label>
                            <input name="customerid" type="text" class="form-control" id="customer-id"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="bill-number" class="form-label">Bill Number:</label>
                            <input name="billnumber" type="text" class="form-control" id="bill-number"
                                autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="bill-date" class="form-label">Bill Date:</label>
                            <input name="billdate" type="date" class="form-control" id="bill-date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">Date:</label>
                            <input name="date" type="date" class="form-control" id="date">
                        </div>
                        <div class="col-md-6">
                            <label for="time" class="form-label">Time:</label>
                            <input name="time" type="time" class="form-control" id="time">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="receipt-number" class="form-label">Receipt Number:</label>
                            <input name="receiptnumber" type="text" class="form-control" id="receipt-number"
                                autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="receipt-date" class="form-label">Receipt Date:</label>
                            <input name="receiptdate" type="date" class="form-control" id="receipt-date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="baid-by" class="form-label">Baid By:</label>
                            <select name="baidby" class="form-select form-control">
                                <option value="Cash" selected>Cash</option>
                                <option value="Cheque">Cheque</option>
                                <!-- Add other options here -->
                            </select>
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
                            <label for="user-id" class="form-label">User ID:</label>
                            <input name="userid" type="text" class="form-control swifttext" id="user-id"
                                autocomplete="off">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-end float-right">
                                <div id="form-error"></div>
                                <button name="new" type="submit" class="btn btn-secondary" id="new"
                                    onclick="formsubmit('new');">New</button>
                                <button name="save" type="submit" class="btn btn-primary" id="save"
                                    onclick="formsubmit('save');">Save</button>
                                <button name="delete" type="submit" class="btn btn-danger" id="delete"
                                    onclick="formsubmit('delete');">Delete</button>
                                <button name="error-report" type="submit" class="btn btn-warning" id="error-report"
                                    onclick="formsubmit('error-report');">Error Report</button>
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
                            <button name="toexcel" type="submit" class="btn btn-info text-white"  id="toexcel"
                                onclick="formsubmit('toexcel');">To Excel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php

    include("../navigation/footer.php");

    ?>