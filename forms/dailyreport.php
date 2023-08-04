<?php
include("../navigation/navigation.php");


?>

<!-- <div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Reports</span>
            </li>
            <li class="breadcrumb-item active"><span>Daily Reports</span></li>
        </ol>
    </nav>
</div>
</header> -->
<div class="container mt-5">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light" style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                <span>&nbsp;&nbsp;Enter the Details</span>
                <div class="float-end">
                    <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
                </div>
            </div>
            <div class="card-body" id="maindiv" style="display: block;">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row mb-3">
                        <label for="DPC_fromdate" class="col-sm-4 col-form-label">From Date:</label>
                 
                                <input name="fromdate" type="date" class="form-control" id="DPC_fromdate"
                                    autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                    maxlength="10" isdatepicker="true" fdprocessedid="unv8x9">
                            <input name="username" type="hidden" class="form-control" id="username" value="1">
                    </div>
                    <div class="row mb-3">
                        <label for="DPC_todate" class="col-sm-4 col-form-label">To Date:</label>
            
                                <input name="todate" type="date" class="form-control" id="DPC_todate"
                                    autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                    maxlength="10" isdatepicker="true" fdprocessedid="6pecbh">
                            <input name="usertype" type="hidden" class="form-control" id="usertype" value="ADMIN">
                    </div>
                    <div class="row mb-3">
                        <label for="userid" class="col-sm-4 col-form-label">User Name:</label>
                            <select name="userid" id="userid" class="form-select" fdprocessedid="9mlttf">
                                <option value="">Make a selection</option>
                                <!-- Add options here -->
                            </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div id="form-error"></div>
                        </div>
                        <div class="col-md-6 text-end">
                            <input name="view" type="submit" class="btn btn-primary" id="view" value="View"
                                onclick="formsubmit('view');" fdprocessedid="mnaln6">
                            &nbsp;&nbsp;&nbsp;
                            <input name="excel" type="submit" class="btn btn-warning" id="excel" value="excel"
                                onclick="formsubmit('excel');" fdprocessedid="mnaln6">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php

include("../navigation/footer.php");

?>