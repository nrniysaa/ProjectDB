<?php include 'header.html'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Report</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="report-box">
  <h2 class="report-title">REPORT</h2>

  <table class="final-report-table">
    <colgroup>
      <col>
      <col>
      <col>
      <col>
      <col>
      <col>
      <col>
      <col>
    </colgroup>

    <!-- Section Headers -->
    <tr>
      <th colspan="5" class="section-header-left">BAYARAN YANG TELAH DITERIMA</th>
      <th colspan="3" class="section-header-right">KOS YANG TELAH DIBAYAR/ DIGUNAKAN</th>
    </tr>

    <!-- Column Headers -->
    <tr>
      <th>BAYARAN</th>
      <th>JUMLAH</th>
      <th>SST</th>
      <th>UHESB & UTeM</th>
      <th>BAKI</th>
      <th>BAYARAN</th>
      <th>TARIKH</th>
      <th>JUMLAH</th>
    </tr>

    <!-- Row 1 -->
    <tr>
      <td>Bayaran penuh</td>
      <td>xx,xxx.xx</td>
      <td>x,xxx.xx</td>
      <td>x,xxx.xx</td>
      <td>xx,xxx.xx</td>
      <td>Makan/Minum</td>
      <td></td>
      <td>xxx.xx</td>
    </tr>

    <!-- Row 2–5 (Fixed with 8 <td>s) -->
    <tr><td></td><td></td><td></td><td></td><td></td><td>xxxx</td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td>xxxx</td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

    <!-- JUMLAH KESELURUHAN row -->
    <tr>
      <td><strong>JUMLAH KESELURUHAN:</strong></td>
      <td>xx,xxx.xx</td>
      <td></td>
      <td>x,xxx.xx</td>
      <td>xx,xxx.xx</td>
      <td colspan="2" class="right-align"><strong>JUMLAH KESELURUHAN:</strong></td>
      <td>x,xxx.xx</td>
    </tr>
  </table>

  <!-- BAKI row -->
  <div class="baki-row">
    <label><strong>BAKI BAJET SEMASA:</strong></label>
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

