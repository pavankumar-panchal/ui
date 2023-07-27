<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Grid.js CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridjs@1.2.0/dist/gridjs.min.css">
  <title>View Records</title>
  <style>
    /* Additional CSS to make the table scrollable and fit the window */
    body {
      background-color: #f8f9fa;
    }

    .container {
      height: 80vh;
      overflow: auto;
      padding: 10px;
      border: 1px solid #ddd;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .container table.gridjs-table {
      width: 100%;
    }

    #grid-table {
      height: 400px;
      width: 500px;
      overflow-y: auto;
    }

    /* Adjust the max-width value as needed for the container */
  </style>
</head>

<body>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.0.6/gridjs.production.min.js"
    integrity="sha512-wpiJjuL800CTEBA0QFs+RFw0tFtpXnQGea1p9S16WcYNXC1F3U0l1L7FQrDC3ihkYRtOj4Td7lKR3mYKxrwMMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap JS (Optional for some components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Grid.js JS -->
  <script src="https://cdn.jsdelivr.net/npm/gridjs@1.2.0/dist/gridjs.umd.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new gridjs.Grid({
        columns: [
          'Sl No', 'Anonymous', 'Customer Name', 'Customer ID', 'Date', 'Time', 'Person Name',
          'Category', 'Caller Type', 'Product Group', 'Product Name', 'Product Version',
          'Problem', 'Status', 'Remote Connection', 'Remarks', 'Transferred To', 'User Id',
          'Compliant ID', 'Authorized', 'Authorized Group', 'Team Leader Remarks',
          'Authorized Person', 'Authorized Date&Time', 'Flag', 'End Time', 'Publish Record'
        ],
        data: [
          [1, 'Yes', 'John Doe', 'C123', '2023-07-21', '10:30 AM', 'Alice', 'IT', 'New', 'Software', 'App', 'v1.0', 'Bug', 'Open', 'Yes', 'Issue with login', 'Bob', 'U456', '1234', 'Yes', 'Admins', 'Noted', 'John', '2023-07-21 11:00 AM', 'No', '11:30 AM', 'Yes'],
          [2, 'No', 'Jane Smith', 'D789', '2023-07-22', '02:15 PM', 'Bob', 'Sales', 'Existing', 'Hardware', 'Printer', 'v2.0', 'Hardware Issue', 'Closed', 'No', 'Resolved', 'Charlie', 'T789', '5678', 'No', 'Sales Team', 'Fixed', 'Jill', '2023-07-22 03:00 PM', 'Yes', '03:30 PM', 'Yes'],
          // Add more data rows as needed
        ],
        pagination: {
          enabled: true,
          limit: 10 // Set the number of rows per page
        },
        className: {
          table: 'table table-bordered table-striped table-hover gridjs-table'
        },
        scrollable: {
          y: true,
          x: true
          // Enable scrolling in the y-axis
        }
      }).render(document.getElementById('grid-table'));
    });
  </script>
</body>

</html>