<?php
include("../navigation/navigation.php");
?>

<div class="container mt-4 p-4 rounded-4">
    <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <div class="card-header form-title" onclick="toggleFormVisibility();">
            Enter the Details <span id="toggleimg" class="float-end pointer-event">+</span>
        </div>
        <div class="card-body main-form" id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <!-- Rest of the form content goes here -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- First column content -->
                        <div class="mb-3">
                            <label for="fromdate" class="form-label">From Date:</label>
                            <input name="fromdate" type="date" class="form-control swifttext" id="DPC_fromdate"
                                size="30" autocomplete="off" value="" datepicker_format="DD-MM-YYYY" maxlength="10"
                                isdatepicker="true">
                        </div>
                        <div class="mb-3">
                            <label for="todate" class="form-label">To Date:</label>
                            <input name="todate" type="date" class="form-control" id="DPC_todate" size="30"
                                autocomplete="off" value="" datepicker_format="DD-MM-YYYY" maxlength="10"
                                isdatepicker="true">
                        </div>
                        <div class="mb-3">
                            <label for="productgroup" class="form-label">Product group:</label>
                            <select name="productgroup" id="filterprdgroupdisplay" class="form-control form-select">
                                <?php include('../inc/productgroup.php');
                                productname('s_productgroup', 'color');
                                ?>
                                <!-- Other options -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="productname" class="form-label">Product Name:</label>
                            <select name="productname" id="productname" class="form-control form-select">
                                <option value="">Make A Selection</option>
                                <?php include('../inc/productfilter.php'); ?>
                                <!-- Other options -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="errordescription" class="form-label">Error Description:</label>
                            <input name="errorreported" type="text" class="form-control" id="errorreported" size="30"
                                autocomplete="off" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Second column content -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" id="status" class="form-control form-select">
                                <option value="">Make A Selection</option>
                                <option value="solved">Solved</option>
                                <option value="unsolved">Un Solved</option>
                                <!-- Other options -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="enteredby" class="form-label">Entered By:</label>
                            <select name="userid" id="userid" class="form-control swiftselect form-select">
                                <?php if ($usertype == 'MANAGEMENT' || $usertype == 'ADMIN' || $usertype == 'TEAMLEADER') { ?>
                                    <option value="">ALL</option>
                                    <?php include('../inc/useridselectionreports.php');
                                } else { ?>
                                    <?php include('../inc/useridselectionreports.php');
                                } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="reportedto" class="form-label">Reported To:</label>
                            <input name="reportedto" type="text" class="form-control" id="reportedto" size="30"
                                autocomplete="off" value="">
                        </div>
                        <div class="mb-3">
                            <label for="reportedby" class="form-label">Reported by:</label>
                            <input name="customername" type="text" class="form-control" id="customername" size="30"
                                autocomplete="off" value="">
                        </div>
                    </div>
                </div>
                <div class="text-end submit-btn">
                    <div class="form-group">
                        <div id="form-error"></div>
                    </div>
                    <button name="view" type="submit" class="btn btn-primary" id="view"
                        onclick="formsubmit();">View</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php

include("../navigation/footer.php");

?>