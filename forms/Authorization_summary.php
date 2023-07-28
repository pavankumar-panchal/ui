<?php

include("../navigation/navigation.php");

?>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Options</span>
            </li>
            <li class="breadcrumb-item active"><span>Record Authorization</span></li>
        </ol>
    </nav>
</div>
</header>
<!-- content -->
<div class="container mt-4 ">
    <table class="table table-bordered table-striped" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
        <thead>
            <tr style="cursor:pointer" onclick="showhide('pendingauthorization','toggleimg');">
                <th class="header-line bg-light" colspan="2">
                    &nbsp;&nbsp;Authorization Summary - You have <strong>0</strong> Records Pending
                    for
                    Authorization
                    <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                            align="absmiddle"></div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="50%">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-white">

                                <td valign="top">Calls:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Emails:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Errors:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Inhouse:</td>
                                <td valign="top">0</td>
                            </tr>

                            <tr class="bg-white">

                                <td valign="top">Onsite:</td>
                                <td valign="top">0</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="50%">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-white">
                                <td valign="top">Reference:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Requirement:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Skype:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Invoice:</td>
                                <td valign="top">0</td>
                            </tr>
                            <tr class="bg-white">
                                <td valign="top">Receipts:</td>
                                <td valign="top">0</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- second form  -->
    <div class="container mt-4">
        <table class="table table-bordered table-striped" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <thead>
                <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                    <th class="header-line bg-light" colspan="2">
                        &nbsp;&nbsp;Enter / Edit / View Details
                        <div class="float-end"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                align="absmiddle"></div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" valign="top">
                        <div id="maindiv" style="display: block;">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <table class="table table-bordered bg-white">
                                    <tbody>
                                        <tr>
                                            <td valign="middle" align="center"
                                                style="border-bottom:1px solid #d1dceb; padding:0" height="170">
                                                <div id="displayregisters"><img src="../images/warn.gif" border="0"
                                                        align="absmiddle">&nbsp;
                                                    <strong>Make A Selection of record from the grid
                                                        below</strong>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="authorizedgroup">Category:</label>
                                                            <select name="solvedby" id="solvedby"
                                                                class="form-select form-control">
                                                                <option value="">Make a selection
                                                                </option>
                                                                <!-- Add other options here -->
                                                            </select>
                                                        </div>
                                                        <br>
                                                        <div class="form-group"
                                                            style="display: flex; flex-direction: row;">
                                                            <label>Authorized:</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="authorizedatabasefield"
                                                                    id="authorizedatabasefield0" value="yes"
                                                                    checked="checked" class="form-check-input">
                                                                <label for="authorizedatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="authorizedatabasefield"
                                                                    id="authorizedatabasefield1" value="no"
                                                                    class="form-check-input">
                                                                <label for="authorizedatabasefield1"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="margin-top:20px;">
                                                        <div class="form-group "
                                                            style="display: flex; flex-direction: row;">
                                                            <label>Flag the Entry:</label>
                                                            &nbsp;&nbsp;&nbsp;

                                                            <div class="form-check">
                                                                <input type="radio" name="flagdatabasefield"
                                                                    id="flagdatabasefield0" value="yes"
                                                                    class="form-check-input">
                                                                <label for="flagdatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="flagdatabasefield"
                                                                    id="flagdatabasefield1" value="no" checked="checked"
                                                                    class="form-check-input">
                                                                <label for="flagdatabasefield1"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="form-group"
                                                            style="display: flex; flex-direction: row; word-spacing: 10px; margin-top: 10px ;">
                                                            <label>Publish:</label> &nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="publishdatabasefield"
                                                                    id="publishdatabasefield0" value="yes"
                                                                    class="form-check-input">
                                                                <label for="publishdatabasefield0"
                                                                    class="form-check-label">Yes</label>
                                                            </div>&nbsp;
                                                            <div class="form-check">
                                                                <input type="radio" name="publishdatabasefield"
                                                                    id="publishdatabasefield2" value="no"
                                                                    checked="checked" class="form-check-input">
                                                                <label for="publishdatabasefield2"
                                                                    class="form-check-label">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="middle"
                                                style="padding-right:15px; border-top:1px solid #d1dceb;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="teamleaderremarks"
                                                                class="float-start">Remarks:</label>
                                                            <textarea name="teamleaderremarks" cols="45"
                                                                class="form-control" id="teamleaderremarks"
                                                                data-gramm="false" wt-ignore-input="true"></textarea>
                                                            <input type="hidden" name="lastslno" id="lastslno" value="">
                                                            <input type="hidden" name="registervalue" id="registervalue"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="loggedusertype" id="loggedusertype"
                                                            value="ADMIN">
                                                        <input type="hidden" name="loggeduser" id="loggeduser"
                                                            value="1">
                                                        <input type="hidden" name="loggedreportingauthority"
                                                            id="loggedreportingauthority" value="">
                                                    </div>
                                                    <div class="col-md-6 text-end" style="margin-top: 10px;">
                                                        <div id="form-error"></div>
                                                        <input name="save" type="submit" class="btn btn-primary"
                                                            id="save" value="Save" onclick="formsubmit('save')">
                                                        <input name="new" type="reset" class="btn btn-secondary"
                                                            id="new" value="Clear" onclick="clearinnerhtml();">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <div id="wrapper" class="table-container"></div>

    </div>
</div>
</div>

<?php


include("../navigation/footer.php");
?>