<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Directory</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
</head>
<body>

  <!-- Include header -->
  <?php include 'header.html'; ?>

<div class="container">
    <h2>Add New Project</h2>
    <form action="submitProject.php" method="post">
        <label for="projectCode">Project Code</label>
        <input type="text" name="projectCode" required>

        <label for="projectQuotation">Project Quotation</label>
        <input type="text" name="projectQuotation" required>

        <label for="client">Client</label>
        <div class="client-field">
            <input type="text" name="client" required>
            <button type="button" class="add-client-btn">+</button>
        </div>
        <label for="projectStatus">Project Status</label>
        <select name="projectStatus" required>
            <option value="">Choose Status</option>
            <option value="On Going">On Going</option>
            <option value="Completed">Completed</option>
            <option value="Extend">Extend</option>
            <option value="Cancelled">Cancelled</option>
        </select>

        <label for="projectUnder">Project Under</label>
        <select name="projectUnder" required>
            <option value="">Choose project under</option>
            <option value="UHSB">UHSB</option>
            <option value="UHE">UHE</option>
            <option value="JELITA">JELITA</option>
        </select>

        <label for="projectTitle">Project Title</label>
        <input type="text" name="projectTitle" required>

        <label>Project Duration</label>
        <div class="flex-row">
            <input type="date" name="beginDate" required>
            <input type="date" name="endDate" required>
        </div>

        <label for="projectDescription">Project Description</label>
        <textarea name="projectDescription" rows="4" required></textarea>

        <label for="projectDeliverables">Project Deliverables</label>
        <textarea name="projectDeliverables" rows="3" required></textarea>

        <label for="sdg">Project Relationship With Sustainable Development Goals (SDG)</label>
        <select name="sdg" required>
            <option value="">Choose SDG</option>
            <option value="1">1. No Poverty</option>
            <option value="2">2. Zero Hunger</option>
            <option value="3">3. Good Health</option>
            <option value="4">4. Quality Education</option>
            <option value="5">5. Gender Equality</option>
            <option value="6">6. Clean Water and Sanitation</option>
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
            <option value="16">17. Partnerships for The Goals</option>
        </select>

        <div class="form-buttons">
            <button type="button" class="cancel" onclick="window.location.href='projectDirectory.php'">CANCEL</button>
            <button type="submit" class="next">NEXT</button>
        </div>
    </form>
</div>

</body>
</html>
