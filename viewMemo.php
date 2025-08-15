<?php include 'header.html'; ?>

<?php
$memo = [
    'ref_no' => 'MEMO-2025-001',
    'date' => '08/08/2025',
    'from_person' => 'Ahmad (Project Manager)',
    'to_person' => 'Maisarah (Finance Department)',
    'subject' => 'Payment Approval for Project UH234',
    'description' => 'This is a memo for the payment approval of Project UH234, which involves consultancy services, purchase of materials, and travel expenses.',
    'project_id' => 'UH234'
];

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
body {
    font-family: Arial, sans-serif;
}
.memo-container {
    max-width: 800px;
    margin: 120px auto 30px auto;
    background: #fafafa;
    border: 1px solid #000;
    border-radius: 8px;
    padding: 30px;
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
    margin-bottom: 10px;
}
.memo-header p {
    margin: 3px 0;
}
.memo-description {
    margin-bottom: 30px;
    font-style: italic;
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

/* Signature table */
.signature-page {
    page-break-before: always;
    max-width: 800px;
    margin: 30px auto;
}
.signature-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
.signature-table th, .signature-table td {
    border: 1px solid black;
    padding: 10px;
    vertical-align: top;
}
.signature-table th {
    background: #f0f0f0;
}
.signature-table td {
    height: 150px;
    padding-top: 20px;
}

/* Buttons */
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
    cursor: pointer;
}
.memo-buttons button:hover, .memo-buttons a:hover {
    background: #444;
}

/* Print */
@media print {
    body * {
        visibility: hidden;
    }
    .memo-container, .memo-container *, 
    .signature-page, .signature-page * {
        visibility: visible;
    }
    .memo-container, .signature-page {
        position: relative;
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

<div id="printArea">
    <!-- Page 1: Memo -->
    <div class="memo-container">
        <div class="memo-title">MEMO</div>
        <div class="memo-subtitle">Reference No.: <?= htmlspecialchars($memo['ref_no']) ?></div>

        <div class="memo-header">
            <div>
                <p><strong>From:</strong> <?= htmlspecialchars($memo['from_person']) ?></p>
                <p><strong>Project Code:</strong> <?= htmlspecialchars($memo['project_id']) ?></p>
                <p><strong>Subject:</strong> <?= htmlspecialchars($memo['subject']) ?></p>
            </div>
            <div>
                <p><strong>To:</strong> <?= htmlspecialchars($memo['to_person']) ?></p>
                <p><strong>Date:</strong> <?= htmlspecialchars($memo['date']) ?></p>
            </div>
        </div>

        <div class="memo-description">
            <strong>Description:</strong> <?= htmlspecialchars($memo['description']) ?>
        </div>

        <?php foreach ($recipientsData as $r): ?>
        <div class="memo-section">
            <p><span class="label">NAME</span>: <?= htmlspecialchars($r['name']) ?></p>
            <p><span class="label">BANK</span>: <?= htmlspecialchars($r['bank']) ?></p>
            <p><span class="label">ACCOUNT No.</span>: <?= htmlspecialchars($r['account_no']) ?></p>
            <p><span class="label">AMOUNT</span>: RM <?= htmlspecialchars($r['amount']) ?></p>
            <p><span class="label">JUSTIFICATION</span>: <?= htmlspecialchars($r['justification']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Page 2: Signature Table -->
    <div class="signature-page">
        <table class="signature-table">
            <tr>
                <th>Prepared by:</th>
                <th>Supported by:</th>
                <th>Approved by:</th>
            </tr>
            <tr>
                <td>
                    Signature:<br><br><br><br>
                    Date: _______________<br>
                    Name: _______________<br>
                    Position: _______________
                </td>
                <td>
                    Signature:<br><br><br><br>
                    Date: _______________<br>
                    Name: _______________<br>
                    Position: _______________
                </td>
                <td>
                    Signature:<br><br><br><br>
                    Date: _______________<br>
                    Name: _______________<br>
                    Position: _______________
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- Buttons -->
<div class="memo-buttons">
    <a href="paymentMemo.php">BACK</a>
    <button onclick="window.print()">PRINT MEMO</button>
    <button id="downloadPdf">DOWNLOAD PDF</button>
</div>

<!-- html2pdf.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
document.getElementById("downloadPdf").addEventListener("click", function () {
    var element = document.getElementById("printArea");
    var opt = {
        margin:       0.5,
        filename:     'memo.pdf',
        image:        { type: 'jpeg', quality: 1 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
    };
    html2pdf().set(opt).from(element).save();
});
</script>

</body>
</html>
