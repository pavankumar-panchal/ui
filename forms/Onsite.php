<?php

include("../navigation/navigation.php");

?>
<style>
    input{
        margin-top: 10px;
    }
</style>

    <div class="container mt-5 rounded ">
        <div class="card "  style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); width:98%;  margin-left:10px;">
            <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv','toggleimg'); ">
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
                                <select name="solvedby" id="solvedby" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Solved Through:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Remote Connection</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Marketing Person</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Onsite Visit</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stremoteconnection"
                                        id="stremoteconnection" value="">
                                    <label class="form-check-label" for="stremoteconnection">Over Phone</label>
                                </div>
                                <div class="form-check">
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
                                        <input type="radio" name="anonymous" value="Yes"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="anonymous" value="No"> No
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="anonymous" value="Both"> Both
                                    </label>
                                    <!-- Add other radio buttons here -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Reports on:</label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="reportson" value="Statistics"> Statistics
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="reportson" value="Details"> Details
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="reportson" value="Pending Visits"> Pending Visits
                                    </label>
                                    <!-- Add other radio buttons here -->
                                </div>
                            </div>
                            <!-- Other input fields for the first column -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="customername">Customer Name:</label>
                                <input name="customername" type="text" class="form-control " id="customername"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Product group:</label>
                                <select name="productgroup" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product name:</label>
                                <select name="productname" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <select name="status" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Registered By:</label>
                                <select name="registeredby" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Support Unit:</label>
                                <select name="supportunit" class="form-control form-select">
                                    <option value="">ALL</option>
                                    <!-- Add other options here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Complaint Id:</label>
                                <input name="complaintid" type="text" class="form-control" id="complaintid"
                                    autocomplete="off">
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
                            <div class="col-md-12 text-end float-right">
                                <button name="view" type="submit" class="btn btn-primary" id="view"
                                    onclick="formsubmit('toview');">View</button>
                                <button name="toexcel" type="submit" class="btn btn-warning ml-2" id="toexcel"
                                    onclick="formsubmit('toexcel');">To Excel</button>
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