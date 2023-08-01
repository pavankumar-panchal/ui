<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <footer class="footer_area section_padding_130_0 mt-4">
    <div class="container">
      <div class="row">
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Footer Logo-->
            <div class="footer-logo mb-3"></div>
            <!-- <p>Appland is completely creative, lightweight, clean app landing page.</p> -->
            <!-- Copywrite Text-->
            <div class="copywrite-text mb-5">
              <p class="mb-0">Connect to Relyonsoft <i class="lni-heart mr-1"></i><a class="ml-1"
                  href="https://wrapbootstrap.com/user/DesigningWorld"> </a></p>
            </div>
            <!-- Footer Social Area-->
            <div class="footer_social_area ">
              <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                <i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                <i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Skype">
                <i class="fa fa-skype"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                <i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">About</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Corporate Sale</a></li>
                <li><a href="#">Terms &amp; Policy</a></li>
                <li><a href="#">Community</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">Our websites</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="https://relyonsoft.com/">Relyonsoft.com</a></li>
                <li><a href="https://www.saraltds.com/">Saraltds.com</a></li>
                <li><a href="http://www.saralvat.com/">Saralvat.com</a></li>
                <li><a href="http://www.saraltaxoffice.com/">saraltaxoffice.com</a></li>
                <li><a href="https://saralpaypack.com/">Saralpaypack.com</a></li>
                <li><a href="https://saralpaypack.com/">Saralpaypack.com</a></li>
                <li><a href="https://www.saralaccounts.com/">Saralaccounts.com</a></li>
                <li><a href="http://saralxbrl.in/">saralxbrl.in</a></li>
                <li><a href="https://userlogin.relyonsoft.com/">userlogin.relyonsoft.com</a></li>

              </ul>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">Contact</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="#">Call Centre</a></li>
                <li><a href="#">Email Us</a></li>
                <li><a href="#">Term &amp; Conditions</a></li>
                <li><a href="#">Help Center</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="foot" style="text-align: center; position: relative; bottom: -50px;">
      <p>A product of Relyon Web Management | Copyright © 2023 Relyon Softech Ltd. All rights reserved</p>
    </div>
  </footer>
  </div>
  </div>

  <script>
    // Sample data for the table (replace this with your actual data)
    const data = [
      ["1", "John Doe", "Address 1", "123456789", "john@example.com", "Contact 1", /* ... */],
      ["2", "Jane Smith", "Address 2", "987654321", "jane@example.com", "Contact 2", /* ... */],
      // Add more rows here...
    ];

    // Column definitions (replace this with your column names)
    const columns = [
      "Sl No",
      "Flag",
      "Call Type",
      "Date",
      "Start Time",
      "End Time",
      "Duration",
      "User Id",
      "Anonymous",
      "Customer ID",
      "Customer Name",
      "Person Name",
      "Category",
      "State",
      "Caller Type",
      "Product Group",
      "Product Name",
      "Product Version",
      "Problem",
      "Remarks",
      "Status",
      "Remote Connection",
      "Compliant ID",
      "Authorized",
      "Authorized Group",
      "Team Leader Remarks",
      "Authorized Person",
      "Authorized Date&amp",
      "Time",
      "Call Category",
    ];

    new gridjs.Grid({
      columns: columns.map((col) => ({ name: col })),
      data: data,
      pagination: { limit: 5 },
      search: true,
      sort: true,
      language: {
        "search": { "placeholder": "Search..." },
        "pagination": { "previous": "⬅️", "next": "➡️", "results": () => "Records" }
      }
    }).render(document.getElementById("wrapper"));
  </script>
  <script>
    document.getElementById('toggleButton').addEventListener('click', function () {
      var collapseExample = document.getElementById('collapseExample');
      if (collapseExample.classList.contains('show')) {
        collapseExample.classList.remove('hide');
      } else {
        collapseExample.classList.add('hide');
      }
    });
  </script>

<!-- calendar -->



<script src="calendar/js/jquery-3.3.1.min.js"></script>
    <script src="calendar/js/popper.min.js"></script>
    <script src="calendar/js/bootstrap.min.js"></script>

    <script src='calendar/fullcalendar/packages/core/main.js'></script>
    <script src='calendar/fullcalendar/packages/interaction/main.js'></script>
    <script src='calendar/fullcalendar/packages/daygrid/main.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      defaultDate: '2023-08-01',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-02-01'
        },
        {
          title: 'Long Event',
          start: '2020-02-07',
          end: '2020-02-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-02-11',
          end: '2020-02-13'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T10:30:00',
          end: '2020-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-02-28'
        }
      ]
    });

    calendar.render();
  });

    </script>

    <script src="calendar/js/main.js"></script>

<!-- calendar -->

</body>

</html>
</body>

</html>