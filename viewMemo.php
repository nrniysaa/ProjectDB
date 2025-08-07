<?php
include 'db.php';
include 'header.html';

$memo_id = $_GET['memo_id'] ?? 0;

// Get memo and related project info
$memoQuery = "
    SELECT m.ref_no, p.project_id, p.title 
    FROM memo m 
    JOIN projects p ON p.project_id = m.project_id 
    WHERE m.memo_id = ?
";
$stmt = $conn->prepare($memoQuery);
$stmt->bind_param("i", $memo_id);
$stmt->execute();
$memo = $stmt->get_result()->fetch_assoc();

// Get recipient list for the memo
$recipientsQuery = "SELECT * FROM memo_recipient WHERE memo_id = ?";
$stmt2 = $conn->prepare($recipientsQuery);
$stmt2->bind_param("i", $memo_id);
$stmt2->execute();
$recipients = $stmt2->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Memo</title>
  <link rel="stylesheet" href="memo.css"> <!-- use memo.css to avoid conflict -->
</head>
<body style="padding-top: 120px;">

<div class="memo-container">
  <h2>Payment Memo: <?= htmlspecialchars($memo['ref_no']) ?></h2>
  <p><strong>Project Code:</strong> <?= htmlspecialchars($memo['project_id']) ?></p>
  <p><strong>Project Title:</strong> <?= htmlspecialchars($memo['title']) ?></p>

  <table class="memo-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Bank</th>
        <th>Account No.</th>
        <th>Amount (RM)</th>
        <th>Justification</th>
      </tr>
    </thead>
    <tbody>
      <?php while($r = $recipients->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($r['name']) ?></td>
        <td><?= htmlspecialchars($r['bank']) ?></td>
        <td><?= htmlspecialchars($r['account_no']) ?></td>
        <td><?= number_format($r['amount'], 2) ?></td>
        <td><?= htmlspecialchars($r['justification']) ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <div class="memo-buttons">
    <button onclick="window.print()" class="memo-btn-print">PRINT MEMO</button>
    <a href="paymentMemo.php" class="memo-btn-cancel">BACK</a>
  </div>
</div>

</body>
</html>

