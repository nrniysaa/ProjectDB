<?php
include 'db.php';
include 'header.html';

$query = "
    SELECT p.project_id, p.title, m.memo_id, m.ref_no 
    FROM projects p
    JOIN memo m ON p.project_id = m.project_id
";
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
  <img src="image/bgimg.jpg" alt="Banner"> 
  <h1>Payment Memo</h1>
</div>

<!-- Search Bar -->
<div class="memo-search">
  <input type="text" placeholder="🔍︎ Search Project" id="memoSearch">
</div>

<!-- Memo Table -->
<div class="memo-table-wrapper">
  <table class="memo-table" id="memoTable">
    <thead>
      <tr>
        <th>CODE</th>
        <th>PROJECT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?= htmlspecialchars($row['project_id']) ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td style="text-align: right;">
              <a href="viewMemo.php?memo_id=<?= $row['memo_id'] ?>" class="memo-view-link">View Memo</a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <!-- Example Row if no data -->
        <tr>
          <td>UH234</td>
          <td>Example Project Title</td>
          <td style="text-align: right;">
            <a href="viewMemo.php?memo_id=1" class="memo-view-link">View Memo</a>
          </td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<script>
  // Live Search for Memos
  document.getElementById('memoSearch').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#memoTable tbody tr");

    rows.forEach(row => {
      let text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>
