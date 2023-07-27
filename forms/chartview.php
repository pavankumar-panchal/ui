<!DOCTYPE html>
<html>

<head>
    <!-- Add your meta tags, title, and other headers here if needed -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Additional CSS if required -->
    <style>
        /* Add any additional custom CSS here */
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                        <td class="header-line">Enter the Details</td>
                        <td align="right" class="header-line">
                            <div class="text-right">
                                <img src="../images/minus.jpg" class="img-fluid" id="toggleimg" name="toggleimg"
                                    align="absmiddle">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" valign="top" class="badge-pill">
                            <div id="maindiv" style="display: block;">
                                <form action="" method="post" name="submitform" id="submitform"
                                    onsubmit="return false;">
                                    <table class="table table-bordered table-striped ">
                                        <tbody>
                                            <tr class="bg-light">
                                                <td>Registers:</td>
                                                <td>
                                                    <label><input name="check[]" type="checkbox" value="Call"
                                                            checked="checked"> Calls</label>
                                                    <label><input name="check[]" type="checkbox" value="Email"
                                                            checked="checked"> Emails-Customer</label>
                                                    <label><input name="check[]" type="checkbox" value="Email"
                                                            checked="checked"> Emails-NonCustomer</label>

                                                    <label><input name="check[]" type="checkbox" value="Skype"
                                                            checked="checked"> Skype</label>
                                                    <label><input name="check[]" type="checkbox" value="Errors"
                                                            checked="checked"> Errors</label>
                                                    <label><input name="check[]" type="checkbox" value="Onsite"
                                                            checked="checked"> Onsite</label>
                                                    <label><input name="check[]" type="checkbox" value="References"
                                                            checked="checked">
                                                        References</label>
                                                    <label><input name="check[]" type="checkbox" value="Inhouse"
                                                            checked="checked">
                                                        Inhouse</label>
                                                    <label><input name="check[]" type="checkbox" value="Requirements"
                                                            checked="checked">
                                                        Requirements</label>
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td>From Date:</td>
                                                <td><input name="fromdate" type="date" id="fromdate" value="2021-07-01"
                                                        class="form-control">
                                                </td>

                                            </tr>
                                            <tr class="bg-light">
                                                <td>To Date:</td>
                                                <td><input name="todate" type="date" id="todate" value="2021-07-31"
                                                        class="form-control"></td>
                                            </tr>
                                            <tr class="bg-light">
                                            </tr>
                                            <tr class="bg-light">
                                                <td valign="top">Entered By:</td>
                                                <td valign="top">
                                                    <select name="userid" id="userid" class="form-control">
                                                        <option value="">ALL</option>
                                                        <!-- Add other options here -->
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td valign="top">Caller Type:</td>
                                                <td valign="top">
                                                    <label><input name="customer" type="checkbox" id="customer"
                                                            value="Customer" checked="checked"> Customers</label>
                                                    <label><input name="dealer" type="checkbox" id="dealer"
                                                            value="Dealer" checked="checked">
                                                        Dealers</label>
                                                    <label><input name="employee" type="checkbox" id="employee"
                                                            value="employee" checked="checked"> Employees</label>
                                                    <label><input name="ssmuser" type="checkbox" id="ssmuser"
                                                            value="SSMUser" checked="checked">
                                                        SSM Users</label>
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td valign="top">Category:</td>
                                                <td valign="top">
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="" selected="selected">ALL</option>
                                                        <option value="BLR">Bangalore</option>
                                                        <option value="CSD">CSD</option>
                                                        <option value="KKG">KKG</option>
                                                        <!-- Add other options here -->
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td valign="top">Support Unit:</td>
                                                <td valign="top">
                                                    <select name="supportunit" class="form-control" id="supportunit">
                                                        <option value="">ALL</option>
                                                        <option value="2">ewrt</option>
                                                        <option value="1">support</option>
                                                        <!-- Add other options here -->
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td valign="top">Anonymous:</td>
                                                <td valign="top">
                                                    <label><input type="radio" name="anonymous" id="databasefield11"
                                                            value="yes"> Yes</label>
                                                    <label><input type="radio" name="anonymous" id="databasefield12"
                                                            value="no"> No</label>
                                                    <label><input type="radio" name="anonymous" id="databasefield13"
                                                            value="" checked="checked">
                                                        Both</label>
                                                </td>
                                            </tr>



                                        </tbody>

                                    </table>
                    <tr>
                        <td align="right" valign="middle" style="padding-right:15px; border-top:1px solid #d1dceb;"
                            colspan="2">
                            <div class="row">
                                <div class="col-8">
                                    <div id="form-error"></div>
                                </div>
                                <div class="col-4 text-right">
                                    <input name="view" type="submit" class="btn btn-primary" id="view" value="View"
                                        onclick="formsubmit('view');">

                                </div>
                            </div>
                        </td>
                    </tr>

                    </form>
        </div>
        </td>

        </tr>

        </tbody>
        </table>
    </div>
    </div>

    <!-- Bootstrap JS and any additional scripts if required -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your JavaScript code and any additional scripts if required -->
    <script>
    // Your JavaScript functions and code here
    </script>
</body>

</html>