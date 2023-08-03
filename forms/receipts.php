<?php

include("../navigation/navigation.php");

?>
              <!-- <div class="container-fluid header " style="position:sticky; top:60px; z-index:10;">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Billings</span>
            </li>
            <li class="breadcrumb-item active"><span>Receipts</span></li>
        </ol>
    </nav>
</div>
</header> -->
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
                                style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); margin-top: 50px;">">
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
                                                                    <td valign="top">Bill Number:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="date"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Bill Date:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="date"
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
                                                                <tr class="bg-white">
                                                                    <td valign="top">Receipt Number:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="text"
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
                                                                    <td valign="top">Receipt Date:</td>
                                                                    <td valign="top">
                                                                        <input name="customername" type="time"
                                                                            class="form-control" id="customername"
                                                                            size="20" autocomplete="off"
                                                                            isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Baid By:</td>
                                                                    <td valign="top">
                                                                        <span id="filterprdgroupdisplay">
                                                                            <select name="s_productgroup"
                                                                                class="form-select swiftselect form-control"
                                                                                id="s_productgroup" onchange="">
                                                                                <option value="" selected="selected">
                                                                                    Cash
                                                                                </option>
                                                                                <option value=""> Cheque</option>

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
                                                                    <td valign="top">Receipt Date:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="date"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">

                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Cheque Number:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td valign="top">Amount:</td>
                                                                    <td valign="top">
                                                                        <input name="complaintid" type="text"
                                                                            class="form-control swifttext"
                                                                            id="complaintid" size="30"
                                                                            autocomplete="off" isdatepicker="true">
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-white">
                                                                    <td valign="top">Entered By:</td>
                                                                    <td valign="top">
                                                                        <span id="filterprdgroupdisplay">
                                                                            <select name="s_productgroup"
                                                                                class="form-select swiftselect form-control"
                                                                                id="s_productgroup" onchange="">
                                                                                <option value="" selected="selected">
                                                                                    Cash
                                                                                </option>
                                                                                <option value="">Cheque</option>

                                                                            </select>
                                                                            <!-- Details are in javascript.js page as a function prdgroup();-->
                                                                        </span>
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
                                                                            <option value="customerid">Customer ID
                                                                            </option>
                                                                            <option value="customername">Registered Name
                                                                            </option>
                                                                            <option value="receiptdate">Receipt Date
                                                                            </option>
                                                                            <option value="userid">Entered By</option>
                                                                            <option value="receiptno" selected="">
                                                                                Receipt Number</option>
                                                                            <option value="chequeno">Cheque Number
                                                                            </option>
                                                                            <option value="billno">Bill Number</option>
                                                                            <option value="billdate">Bill Date</option>

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


                        <div class="col-md-12">
                        </div>
                </div>
            </div>
            <?php

            include("../navigation/footer.php");

            ?>