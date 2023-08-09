<?php

include("../navigation/navigation.php");

?>
     
<style>
  .display {
    display: flex;
    flex-direction: row;
  }
</style>

<div class="container mt-5 rounded">
        <div class="card shadow">
            <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv','toggleimg');">
                <h5 class="mb-0 header-line">&nbsp;&nbsp;Enter the Details</h5>
            </div>
            <div class="card-body" id="maindiv" style="display: block;">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fromdate">From Date:</label>
                                <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                    autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10"
                                    isdatepicker="true">
                            </div>
                            <div class="form-group">
                                <label for="todate">To Date:</label>
                                <input name="todate" type="date" class="form-control" id="DPC_todate" autocomplete="off"
                                    value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10"
                                    isdatepicker="true">
                            </div>
                            <div class="form-group">
                                <label>Service Charge:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Service Charge</label>
                                </div>
                                <!-- Add other checkboxes here -->
                            </div>
                            <div class="form-group">
                                <label for="solvedby">Solved By:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Solved Throuh:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Remote Conection</label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Marketing Person</label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection"> Onsite Visit</label> <br>
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Over Phone</label> <br>
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Mail</label>
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

                            <div class="form-group">
                                <label>Reports on:</label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="anonymous" id="databasefield11" value="Statistics">
                                        Statistics
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="anonymous" id="databasefield11" value="Details">
                                        Details
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="anonymous" id="databasefield11"
                                            value="Pending Visits"> pending Visits
                                    </label>
                                    <!-- Add other radio buttons here -->
                                </div>
                            </div>
                            <!-- Other input fields for the first column -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="solvedby">Customer Name:</label>
                                <input name="todate" type="text" class="form-control" id="DPC_todate" autocomplete="off"
                                    datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                            </div>
                            <div class="form-group">
                                <label>Product group:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                                <!-- Add other checkboxes here -->
                            </div>
                            <div class="form-group">
                                <label>Product name:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                                <!-- Add other checkboxes here -->
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                                <!-- Add other checkboxes here -->
                            </div>
                            <div class="form-group">
                                <label>Registered By:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Support Unit:</label>
                                <select name="solvedby" id="solvedby" class="form-control">
                                    <option value="">ALL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Complaint Id:</label>
                                <input name="todate" type="text" class="form-control" id="DPC_todate" autocomplete="off"
                                    isdatepicker="true">
                                <!-- Add other checkboxes here -->
                            </div>
                            <!-- Other input fields for the second column -->
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="form-error"></div>
                            </div>
                            <div class="col-md-4 text-right">
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