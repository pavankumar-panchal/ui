<?php
include("../navigation/navigation.php");

?>
<div class="container mt-5 rounded">
    <div class="card " style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv','toggleimg');">
            <h5 class="mb-0 header-line">&nbsp;&nbsp;Enter the Details</h5>
        </div>
        <div class="card-body" id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fromdate">From Date:</label>
                            <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" autocomplete="off"
                                value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="todate">To Date:</label>
                            <input name="todate" type="date" class="form-control" id="DPC_todate" autocomplete="off"
                                value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label>Registers:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Calls</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Emails Customer</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection"> Email-NonCustomer</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Skype</label> <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Errors</label> <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Onsite</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">

                                <label class="form-check-label" for="stremoteconnection">References</label> <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">In-House</label> <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Requirements</label>
                            </div>
                            <!-- Add other checkboxes here -->
                        </div>

                        <!-- Other input fields for the first column -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category:</label>
                            <select name="solvedby" id="solvedby" class="form-control form-select">
                                <option value="">ALL</option>
                                <!-- Add other options here -->
                            </select>
                            <!-- Add other checkboxes here -->
                        </div>
                        <div class="form-group">
                            <label>Support Unit:</label>
                            <select name="solvedby" id="solvedby" class="form-control form-select">
                                <option value="">ALL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Entered By:</label>
                            <select name="solvedby" id="solvedby" class="form-control form-select">
                                <option value="">ALL</option>
                                <!-- Add other options here -->
                            </select>
                            <!-- Add other checkboxes here -->
                        </div>
                        <div class="form-group">
                            <label>Caller Type:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Customers</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">Dealers</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection"> Employees</label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                    id="stremoteconnection" value="">
                                <label class="form-check-label" for="stremoteconnection">SSM Users</label> <br>

                            </div>
                            <!-- Add other checkboxes here -->
                        </div>

                        <div class="form-group">
                            <label>Anonymous:</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="anonymous" id="databasefield11" value="Yes"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="anonymous" id="databasefield11" value="No"> No
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="anonymous" id="databasefield11" value="Both"> Both
                                </label>
                                <!-- Add other radio buttons here -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="form-error"></div>
                        </div>
                        <div class="col-md-4 text-end float-right">
                            <button name="view" type="submit" class="btn btn-primary" id="view"
                                onclick="formsubmit('toview');">View
                            </button>
                            <button name="toexcel" type="submit" class="btn btn-warning ml-2" id="toexcel"
                                onclick="formsubmit('toexcel');">To Excel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

include("../navigation/footer.php");

?>