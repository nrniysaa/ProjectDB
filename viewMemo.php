<?php include 'header.html'; ?>

<?php
// For now, skip DB connection since you don't have data yet
// include 'db.php';
// include 'header.html';

// Example Memo Data (replace with DB later)
$memo = [
    'ref_no' => 'MEMO-2025-001',
    'date' => '08/08/2025',
    'from_person' => 'Ahmad (Project Manager)',
    'to_person' => 'Maisarah (Finance Department)',
    'subject' => 'Payment Approval for Project UH234',
    'project_id' => 'UH234'
];

// Example Recipients Data
$recipientsData = [
    [
        'name' => 'Ali bin Ahmad',
        'bank' => 'Maybank',
        'account_no' => '1234567890',
        'amount' => '5,000.00',
        'justification' => 'Consultancy Fee for July 2025'
    ],
    [
        'name' => 'Siti binti Osman',
        'bank' => 'CIMB Bank',
        'account_no' => '9876543210',
        'amount' => '3,200.00',
        'justification' => 'Purchase of project materials'
    ],
    [
        'name' => 'Michael Tan',
        'bank' => 'Public Bank',
        'account_no' => '4561237890',
        'amount' => '2,500.00',
        'justification' => 'Travel and accommodation expenses'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Memo</title>
<style>
.memo-container {
    max-width: 800px;
    margin: 120px auto 30px auto;
    background: #fafafa;
    border: 1px solid #000;
    border-radius: 8px;
    padding: 30px;
    font-family: Arial, sans-serif;
}
.memo-title {
    text-align: center;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 5px;
}
.memo-subtitle {
    text-align: center;
    font-size: 16px;
    margin-bottom: 30px;
}
.memo-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
}
.memo-header p {
    margin: 3px 0;
}
.memo-section {
    margin-bottom: 25px;
    border-top: 1px solid #ccc;
    padding-top: 10px;
}
.memo-section p {
    margin: 4px 0;
}
.label {
    display: inline-block;
    width: 140px;
    font-weight: bold;
}
.memo-buttons {
    text-align: center;
    margin-top: 20px;
}
.memo-buttons button, .memo-buttons a {
    background: black;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
}
.memo-buttons button:hover, .memo-buttons a:hover {
    background: #444;
}
@media print {
    body * {
        visibility: hidden;

    }
    .memo-container, .memo-container * {
        visibility: visible;
    }
    .memo-container {
        position: absolute;
        top: 0;
        left: 0;
        box-shadow: none;
        border: 1px solid black;
    }
    .memo-buttons {
        display: none;
    }
}
</style>
</head>
<body style="padding-top: 100px;">

<div class="memo-container">
    <div class="memo-title">MEMO</div>
    <div class="memo-subtitle">No. Rujukan: <?= htmlspecialchars($memo['ref_no']) ?></div>

    <div class="memo-header">
        <div>
            <p><strong>Daripada:</strong> <?= htmlspecialchars($memo['from_person']) ?></p>
            <p><strong>Project Code:</strong> <?= htmlspecialchars($memo['project_id']) ?></p>
            <p><strong>Perkara:</strong> <?= htmlspecialchars($memo['subject']) ?></p>
        </div>
        <div>
            <p><strong>Kepada:</strong> <?= htmlspecialchars($memo['to_person']) ?></p>
            <p><strong>Tarikh:</strong> <?= htmlspecialchars($memo['date']) ?></p>
        </div>
    </div>

    <?php foreach ($recipientsData as $r): ?>
    <div class="memo-section">
        <p><span class="label">NAMA</span>: <?= htmlspecialchars($r['name']) ?></p>
        <p><span class="label">BANK</span>: <?= htmlspecialchars($r['bank']) ?></p>
        <p><span class="label">ACCOUNT No.</span>: <?= htmlspecialchars($r['account_no']) ?></p>
        <p><span class="label">JUMLAH</span>: RM <?= htmlspecialchars($r['amount']) ?></p>
        <p><span class="label">JUSTIFICATION</span>: <?= htmlspecialchars($r['justification']) ?></p>
    </div>
    <?php endforeach; ?>

    <div class="memo-buttons">
        <a href="paymentMemo.php">BACK</a>
        <button onclick="window.print()">PRINT MEMO</button>
    </div>
</div>

</body>
</html>
