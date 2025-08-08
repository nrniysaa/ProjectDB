<?php
include 'header.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reports</title>
  <!-- Load styles AFTER header.html -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Banner -->
<div class="report-banner">
  <img src="image/bgreport.jpg" alt="Banner">
  <h1>Reports</h1>
</div>

<!-- Search Bar -->
<div class="report-search">
  <input type="text" id="reportSearch" placeholder="🔍︎ Search Report">
</div>

<!-- Report Table -->
<div class="report-table-wrapper">
  <table class="report-table" id="reportTable">
    <thead>
      <tr>
        <th>REPORT NAME</th>
        <th style="text-align: right;"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Report 1</td>
        <td style="text-align: right;">
          <a href="viewReport.php" class="report-view-link">View Report</a>
        </td>
      </tr>
      <tr>
        <td>Report 2</td>
        <td style="text-align: right;">
          <a href="viewReport.php" class="report-view-link">View Report</a>
        </td>
      </tr>
      <tr>
        <td>Financial Summary</td>
        <td style="text-align: right;">
          <a href="viewReport.php" class="report-view-link">View Report</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<script>
  // Live Search Filter
  document.getElementById('reportSearch').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#reportTable tbody tr");

    rows.forEach(row => {
      let text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>
