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

// If no real memo found, use example data
if (!$memo) {
    $memo = [
        'ref_no' => 'EXAMPLE-REF-001',
        'project_id' => 'PRJ001',
        'title' => 'Example Project Title'
    ];
}

// Get recipient list for the memo
$recipientsQuery = "SELECT * FROM memo_recipient WHERE memo_id = ?";
$stmt2 = $conn->prepare($recipientsQuery);
$stmt2->bind_param("i", $memo_id);
$stmt2->execute();
$recipients = $stmt2->get_result();

// If no recipients, create example rows
if ($recipients->num_rows === 0) {
    $exampleRecipients = [
        ['name' => 'John Doe', 'bank' => 'Maybank', 'account_no' => '1234567890', 'amount' => 5000.00, 'justification' => 'Consultancy Fee'],
        ['name' => 'Jane Smith', 'bank' => 'CIMB', 'account_no' => '9876543210', 'amount' => 3000.00, 'justification' => 'Materials Purchase']
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Memo</title>
  <link rel="stylesheet" href="styles.css"> <!-- merged into main styles.css -->
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
      <?php if (!empty($exampleRecipients)): ?>
        <?php foreach ($exampleRecipients as $r): ?>
        <tr>
          <td><?= htmlspecialchars($r['name']) ?></td>
          <td><?= htmlspecialchars($r['bank']) ?></td>
          <td><?= htmlspecialchars($r['account_no']) ?></td>
          <td><?= number_format($r['amount'], 2) ?></td>
          <td><?= htmlspecialchars($r['justification']) ?></td>
        </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <?php while($r = $recipients->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($r['name']) ?></td>
          <td><?= htmlspecialchars($r['bank']) ?></td>
          <td><?= htmlspecialchars($r['account_no']) ?></td>
          <td><?= number_format($r['amount'], 2) ?></td>
          <td><?= htmlspecialchars($r['justification']) ?></td>
        </tr>
        <?php endwhile; ?>
      <?php endif; ?>
    </tbody>
  </table>

  <div class="memo-buttons">
    <button onclick="window.print()" class="memo-btn-print">PRINT MEMO</button>
    <a href="paymentMemo.php" class="memo-btn-cancel">BACK</a>
  </div>
</div>

</body>
</html>
