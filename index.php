


<?php
include("navigation/nav.php");


?>




          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h4 class="card-title mb-0"> Chart on count of Calls and emails</h4>
                  <div class="small text-medium-emphasis">January - July 2022</div>
                </div>
                <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                  <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                    <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off">
                    <label class="btn btn-outline-secondary"> Day</label>
                    <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off" checked="">
                    <label class="btn btn-outline-secondary active"> Month</label>
                    <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off">
                    <label class="btn btn-outline-secondary"> Year</label>
                  </div>
                  <button class="btn btn-primary" type="button">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                <canvas class="chart" id="main-chart" height="300"></canvas>
              </div>
            </div>
          </div>

          <!-- /.row-->

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-header"> Attendance Summary of this Month</div>
                <div class="card-body">
                  <div class="row">

                    <!-- Attendence  -->
                  </div>
                  <div class="container mt-4">
                    <p>
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                        id="toggleButton">
                        Team Chart
                      </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        Team chart.
                      </div>
                    </div>
                  </div>
                </div>



                <!-- stops here -->
              </div class="col-md-12">

              <div id="wrapper" class="table-container"></div>

            </div>
          </div>
        </div>

<?php

include("navigation/footer.php");


?>



