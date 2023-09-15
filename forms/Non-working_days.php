<?php

include("../navigation/navigation.php");

?>



<div class="container mt-4">
    <div class="card border" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); margin-top: 50px;">
        <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
            Enter / Edit / View Details
            <span class="float-right">
                <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
            </span>
        </div>
        <div id="maindiv" style="display: block;">
            <div class="card-body bg-white">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="DPC_date" class="form-label">Date:</label>
                                <div class="input-group">
                                    <input name="date" type="date" class="form-control" id="DPC_date"
                                        datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <input type="hidden" name="lastslno" id="lastslno" value="">
                            <input type="hidden" name="loggeduser" id="loggeduser" value="1">
                            <input type="hidden" name="loggedusertype" id="loggedusertype" value="ADMIN">
                            <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                                value="<br/><b>Warning</b>:  Undefined variable $reportingauthority in <b>/opt/lampp/htdocs/mywork/redesign/masters/non-workingdays.php</b> on line <b>37</b><br />">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="occassion" class="form-label">Occasion:</label>
                                <input name="occassion" type="text" class="form-control" id="occassion" size="60"
                                    isdatepicker="true">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="remarks" class="form-label">Remarks:</label>
                                <textarea name="remarks" class="form-control" id="remarks" data-gramm="false"
                                    wt-ignore-input="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-end">
                                <div id="form-error"></div>
                                <button type="button" class="btn btn-secondary mr-2"
                                    onclick="newentry(); clearinnerhtml();">New</button>
                                <button type="button" class="btn btn-primary" onclick="formsubmit('save')">Save</button>
                                <button type="button" class="btn btn-danger" onclick="formsubmit('delete')"
                                    disabled="disabled">Delete</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  -->



<!-- Add the necessary Bootstrap CSS link -->


<div class="container mt-4">
    <div class="card border" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('filterdiv', 'toggleimg1');">
            Filter the Data:
            <span class="float-right">
                <img src="../images/minus.jpg" border="0" id="toggleimg1" name="toggleimg1" align="absmiddle">
            </span>
        </div>
        <div id="filterdiv" style="display: block;">
            <div class="card-body">
                <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="searchcriteria">Search Text:</label>
                                <input name="searchcriteria" type="text" class="form-control" id="searchcriteria"
                                    size="40" isdatepicker="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="orderby">Order By:</label>
                                <select name="orderby" class="form-control form-select" id="orderby">
                                    <option value="date" selected="selected">Date</option>
                                    <option value="occassion">Occasion</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                In:
                                <label class="mr-3">
                                    <input type="radio" name="databasefield" id="databasefield0" value="date"
                                        checked="checked">
                                    Date
                                </label>
                                <label>
                                    <input type="radio" name="databasefield" id="databasefield1" value="occassion">
                                    Occasion
                                </label>
                            </div>
                            <div class="form-group text-end">
                                <div id="filter-form-error"></div>
                                <button type="button" class="btn btn-primary" onclick="formfilter('view')">View</button>
                                <button type="button" class="btn btn-warning"
                                    onclick="formfilter('view')">Excel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <!--  -->
        <div class="col-md-12">
        </div>
    </div>
</div>
<?php

include("../navigation/footer.php");

?>