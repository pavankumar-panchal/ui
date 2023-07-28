<?php

include("../navigation/navigation.php");

?>


<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <span>Masters</span>
            </li>
            <li class="breadcrumb-item active"><span>Customer</span></li>
        </ol>
    </nav>
</div>
</header>


                    <div class="container">
                        <div class="parent container d-flex flex-row p-4 rounded-2"  style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); ">
                            <div class="div1">
                                <!-- 1 -->

                                <div class="container mt-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header-line pl-2">Customer Selection</div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <form id="filterform" name="filterform" method="post" action=""
                                                onsubmit="return false;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input name="detailsearchtext" type="text"
                                                                class="form-control" id="detailsearchtext"
                                                                onkeyup="customersearch(event);" autocomplete="off"
                                                                isdatepicker="true" placeholder="search..">
                                                            <span style="display:none">
                                                                <input name="searchtextid" type="hidden"
                                                                    id="searchtextid" disabled="disabled">
                                                            </span>
                                                        </div>
                                                        <div id="detailloadcustomerlist" class="mt-2">
                                                            <select name="customerlist" size="5" class="form-control"
                                                                id="customerlist" style="width:100%; height:400px"
                                                                onclick="selectfromlist();"
                                                                onchange="selectfromlist();">
                                                                <!-- Add options dynamically here -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <strong>Total Count:</strong>
                                        </div>
                                        <div class="col-6" id="totalcount">
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                            <div class="div2">
                                <!-- 2 -->
                                <div class="container mt-4">
                                    <table class="table table-bordered productcontent">
                                        <tbody>
                                            <tr>
                                                <td><span style="display:none" id="short_url"></span>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2" valign="top" style="padding:0px">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light" width="20%">
                                                                                        Business
                                                                                        Name[Company]:</td>
                                                                                    <td class="bg-light" width="80%">
                                                                                        <input name="address"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="address" maxlength="200"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" valign="top" style="padding:0px">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light" width="20%">
                                                                                        Address:</td>
                                                                                    <td class="bg-light" width="80%">
                                                                                        <input name="address"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="address" maxlength="200"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="51%" valign="top"
                                                                    style="border-right:1px solid #d1dceb;">
                                                                    <div class=" table table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="bg-light">Place:</td>
                                                                                    <td class="bg-light">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">State:</td>
                                                                                    <td class="bg-light">
                                                                                        <select name="state"
                                                                                            class="form-control"
                                                                                            id="state">
                                                                                            <option value="">Select A
                                                                                                State</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">District:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">pin Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">STD Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Fax Code:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Type:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Category:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <select name="district"
                                                                                            class="form-control"
                                                                                            id="district">
                                                                                            <option value="">Select A
                                                                                                State First
                                                                                            </option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Website:</td>
                                                                                    <td class="bg-light"
                                                                                        id="districtcodedisplay">
                                                                                        <input name="place" type="text"
                                                                                            class="form-control"
                                                                                            id="place" maxlength="100"
                                                                                            autocomplete="off">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Remarks:</td>
                                                                                    <td class="bg-light">
                                                                                        <textarea name="remarks"
                                                                                            cols="27"
                                                                                            class="form-control"
                                                                                            id="remarks"></textarea>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Add other rows as needed -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td width="50%" class="">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td class="bg-light">Customer ID:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Last Password:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Current Dealer:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">GSTIN:</td>
                                                                                    <td class="bg-light">
                                                                                        <input name="contactperson"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="contactperson"
                                                                                            maxlength="100"
                                                                                            autocomplete="off">
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Add other rows as needed -->
                                                                                <tr>
                                                                                    <td class="bg-light">Company Closed:
                                                                                    </td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Promotional
                                                                                        SMS:</td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="bg-light">Promotional
                                                                                        Email:</td>
                                                                                    <td class="bg-light">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                name="servicecharge"
                                                                                                id="servicecharge"
                                                                                                onclick="enableoutstandingbills();">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--  -->
                                                                                <div class="container mt">
                                                                                    <table
                                                                                        class="table table-bordered table-border-grid">
                                                                                        <tbody>
                                                                                            <tr class="table-primary">
                                                                                                <td width="22%"></td>
                                                                                                <td width="24%"
                                                                                                    align="center">
                                                                                                    <strong>Bill</strong>
                                                                                                </td>
                                                                                                <td width="25%"
                                                                                                    align="center">
                                                                                                    <strong>PIN</strong>
                                                                                                </td>
                                                                                                <td width="29%"
                                                                                                    align="center">
                                                                                                    <strong>Regn</strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>TDS</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>STO</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>SPP</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>GST</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="bg-light">
                                                                                                    <strong>SAC</strong>
                                                                                                </td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                                <td class="bg-light">
                                                                                                    &nbsp;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <!-- Add the Bootstrap JavaScript and jQuery links -->

                                                                                <!--  -->



                                                                            </tbody>
                                                                        </table>
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-10">
                                                                                <div id="form-error"></div>
                                                                            </div>
                                                                            <div class="text-end">
                                                                                <input name="view" type="submit"
                                                                                    class="btn btn-primary" id="view"
                                                                                    value="Save"
                                                                                    onclick="formsubmit('view');"
                                                                                    fdprocessedid="mnaln6">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- 2 -->
                            </div>
                        </div>

                    </div>










                    <!--  -->

                    <div class="container mt-4 p-4 rounded-2"  style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); width: 98%;" >
                        <table class="table table-bordered">
                            <thead class="bg-light text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Cell</th>
                                    <th scope="col">Email Id</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="adddescriptionrows">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <select name="selectiontype1" class="form-select">
                                            <option value="" selected>--Select--</option>
                                            <option value="ithead/edp">IT-Head/EDP</option>
                                            <option value="general">General</option>
                                            <option value="gm/director">GM/Director</option>
                                            <option value="hrhead">HR Head</option>
                                            <option value="softwareuser">Software User</option>
                                            <option value="financehead">Finance Head</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input name="name1" type="text" class="form-control" maxlength="130"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="phone1" type="text" class="form-control" maxlength="100"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="cell1" type="text" class="form-control" maxlength="10"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <input name="emailid1" type="text" class="form-control" maxlength="200"
                                            autocomplete="off">
                                    </td>
                                    <td>
                                        <font color="#FF0000"><strong><a class="removerow"
                                                    style="cursor:pointer; text-decoration: none; color: red;"
                                                    onclick="row()">X</a></strong></font><input type="hidden"
                                            name="contactslno1" id="contactslno1">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end mt-2">

                            <a onclick="adddescriptionrows();" style="cursor:pointer" class="r-text">Add one More >></a>
                        </div>
                    </div>

                    <!-- Add the following script tag at the end of the body to include Bootstrap JS and custom JavaScript -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        let rowCounter = 1;

                        function adddescriptionrows() {
                            const tableBody = document.getElementById('adddescriptionrows');
                            const lastRow = tableBody.lastElementChild;
                            const newRow = lastRow.cloneNode(true);
                            rowCounter++;
                            newRow.querySelector('td:first-child').innerText = rowCounter;
                            const inputs = newRow.querySelectorAll('input');
                            const selectElement = newRow.querySelector('select');
                            selectElement.name = `selectiontype${rowCounter}`;
                            selectElement.id = `selectiontype${rowCounter}`;
                            inputs.forEach(input => {
                                const inputName = input.name;
                                input.name = inputName.replace(/\d+/, rowCounter);
                                input.value = '';
                            });
                            const removeLink = newRow.querySelector('.removerow');
                            removeLink.addEventListener('click', () => {
                                removedescriptionrows(newRow);
                            });
                            tableBody.appendChild(newRow);
                        }
                        function row() {
                            if (rowCounter == 1) {
                                alert("Can't delete this row");
                            }
                        }
                        function removedescriptionrows(rowToRemove) {
                            const tableBody = document.getElementById('adddescriptionrows');
                            tableBody.removeChild(rowToRemove);
                            rowCounter--;
                            const rows = tableBody.getElementsByTagName('tr');
                            for (let i = 0; i < rows.length; i++) {
                                rows[i].getElementsByTagName('td')[0].innerText = i + 1;
                                const inputs = rows[i].querySelectorAll('input');
                                const selectElement = rows[i].querySelector('select');
                                selectElement.name = `selectiontype${i + 1}`;
                                selectElement.id = `selectiontype${i + 1}`;
                                inputs.forEach(input => {
                                    const inputName = input.name;
                                    input.name = inputName.replace(/\d+/, i + 1);
                                });
                            }
                        }
                    </script>
                    <!--  -->
                    <div class="col-md-12">
                    
                </div>
            </div>
            <?php

            include("../navigation/footer.php");

            ?>