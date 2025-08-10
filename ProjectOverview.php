<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Overview</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
  <style>
    /* Base Style */
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Banner */
    .overview-banner {
      position: relative;
      text-align: left;
      margin-bottom: 25px;
    }

    .overview-banner img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      filter: brightness(0.65);
    }

    .overview-banner h1 {
      position: absolute;
      bottom: 20px;
      left: 50px;
      font-size: 46px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1px;
      text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }

  </style>
</head>
<body>



  <?php include 'header.html'; ?>

  <?php
  // Helper function to get stats by company
  function getCompanyStats($conn, $company) {
      $sql = "SELECT 
                  COUNT(*) as total_projects,
                  SUM(revenue_with_sst) as total_with_sst,
                  SUM(revenue_without_sst) as total_without_sst
              FROM projects WHERE company_origin = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $company);
      $stmt->execute();
      $result = $stmt->get_result()->fetch_assoc();
      return $result;
  }

  $uhsb = getCompanyStats($conn, 'UHSB');
  $uhe = getCompanyStats($conn, 'UHE');
  $jelita = getCompanyStats($conn, 'JELITA');

  $sqlTotal = "SELECT 
                  COUNT(*) as total_projects,
                  SUM(revenue_with_sst) as total_with_sst,
                  SUM(revenue_without_sst) as total_without_sst
              FROM projects";
  $total = $conn->query($sqlTotal)->fetch_assoc();

  // Value range count
  $value_200_500k = $conn->query("SELECT COUNT(*) as count FROM projects WHERE value_category = '200-500K'")->fetch_assoc()['count'];
  $value_500k_plus = $conn->query("SELECT COUNT(*) as count FROM projects WHERE value_category = '500K+'")->fetch_assoc()['count'];
  ?>


<div class="overview-banner">
  <img src="image/dashboard2.jpg" alt="Banner">
  <h1>Project Overview</h1>
</div>


  <!-- Summary Cards -->
  <div class="card-container">
    <div class="card-group">
      <!-- UHSB -->
      <div class="card bordered-card">
        <img src="image/uhsb logo.png" alt="UHSB" class="logo" style="width: 200px;">
        <p><strong>PROJECTS UNDER UHSB</strong></p>
        <h2><?= $uhsb['total_projects'] ?></h2>
        <hr>
        <p><strong>Total Revenue</strong></p>
        <div class="revenue-detail">
          with SST: RM <?= number_format($uhsb['total_with_sst'], 2) ?><br>
          without SST: RM <?= number_format($uhsb['total_without_sst'], 2) ?>
        </div>
      </div>

      <!-- UHE -->
      <div class="card bordered-card">
        <img src="image/uhe_logo.png" alt="UHE" class="logo" style="width: 190px;">
        <p><strong>PROJECTS UNDER UHE</strong></p>
        <h2><?= $uhe['total_projects'] ?></h2>
        <hr>
        <p><strong>Total Revenue</strong></p>
        <div class="revenue-detail">
          with SST: RM <?= number_format($uhe['total_with_sst'], 2) ?><br>
          without SST: RM <?= number_format($uhe['total_without_sst'], 2) ?>
        </div>
      </div>

      <!-- JELITA -->
      <div class="card bordered-card">
        <img src="image/jelita_logo.png" alt="JELITA" class="logo" style="width: 190px;">
        <p><strong>PROJECTS UNDER JELITA</strong></p>
        <h2><?= $jelita['total_projects'] ?></h2>
        <hr>
        <p><strong>Total Revenue</strong></p>
        <div class="revenue-detail">
          with SST: RM <?= number_format($jelita['total_with_sst'], 2) ?><br>
          without SST: RM <?= number_format($jelita['total_without_sst'], 2) ?>
        </div>
      </div>

      <!-- Total Projects -->
      <div class="card bordered-card">
        <p><strong>TOTAL PROJECTS</strong></p>
        <h2><?= $total['total_projects'] ?></h2>
        <hr>
        <p><strong>Total Revenue for All</strong></p>
        <div class="revenue-detail">
          with SST: RM <?= number_format($total['total_with_sst'], 2) ?><br>
          without SST: RM <?= number_format($total['total_without_sst'], 2) ?>
        </div>
      </div>
    </div>

    <!-- Project Value Breakdown -->
    <div class="project-value-group">
      <div class="value-card">
        <p>Projects valued between<br>RM200K–RM500K</p>
        <h2><?= $value_200_500k ?></h2>
      </div>
      <div class="value-card">
        <p>Projects valued more than 500K</p>
        <h2><?= $value_500k_plus ?></h2>
      </div>
    </div>
  </div>

</body>
</html>
