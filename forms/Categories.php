<?php

include("../navigation/navigation.php");

?>


<!-- <div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Masters</span>
            </li>
            <li class="breadcrumb-item active"><span>Categories</span></li>
        </ol>
    </nav>
</div>
</header> -->
<div class="container mt-4">
    <div class="card border" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); margin-top: 50px;">
        <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
            Enter / Edit / View Details
            <span class="float-end">
                <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
            </span>
        </div>
        <div id="maindiv" style="display: block;">
            <div class="card-body bg-white">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="DPC_date">Category Heading:</label>
                                <div class="input-group">
                                    <input name="" type="text" class="form-control" id="DPC_date"
                                        datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true">
                                    <div class="input-group-append">
                                        <!-- Additional elements here if needed -->
                                    </div>
                                </div>
                                <!-- Hidden input fields here -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="remarks">Remarks:</label>
                                <textarea name="remarks" cols="45" class="form-control" id="remarks" data-gramm="false"
                                    wt-ignore-input="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-end mt-3">
                            <div id="form-error"></div>
                            <button type="button" class="btn btn-secondary mr-2"
                                onclick="newentry();clearinnerhtml();">New</button>
                            <button type="button" class="btn btn-primary" onclick="formsubmit('save')">Save</button>
                            <button type="button" class="btn btn-danger" onclick="formsubmit('delete')"
                                disabled="disabled">Delete</button>
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
            <span class="float-end">
                <img src="../images/minus.jpg" border="0" id="toggleimg1" name="toggleimg1" align="absmiddle">
            </span>
        </div>
        <div id="filterdiv" style="display: block;">
            <div class="card-body">
                <form action="" method="post" name="filterform" id="filterform" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Search Text:</td>
                                        <td>
                                            <input name="searchcriteria" type="text" class="form-control"
                                                id="searchcriteria" size="40" isdatepicker="true">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Order By:</td>
                                        <td>
                                            <select name="orderby" class="form-control form-select" id="orderby">
                                                <option value="date" selected="selected">Remarks
                                                </option>
                                                <option value="occassion">Category Heading
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                In:
                                <label class="mr-3">
                                    <input type="radio" name="databasefield" id="databasefield0" value="date"
                                        checked="checked">
                                    Remarks
                                </label>
                                <label>
                                    <input type="radio" name="databasefield" id="databasefield1" value="occassion">
                                    Category Heading
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
    </div>

</div>
<?php

include("../navigation/footer.php");

?>