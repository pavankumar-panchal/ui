<?php

include("../navigation/navigation.php");

?>
               <!-- <div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Masters</span>
            </li>
            <li class="breadcrumb-item active"><span>Products</span></li>
        </ol>
    </nav>
</div>
</header> -->
<div class="container mt-4">
    <div class="card ">
        <div class="card-header bg-light" style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
            <div class="d-flex justify-content-between align-items-center">
                <span class="header-line pl-3">&nbsp;&nbsp;Enter / Edit / View Details</span>
                <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" class="img-fluid"
                    style="max-height: 20px;" align="absmiddle">
            </div>
        </div>
        <div class="card-body" id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="form-group">
                            <label for="productname">Product Name:</label>
                            <input name="productname" type="text" class="form-control swifttext" id="productname"
                                size="30" isdatepicker="true">
                            <input type="hidden" name="lastslno" id="lastslno" value="">
                            <input type="hidden" name="loggeduser" id="loggeduser" value="1">
                            <input type="hidden" name="loggedusertype" id="loggedusertype" value="ADMIN">
                            <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                                value="<br />
                                    <b>Warning</b>:  Undefined variable $reportingauthority in <b>/opt/lampp/htdocs/mywork/redesign/masters/products.php</b> on line <b>34</b><br />">
                        </div>
                        <div class="form-group">
                            <label for="shortformat">Product Short Format:</label>
                            <input name="shortformat" type="text" class="form-control swifttext" id="shortformat"
                                size="30" isdatepicker="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="productgroup">Product Group:</label>
                            <span id="prdgroupspan">
                                <select name="productgroup" class="form-control swiftselect form-select"
                                    id="productgroup" onchange="productnamefunction();">
                                    <option value="" selected="selected">Make a Selection</option>
                                    <option value="null">null</option>
                                    <option value="pro">pro</option>
                                </select>
                                <!-- Details are in javascript.js page as a function prdgroup(); -->
                            </span>
                        </div>
                        <div class="form-group ">
                            <label for="productinuse">Is Product in Use:</label>
                            <select name="productinuse" class="form-control swiftselect form-select" id="productinuse">
                                <option value="yes" selected="selected">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center float-end mt-3">
                    <div id="form-error"></div>
                    <input name="new" type="reset" class="btn btn-secondary swiftchoicebutton" id="new" value="New"
                        onclick="newentry();clearinnerhtml();">
                    <input name="save" type="submit" id="save" class="btn btn-primary swiftchoicebutton" value="Save"
                        onclick="formsubmit('save')">
                    <input name="delete" type="submit" class="btn btn-danger swiftchoicebuttondisabled" id="delete"
                        value="Delete" onclick="formsubmit('delete')" disabled="disabled">
                </div>
            </form>
        </div>
    </div>
</div>









<!--  -->
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-light" style="cursor:pointer" onclick="showhide('filterdiv','toggleimg1');">
            <div class="d-flex justify-content-between align-items-center">
                <span class="header-line pl-3">&nbsp;&nbsp;Filter the Data:</span>
                <img src="../images/minus.jpg" border="0" id="toggleimg1" name="toggleimg1" class="img-fluid"
                    style="max-height: 20px;" align="absmiddle">
            </div>
        </div>
        <div class="card-body" id="filterdiv" style="display: block;">
            <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="form-group">
                            <label for="searchcriteria">Search Text:</label>
                            <div id="textname" style="display:block">
                                <input name="searchcriteria" type="text" class="form-control swifttext"
                                    id="searchcriteria" size="40" isdatepicker="true">
                            </div>
                            <div id="groupname" style="display:none">
                                <select name="s_productgroup" class="form-control form-select" id="s_productgroup"
                                    onchange="">
                                    <option value="productname">Product Name</option>
                                    <option value="shortformat">Short Format</option>
                                    <option value="productgroup" selected="selected">Product Group
                                    </option>
                                    <option value="productinuse">Product In Use</option>
                                </select>
                                <!-- Details are in javascript.js page as a function prdgroup(); -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="orderby">Order By:</label>
                            <select name="orderby" class="form-control swiftselect form-select" id="orderby">
                                <option value="productname" selected="selected">Product Group
                                </option>
                                <option value="productname">Product Name</option>
                                <option value="releasedate">Release Date</option>
                                <option value="productinuse">Product In Use</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    In:
                    <div class="form-check form-check-inline">
                        <input type="radio" name="databasefield" id="databasefield0" value="productname"
                            checked="checked" onclick="prdname('textname',databasefield0);" class="form-check-input">
                        <label class="form-check-label" for="databasefield0">Product Name</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="databasefield" id="databasefield0" value="shortform"
                            onclick="prdname('textname',databasefield2);" class="form-check-input">
                        <label class="form-check-label" for="databasefield2">Product Short
                            Format</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="databasefield" id="databasefield0" value="productgroup"
                            onclick="prdgroup('groupname',databasefield1);" class="form-check-input">
                        <label class="form-check-label" for="databasefield1">Product Group</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="databasefield" id="databasefield0" value="productinuse"
                            onclick="prdgroup('groupname',databasefield1);" class="form-check-input">
                        <label class="form-check-label" for="databasefield1">Product in Use</label>
                    </div>
                </div>
                <div class="text-center mt-3 float-end">
                    <div id="filter-form-error"></div>
                    <input name="view" type="submit" class="btn btn-primary swiftchoicebutton" id="view" value="View"
                        onclick="formfilter('view');">

                    <input name="view" type="submit" class="btn btn-warning swiftchoicebutton" id="view" value="Excel"
                        onclick="formfilter('view');">


                </div>
            </form>
        </div>



<!--  -->
<div class="col-md-12">
</div>
</div>
</div>
<?php

include("../navigation/footer.php");

?>