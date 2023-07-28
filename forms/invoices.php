<?php

include("../navigation/navigation.php");

?>




                    <!-- content -->
                    <style>
                        .display {
                            display: flex;
                            flex-direction: row;
                        }
                    </style>
                    </head>

                    <body>
                        <div class="container mt-4">
                            <table class="table table-bordered"
                                style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                                <tbody>
                                    <tr onclick="showhide('maindiv','toggleimg');" class="header-line">
                                        <td class="bg-light">&nbsp;&nbsp;Enter/Edit/View Details</td>
                                        <td align="right" class="bg-light">
                                            <div align="right"><img src="../images/minus.jpg" border="0" id="toggleimg"
                                                    name="toggleimg" align="absmiddle"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" valign="top" class="bg-light">
                                            <div id="maindiv" style="display: block;">
                                                <form action="" method="post" name="submitform" id="submitform"
                                                    onsubmit="return false;">
                                                    <div class="display">
                                                        <table class="table table-bordered table1">
                                                            <tbody>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Registered Name:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Customer Id:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Product Group:</td>
                                                                    <td valign="top">
                                                                        <input name="customerid" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Product Name:</td>
                                                                    <td valign="top">
                                                                        <input name="customerid" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">product Version:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">State:</td>
                                                                    <td valign="top">
                                                                        <span id="filterprdgroupdisplay">
                                                                            <select name="s_productgroup"
                                                                                class="form-select swiftselect form-control"
                                                                                id="s_productgroup" onchange="">
                                                                                <option value="" selected="selected">
                                                                                    ALL
                                                                                </option>

                                                                            </select>
                                                                            <!-- Details are in javascript.js page as a function prdgroup();-->
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Number:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Date:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Register Name</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Complaint ID:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Date:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="date"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Time:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="time"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>



                                                        <table class="table table-bordered table2">
                                                            <tbody>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Given To:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="time"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Billed By:</td>
                                                                    <td valign="top">
                                                                        <span id="filterprdgroupdisplay">
                                                                            <select name="s_productgroup"
                                                                                class="form-select swiftselect form-control"
                                                                                id="s_productgroup" onchange="">
                                                                                <option value="" selected="selected">
                                                                                    Make a Selection
                                                                                </option>

                                                                            </select>
                                                                            <!-- Details are in javascript.js page as a function prdgroup();-->
                                                                        </span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Amount:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="time"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Tax Amount:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">

                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Total Amount:</td>
                                                                    <td valign="top">
                                                                        <input name="customerid" type="text"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Remarks:</td>
                                                                    <td valign="top">
                                                                        <textarea name="teamleaderremarks" cols="45"
                                                                            class="form-control" id="teamleaderremarks"
                                                                            data-gramm="false"
                                                                            wt-ignore-input="true"></textarea>
                                                                    </td>
                                                                </tr>


                                                                <tr class="bg-white">
                                                                    <td valign="top">User ID:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="container bg-light">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div id="form-error"></div>
                                                            </div>
                                                            <div class="col-md-4 float-right bg-light " align="right">
                                                                <input name="new" type="submit"
                                                                    class="btn btn-secondary " id="view" value="New"
                                                                    onclick="formsubmit('toview');">
                                                                <input name="save" type="submit"
                                                                    class="btn btn-primary " id="view" value="Save"
                                                                    onclick="formsubmit('toview');">
                                                                <input name="delete" type="submit"
                                                                    class="btn btn-danger" id="toexcel" value="Delete"
                                                                    onclick="formsubmit('toexcel');">
                                                                <input name="delete" type="submit"
                                                                    class="btn btn-warning" id="toexcel"
                                                                    value="Error Report"
                                                                    onclick="formsubmit('toexcel');">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>




                        <div class="container mt-4">
                            <table class="table table-bordered"
                                style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
                                <tbody>
                                    <tr onclick="showhide('maindiv','toggleimg');" class="header-line">
                                        <td class="bg-light">&nbsp;&nbsp;Filter the Data:
                                        <td align="right" class="bg-light">
                                            <div align="right"><img src="../images/minus.jpg" border="0" id="toggleimg"
                                                    name="toggleimg" align="absmiddle"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" valign="top" class="bg-light">
                                            <div id="maindiv" style="display: block;">
                                                <form action="" method="post" name="submitform" id="submitform"
                                                    onsubmit="return false;">
                                                    <div class="display">
                                                        <table class="table table-bordered table1">
                                                            <tbody>
                                                                <tr class="bg-white">
                                                                    <td valign="top">From Date:</td>
                                                                    <td valign="top">
                                                                        <div class="d-flex">
                                                                            <input name="fromdate" type="date"
                                                                                class="form-control" id="DPC_fromdate"
                                                                                size="30" autocomplete="off"
                                                                                value="21-07-2023"
                                                                                datepicker_format="DD-MM-YYYY"
                                                                                maxlength="10" isdatepicker="true">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">To Date:</td>
                                                                    <td valign="top">
                                                                        <div class="d-flex">
                                                                            <input name="fromdate" type="date"
                                                                                class="form-control" id="DPC_fromdate"
                                                                                size="30" autocomplete="off"
                                                                                value="21-07-2023"
                                                                                datepicker_format="DD-MM-YYYY"
                                                                                maxlength="10" isdatepicker="true">
                                                                        </div>
                                                                    </td>
                                                                </tr>


                                                                <tr class="bg-white">
                                                                    <td valign="top">Customer Name:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Customer ID:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Product Group:</td>
                                                                    <td valign="top">
                                                                        <select name="productname" id="productname"
                                                                            class="form-select form-control swiftselect">
                                                                            <option value="">ALL</option>

                                                                        </select>

                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Product Name</td>
                                                                    <td valign="top">
                                                                        <select name="productname" id="productname"
                                                                            class="form-select form-control swiftselect">
                                                                            <option value="">ALL</option>

                                                                        </select>

                                                                    </td>
                                                                </tr>


                                                                <tr class="bg-white">
                                                                    <td valign="top">State:</td>
                                                                    <td valign="top">
                                                                        <select name="productname" id="productname"
                                                                            class="form-select form-control swiftselect">
                                                                            <option value="">ALL</option>

                                                                        </select>

                                                                    </td>
                                                                </tr>


                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Number:</td>
                                                                    <td valign="top">
                                                                        <textarea name="teamleaderremarks" cols="45"
                                                                            class="form-control" id="teamleaderremarks"
                                                                            data-gramm="false"
                                                                            wt-ignore-input="true"></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Date:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">

                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>



                                                        <table class="table table-bordered table2">
                                                            <tbody>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Register Name:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Billed By:</td>
                                                                    <td valign="top">
                                                                        <select name="productname" id="productname"
                                                                            class="form-select form-control swiftselect">
                                                                            <option value="">ALL</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Amount:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="date"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Entered By:</td>
                                                                    <td valign="top">
                                                                        <select name="productname" id="productname"
                                                                            class="form-select form-control swiftselect">
                                                                            <option value="">ALL</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>


                                                                <tr class="bg-white">
                                                                    <td valign="top">Compliant ID:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Flags:</td>
                                                                    <td valign="top">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="anonymous" id="databasefield11"
                                                                                value="yes">
                                                                            <label class="form-check-label"
                                                                                for="databasefield11">Yes</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="anonymous" id="databasefield12"
                                                                                value="no">
                                                                            <label class="form-check-label"
                                                                                for="databasefield12">No</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="anonymous" id="databasefield12"
                                                                                value="no">
                                                                            <label class="form-check-label"
                                                                                for="databasefield12">Both</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">order By:</td>
                                                                    <td valign="top">
                                                                        <select name="status"
                                                                            class="form-select form-control swiftselect"
                                                                            id="status">
                                                                            <option value="callertype">Caller Type
                                                                            </option>
                                                                            <option value="category">Category</option>
                                                                            <option value="complaintid"
                                                                                selected="selected">Compliant ID
                                                                            </option>
                                                                            <option value="customerid">Customer ID
                                                                            </option>
                                                                            <option value="customername">Registered Name
                                                                            </option>
                                                                            <option value="date">Date</option>
                                                                            <option value="userid">Entered By</option>
                                                                            <option value="problem">Problem</option>
                                                                            <option value="productname">Product Group
                                                                            </option>
                                                                            <option value="productname">Product Name
                                                                            </option>
                                                                            <option value="status">Status</option>
                                                                            <option value="solvedby">Solved BY</option>
                                                                            <option value="billno">Bill Number</option>
                                                                            <option value="billdate">Bill Date</option>
                                                                            <option value="acknowledgementno">
                                                                                Acknowledgement Number</option>

                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="container bg-light">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div id="form-error"></div>
                                                            </div>
                                                            <div class="col-md-4 float-right bg-light " align="right">
                                                                <input name="view" type="submit"
                                                                    class="btn btn-primary " id="view" value="View"
                                                                    onclick="formsubmit('toview');">
                                                                <input name="toexcel" type="submit" class="btn btn-info"
                                                                    id="toexcel" value="To Excel"
                                                                    onclick="formsubmit('toexcel');">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                        </div>
                </div>
            </div>
            <?php

            include("../navigation/footer.php");

            ?>