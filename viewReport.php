<?php include 'header.html'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Report</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .final-report-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    .final-report-table th, .final-report-table td {
      padding: 10px;
      border: 2px solid #000; /* bolder border */
      text-align: center;
    }
    .final-report-table thead {
      background-color: #30457d !important;
      color: white !important;
      font-weight: bold;
    }
    .baki-row {
      margin-top: 15px;
      font-size: 16px;
      font-weight: bold;
    }
    .report-buttons-center {
      text-align: center;
      margin-top: 20px;
    }
    .report-buttons-center button {
      background: #30457d;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 0 5px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .report-buttons-center button:hover {
      background: #22335d;
    }
  </style>
</head>
<body style="padding-top: 20px;">

<div class="report-box">
  <h2 class="report-title">PROJECT REPORT</h2>

  <table class="final-report-table">
    <colgroup>
      <col><col><col><col><col><col><col><col>
    </colgroup>

    <!-- Section Headers -->
    <tr>
      <th colspan="5" class="section-header-left">RECEIVED PAYMENTS</th>
      <th colspan="3" class="section-header-right">EXPENSES</th>
    </tr>

    <!-- Column Headers -->
    <tr>
      <th>PAYMENT</th>
      <th>AMOUNT</th>
      <th>SST</th>
      <th>UHSB & UTeM</th>
      <th>BALANCE</th>
      <th>EXPENSE ITEM</th>
      <th>DATE</th>
      <th>AMOUNT</th>
    </tr>

    <!-- Row 1 -->
    <tr>
      <td>Full Payment</td>
      <td>xx,xxx.xx</td>
      <td>x,xxx.xx</td>
      <td>x,xxx.xx</td>
      <td>xx,xxx.xx</td>
      <td>Food/Drinks</td>
      <td></td>
      <td>xxx.xx</td>
    </tr>

    <!-- Row 2–5 -->
    <tr><td></td><td></td><td></td><td></td><td></td><td>xxxx</td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td>xxxx</td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

    <!-- TOTAL row -->
    <tr>
      <td><strong>TOTAL:</strong></td>
      <td>xx,xxx.xx</td>
      <td></td>
      <td>x,xxx.xx</td>
      <td>xx,xxx.xx</td>
      <td colspan="2" class="right-align"><strong>TOTAL:</strong></td>
      <td>x,xxx.xx</td>
    </tr>
  </table>

  <!-- Current Budget Balance -->
  <div class="baki-row">
    <label><strong>CURRENT BUDGET BALANCE:</strong></label>
    <span>x,xxx.xx</span>
  </div>

  <!-- Buttons -->
  <div class="report-buttons-center">
    <button onclick="window.history.back()">BACK</button>
    <button onclick="window.print()">PRINT REPORT</button>
  </div>
</div>

</body>
</html>
