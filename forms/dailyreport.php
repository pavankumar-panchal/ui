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
<div class="container mt-4">
    <table class="table table-bordered"
        style="border:1px solid #cacaca;  box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.126);">
        <thead>
            <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                <th class="header-line bg-light" style="padding:0">&nbsp;&nbsp;Enter the Details
                    <div class="float-end">
                        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" valign="top">
                    <div id="maindiv" style="display: block;">
                        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="table-light">
                                        <td valign="top">From Date:</td>
                                        <td valign="top">
                                            <div class="input-group">
                                                <input name="fromdate" type="date" class="form-control"
                                                    id="DPC_fromdate" autocomplete="off" value="21-07-2023"
                                                    datepicker_format="DD-MM-YYYY" maxlength="10" isdatepicker="true"
                                                    fdprocessedid="unv8x9">
                                                <span class="input-group-text"></span>
                                            </div>
                                            <input name="username" type="hidden" class="form-control" id="username"
                                                value="1">
                                        </td>
                                    </tr>
                                    <tr class="table-light">
                                        <td valign="top">To Date:</td>
                                        <td valign="top">
                                            <div class="input-group">
                                                <input name="todate" type="date" class="form-control" id="DPC_todate"
                                                    autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                                    maxlength="10" isdatepicker="true" fdprocessedid="6pecbh">
                                                <span class="input-group-text"></span>
                                            </div>
                                            <input name="usertype" type="hidden" class="form-control" id="usertype"
                                                value="ADMIN">
                                        </td>
                                    </tr>
                                    <tr class="table-light">
                                        <td valign="top">User Name:</td>
                                        <td valign="top">
                                            <select name="userid" id="userid" class="form-select"
                                                fdprocessedid="9mlttf">
                                                <option value="">Make a selection</option>
                                                <!-- Add options here -->
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php

include("../navigation/footer.php");

?>