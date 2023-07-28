<?php

include("../navigation/navigation.php");

?>


<div class="container mt-4 ">
    <div class="card border-light" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <div class="card-header bg-light " style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
            <div class="d-flex justify-content-between align-items-center">
                <span class="header-line pl-3">Enter / Edit / View Details</span>
                <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" class="img-fluid"
                    style="max-height: 20px;" align="absmiddle">
            </div>
        </div>
        <div class="card-body" id="maindiv" style="display: block;">
            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="form-group">
                            <label for="dealername">location Name:</label>
                            <input name="dealername" type="text" class="form-control" id="dealername" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="dealercompanyname">Business Name:</label>
                            <input name="dealercompanyname" type="text" class="form-control" id="dealercompanyname"
                                size="30" isdatepicker="true">
                            <input type="hidden" name="lastslno" id="lastslno" value="1">
                            <input type="hidden" name="loggeduser" id="loggeduser" value="1">
                            <input type="hidden" name="loggedusertype" id="loggedusertype" value="ADMIN">
                            <!-- Replace the following line with the actual value from the backend -->
                            <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority" value="">
                        </div>

                        <div class="form-group">
                            <label for="contactnumber">Address:</label>
                            <input name="contactnumber" type="text" class="form-control" id="contactnumber" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="emailid">Place:</label>
                            <input name="emailid" type="text" class="form-control" id="emailid" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="category">District:</label>
                            <input name="district" type="text" class="form-control" id="district" size="30"
                                isdatepicker="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="skypeid">State:</label>
                            <input name="skypeid" type="text" class="form-control" id="skypeid" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="district">phone:</label>
                            <input name="district" type="text" class="form-control" id="district" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="place">Email ID:</label>
                            <input name="place" type="text" class="form-control" id="place" size="30"
                                isdatepicker="true">
                        </div>
                        <div class="form-group">
                            <label for="state">Location Incharge:</label>
                            <input name="state" type="text" class="form-control" id="state" size="30"
                                isdatepicker="true">
                        </div>

                    </div>
                </div>
                <div class="text-center mt-3 float-end">
                    <div id="form-error"></div>
                    <input name="new" type="reset" class="btn btn-secondary" id="new" value="New"
                        onclick="newentry();clearinnerhtml();">
                    <input name="save" type="submit" class="btn btn-primary" id="save" value="Save"
                        onclick="formsubmit('save')">
                    <input name="delete" type="submit" class="btn btn-danger" id="delete" value="Delete"
                        onclick="formsubmit('delete')">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-light style=" cursor:pointer" onclick="showhide('filterdiv','toggleimg1');">
            <div class="d-flex justify-content-between align-items-center">
                <span class="header-line pl-3">Filter the Data:</span>
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
                            <input name="searchcriteria" type="text" class="form-control" id="searchcriteria" size="40"
                                isdatepicker="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="orderby">Order By:</label>
                            <select name="orderby" class="form-control form-select" id="orderby">
                                <option value="locationname" selected="selected">Location Name
                                </option>
                                <option value="businessname">Business Name</option>
                                <option value="address">Address</option>
                                <option value="state">State</option>
                                <option value="place">Place</option>
                                <option value="district">District</option>
                                <option value="phone">Phone</option>
                                <option value="emailid">Email ID</option>
                                <option value="locationincharge">Location Incharge</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label for="databasefield">Sort By:</label>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input type="radio" name="databasefield" id="databasefield0" value="locationname"
                                        checked="checked">
                                    Location Name</label>

                            </div>
                            <div class="form-check form-check-inline">

                                <label>


                                    <input type="radio" name="databasefield" id="databasefield1" value="businessname">
                                    Business Name</label>
                            </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="address" id="databasefield2">
                                    Address</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="place" id="databasefield3">
                                    Place</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="district" id="databasefield5">
                                    District</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="state" id="databasefield6">
                                    State</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="phone" id="databasefield7">
                                    Phone</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="emailid" id="databasefield8">
                                    Email Id</label> </div>
                            <div class="form-check form-check-inline"><label>
                                    <input type="radio" name="databasefield" value="locationincharge"
                                        id="databasefield4">
                                    Location Incharge</label>
                            </div>
                            <!--  -->

                            <!-- Add other radio options similarly -->
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3 float-end">
                    <div id="filter-form-error"></div>
                    <input name="view" type="submit" class="btn btn-primary" id="view" value="View"
                        onclick="formfilter('view')">
                    <input name="view" type="submit" class="btn btn-warning" id="view" value="Excel"
                        onclick="formfilter('view')">
                </div>
            </form>
   
    </div>
</div>

<div class="col-md-12">
</div>
</div>
</div>
<?php

include("../navigation/footer.php");

?>