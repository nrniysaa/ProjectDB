<?php
// Get project code from URL
$projectCode = $_GET['code'] ?? '';

// Example data (replace with DB fetch later)
$projects = [
    'UHS001' => [
        'title' => 'Website Development',
        'status' => 'On Going',
        'under' => 'JELITA',
        'description' => 'Developing a responsive company website with modern UI.',
        'deliverables' => 'Homepage, About Us, Contact Form, CMS',
        'duration' => '2 years',
        'value' => 'RM 50,000',
        'costing' => 'RM 45,000',
        'sdg' => 'Goal 9: Industry, Innovation and Infrastructure'
    ],
    'UHS002' => [
        'title' => 'Mobile App',
        'status' => 'Completed',
        'under' => 'UTeM Holdings',
        'description' => 'Android and iOS application for internal use.',
        'deliverables' => 'Login system, Dashboard, Push notifications',
        'duration' => '1 year',
        'value' => 'RM 80,000',
        'costing' => 'RM 78,000',
        'sdg' => 'Goal 9 & 11'
    ]
];

// Use selected project or show default
$project = $projects[$projectCode] ?? [
    'title' => 'Unknown Project',
    'status' => '-',
    'under' => '-',
    'description' => 'No description available.',
    'deliverables' => '-',
    'duration' => '-',
    'value' => '-',
    'costing' => '-',
    'sdg' => '-'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Details</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

   <?php include 'header.html'; ?>

  <div class="details-container">
    <div class="details-box">
      <h2 class="details-title"><?= htmlspecialchars($project['title']) ?></h2>
      <table class="details-table">
        <tr><td><strong>Project Code</strong></td><td>: <?= htmlspecialchars($projectCode) ?></td></tr>
        <tr><td><strong>Status</strong></td><td>: <?= htmlspecialchars($project['status']) ?></td></tr>
        <tr><td><strong>Quotation</strong></td><td>: <?= htmlspecialchars($project['status']) ?></td></tr>
        <tr><td><strong>Client</strong></td><td>: <?= htmlspecialchars($project['status']) ?></td></tr>
        <tr><td><strong>Project Under</strong></td><td>: <?= htmlspecialchars($project['under']) ?></td></tr>
        <tr><td><strong>Project Description</strong></td><td>: <?= htmlspecialchars($project['description']) ?></td></tr>
        <tr><td><strong>Project Deliverables</strong></td><td>: <?= htmlspecialchars($project['deliverables']) ?></td></tr>
        <tr><td><strong>Project Duration</strong></td><td>: <?= htmlspecialchars($project['duration']) ?></td></tr>
        <tr><td><strong>Project Value</strong></td><td>: <?= htmlspecialchars($project['value']) ?></td></tr>
        <tr><td><strong>Project Costing</strong></td><td>: <?= htmlspecialchars($project['costing']) ?></td></tr>
        <tr><td><strong>Project Relationship With Sustainable<br>Development Goals (SDG)</strong></td><td>: <?= htmlspecialchars($project['sdg']) ?></td></tr>
      </table>

      <div class="details-buttons">
        <button class="back-btn" onclick="window.location.href='projectDirectory.php'">BACK</button>
        <button class="edit-btn" onclick="window.location.href='editProject.php?code=<?= urlencode($projectCode) ?>'">EDIT</button>
      </div>
    </div>
  </div>

</body>
</html>
