<?php
include("../navigation/navigation.php");
?>
<div class="container mt-5">
    <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); width:98%; margin-left:10px;">
        <div class="card-header bg-light d-flex justify-content-between align-items-center" style="cursor:pointer;"
            onclick="showhide('maindiv','toggleimg');">
            <span class="ms-2">Enter the Details</span>
            <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" class="me-2" align="absmiddle">
        </div>
        <div class="card-body" id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <div class="mb-3">
                    <label for="DPC_fromdate" class="form-label">From Date:</label>
                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" autocomplete="off"
                        value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true"
                        fdprocessedid="unv8x9">
                    <input name="username" type="hidden" class="form-control" id="username" value="1">
                </div>
                <div class="mb-3">
                    <label for="DPC_todate" class="form-label">To Date:</label>
                    <input name="todate" type="date" class="form-control" id="DPC_todate" autocomplete="off"
                        value="21-07-2023" datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true"
                        fdprocessedid="6pecbh">
                    <input name="usertype" type="hidden" class="form-control" id="usertype" value="ADMIN">
                </div>
                <div class="mb-3">
                    <label for="userid" class="form-label">User Name:</label>
                    <select name="userid" id="userid" class="form-select" fdprocessedid="9mlttf">
                        <!-- Add options here -->
                        <?php if ($usertype == 'MANAGEMENT' || $usertype == 'ADMIN' || $usertype == 'TEAMLEADER') {
                            ?>
                            <select name="userid" id="userid" class="swiftselect">
                                <?php include('../inc/useridselectionreports.php'); ?>
                            </select>
                            <?php
                        } else {
                            ?>
                            <span style="width:45%">
                                <input type="hidden" name="userid" id="userid" />
                                <?php
                                echo $loggedusername;
                        }
                        ?>
                    </select>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div id="form-error"></div>
                    </div>
                    <div class="col-md-6 text-end">
                        <input name="view" type="submit" class="btn btn-primary" id="view" value="View"
                            onclick="formsubmit('view');" fdprocessedid="mnaln6">
                        <input name="excel" type="submit" class="btn btn-warning ms-2" id="excel" value="Excel"
                            onclick="formsubmit('toexcel');" fdprocessedid="mnaln6">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Include Bootstrap JS scripts here if needed -->


<?php

include("../navigation/footer.php");

?>