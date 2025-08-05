<?php
include 'db.php';
include 'header.html';

$query = "SELECT p.project_id, p.project_title, m.memo_id, m.ref_no 
          FROM project p
          JOIN memo m ON p.project_id = m.project_id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Memo</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
</head>
<body>

<!-- Banner -->
<div class="memo-banner">
  <img src="image/memo-banner.jpg" alt="Banner"> <!-- Use your actual image path -->
  <h1>Payment Memo</h1>
</div>

<!-- Search Bar -->
<div class="memo-search">
  <input type="text" placeholder="🔍 Search Project">
</div>

<!-- Memo Table -->
<div class="memo-table-wrapper">
  <table class="memo-table">
    <thead>
      <tr>
        <th>CODE</th>
        <th>PROJECT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <tr>
    <td>xxx</td>
    <td>xxx</td>
    <td style="text-align: right;">
      <a href="#" class="memo-view-link">View Memo</a>
    </td>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?= htmlspecialchars($row['project_id']) ?></td>
      <td><?= htmlspecialchars($row['project_title']) ?></td>
      <td style="text-align: right;">
        <a href="viewMemo.php?memo_id=<?= $row['memo_id'] ?>" class="memo-view-link">View Memo</a>
      </td>
    </tr>
  <?php endwhile; ?>
</tbody>
  </table>
</div>

</body>
</html>
