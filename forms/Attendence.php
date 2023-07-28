<?php
include("../navigation/navigation.php");


?>
<!-- content -->

<div class="container mt-4 ">
    <div class="table-responsive "  >
        <table class="table table-bordered  rounded-3"
            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); overflow: hidden; ">
            <thead>
                <tr style="cursor:pointer" onclick="showhide('maindiv','toggleimg');">
                    <th class="header-line pl-3 bg-light">Enter Details </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div id="maindiv" style="display: block;">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="userid">Executive Name:</label>
                                            <select name="solvedby" id="solvedby" class="form-select form-control">
                                                <option value="">Make a selection</option>
                                                <!-- Add other options here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="month">Month:</label>
                                            <select name="solvedby" id="solvedby" class="form-select form-control">
                                                <option value="">Make a selection</option>
                                                <option value="">Make A Selection</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December </option>
                                                <!-- Add other options here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="year">Year:</label>
                                            <select name="solvedby" id="solvedby" class="form-select form-control">
                                                <option value="">Make a selection</option>
                                                <!-- Add other options here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3" align="right">
                                    <div class="col-md-12 text-right">
                                        <div class="form-group">
                                            <div id="form-error"></div>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="display"
                                            onclick="attendancedisplay()">Display</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="../index.php?a_link=attendance_report_adv"
                                            class="btn btn-primary">Advanced</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="col-md-12">
            <div id="wrapper" class="table-container"></div>
        </div>
    </div>
</div>

<?php

include("../navigation/footer.php");

?>