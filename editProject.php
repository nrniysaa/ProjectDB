<?php
// Example data for now (replace with DB fetch later)
$projectCode = "UHS001";
$projectQuotation = "RM 50,000";
$projectStatus = "On Going";
$projectUnder = "UHSB";
$projectTitle = "Website Development";
$beginDate = "2025-01-15";
$endDate = "2025-03-30";
$projectDescription = "Development of corporate website with CMS integration.";
$projectDeliverables = "Completed website, admin panel, documentation.";
$sdg = "4"; // SDG Goal Number
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Project</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
</head>
<body style="padding-top: 120px;">

  <!-- Include header -->
  <?php include 'header.html'; ?>

<div class="container">
    <h2>Edit Project</h2>
    <form action="updateProject.php" method="post">
        <label for="projectCode">Project Code</label>
        <input type="text" name="projectCode" value="<?= $projectCode ?>" required>

        <label for="projectQuotation">Project Quotation</label>
        <input type="text" name="projectQuotation" value="<?= $projectQuotation ?>" required>

        <label for="projectStatus">Project Status</label>
        <select name="projectStatus" required>
            <option value="">Choose Status</option>
            <option value="On Going" <?= $projectStatus=="On Going" ? "selected" : "" ?>>On Going</option>
            <option value="Completed" <?= $projectStatus=="Completed" ? "selected" : "" ?>>Completed</option>
            <option value="Extend" <?= $projectStatus=="Extend" ? "selected" : "" ?>>Extend</option>
            <option value="Cancelled" <?= $projectStatus=="Cancelled" ? "selected" : "" ?>>Cancelled</option>
        </select>

        <label for="projectUnder">Project Under</label>
        <select name="projectUnder" required>
            <option value="">Choose project under</option>
            <option value="UHSB" <?= $projectUnder=="UHSB" ? "selected" : "" ?>>UHSB</option>
            <option value="UHE" <?= $projectUnder=="UHE" ? "selected" : "" ?>>UHE</option>
            <option value="JELITA" <?= $projectUnder=="JELITA" ? "selected" : "" ?>>JELITA</option>
        </select>

        <label for="projectTitle">Project Title</label>
        <input type="text" name="projectTitle" value="<?= $projectTitle ?>" required>

        <label>Project Duration</label>
        <div class="flex-row">
            <input type="date" name="beginDate" value="<?= $beginDate ?>" required>
            <input type="date" name="endDate" value="<?= $endDate ?>" required>
        </div>

        <label for="projectDescription">Project Description</label>
        <textarea name="projectDescription" rows="4" required><?= $projectDescription ?></textarea>

        <label for="projectDeliverables">Project Deliverables</label>
        <textarea name="projectDeliverables" rows="3" required><?= $projectDeliverables ?></textarea>

        <label for="sdg">Project Relationship With Sustainable Development Goals (SDG)</label>
        <select name="sdg" required>
            <option value="">Choose SDG</option>
            <option value="1" <?= $sdg=="1" ? "selected" : "" ?>>1. No Poverty</option>
            <option value="2" <?= $sdg=="2" ? "selected" : "" ?>>2. Zero Hunger</option>
            <option value="3" <?= $sdg=="3" ? "selected" : "" ?>>3. Good Health</option>
            <option value="4" <?= $sdg=="4" ? "selected" : "" ?>>4. Quality Education</option>
            <option value="5" <?= $sdg=="5" ? "selected" : "" ?>>5. Gender Equality</option>
            <option value="6" <?= $sdg=="6" ? "selected" : "" ?>>6. Clean Water and Sanitation</option>
            <option value="7">7. Affordable and Clean Energy</option>
            <option value="8">8. Decent Work and Economic Growth</option>
            <option value="9">9. Industry Innovation and Infrastructures</option>
            <option value="10">10. Reduced Inequalities</option>
            <option value="11">11. Sustainable Cities and Communities</option>
            <option value="12">12. Responsible Consumption and Production</option>
            <option value="13">13. Climate Action</option>
            <option value="14">14. Life Below Water</option>
            <option value="15">15. Life on Land</option>
            <option value="16">16. Peace, Justice and Strong Institutions</option>
            <option value="17">17. Partnerships for The Goals</option>
        </select>

        <div class="form-buttons">
            <button type="button" class="cancel" onclick="window.location.href='projectDirectory.php'">CANCEL</button>
            <button type="submit" class="next">SAVE</button>
        </div>
    </form>
</div>

</body>
</html>
