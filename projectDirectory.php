<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Directory</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
  <style>
    /* Make clickable link look like normal text */
    .project-link {
      color: #30457d;
      font-weight: bold;
      text-decoration: none;
    }
    .project-link:hover {
      text-decoration: underline;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <?php include 'header.html'; ?>

  <!-- Banner -->
  <div class="banner">
    <img src="image/projectdirectory.png" alt="Banner" class="banner-img">
    <h1 class="banner-title">Project Directory</h1>
  </div>

  <!-- Search Bar -->
  <div class="search-container">
    <input type="text" id="projectSearch" placeholder="Search Project" class="search-input">
  </div>

  <!-- New Project Button -->
  <a href="NewProjectDetails.php" class="new-project-btn">+ NEW PROJECT</a>

  <!-- Table -->
  <div class="table-container">
    <table class="project-table" id="projectTable">
      <thead>
        <tr>
          <th>CODE</th>
          <th>PROJECT</th>
          <th>STATUS</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="projectDetails.php?code=UHS001" class="project-link">UHS001</a></td>
          <td><a href="projectDetails.php?code=UHS001" class="project-link">Website Development</a></td>
          <td><span class="badge ongoing">On Going</span></td>
          <td><a href="editProject.php?project_id=UHS001" class="edit-btn">✎</a></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
        <tr>
          <td><a href="projectDetails.php?code=UHS002" class="project-link">UHS002</a></td>
          <td><a href="projectDetails.php?code=UHS002" class="project-link">Mobile App</a></td>
          <td><span class="badge completed">Completed</span></td>
          <td><a href="editProject.php?project_id=UHS002" class="edit-btn">✎</a></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    // Live search filter
    document.getElementById("projectSearch").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let rows = document.querySelectorAll("#projectTable tbody tr");

      rows.forEach(row => {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
      });
    });
  </script>

</body>
</html>
