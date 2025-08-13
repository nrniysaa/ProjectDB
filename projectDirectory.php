<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Directory</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
  <style>
    /* Base Style */
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Banner */
    .directory-banner {
      position: relative;
      text-align: left;
      margin-bottom: 25px;
    }

    .directory-banner img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      filter: brightness(0.65);
    }

    .directory-banner h1 {
      position: absolute;
      bottom: 20px;
      left: 50px;
      font-size: 46px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1px;
      text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }

    /* Search Bar */
    .directorysearch-container {
      text-align: center;
      margin-bottom: 25px;
    }

    .directorysearch-container input[type="text"] {
      width: 350px;
      padding: 10px 14px;
      border: 1px solid #d0d0d0;
      border-radius: 25px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    .directorysearch-container input[type="text"]:focus {
      border-color: #30457d;
      box-shadow: 0 0 5px rgba(48, 69, 125, 0.3);
    }

    /* New Project Button */
    .directorybutton-container {
      text-align: center;
      margin-bottom: 25px;
    }

    .new-directory-btn {
      background-color: #30457d;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .new-directory-btn:hover {
      background-color: #223258;
    }

    /* Table Container */
    .table-container {
      padding: 0 6% 50px;
    }

    .directory-table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .directory-table thead {
      background-color: #30457d;
      color: white;
      font-size: 15px;
    }

    .directory-table th, 
    .directory-table td {
      padding: 14px 18px;
      text-align: left;
      font-size: 14px;
    }

    .directory-table tbody tr:nth-child(even) {
      background-color: #fafafa;
    }

    .directory-table tbody tr:hover {
      background-color: #f1f4ff;
      transition: background 0.3s ease;
    }

    /* Links */
    .project-link {
      color: #30457d;
      font-weight: 600;
      text-decoration: none;
    }

    .project-link:hover {
      text-decoration: underline;
    }

    /* Status Badges */
    .badge {
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      display: inline-block;
    }

    .ongoing {
      background-color: #FFC107;
      color: #8a6d3b;
    }

    .completed {
      background-color: #c8e6c9;
      color: #2e7d32;
    }

    /* Edit & Delete Buttons */
    .editproject-btn, .directorydelete-btn {
      border: none;
      padding: 6px 10px;
      font-size: 14px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }

    .editproject-btn {
      background-color: #6c757d;
      color: white;
    }

    .editproject-btn:hover {
      background-color: #565e64;
    }

    .directorydelete-btn {
      background-color: #dc3545;
      color: white;
    }

    .directorydelete-btn:hover {
      background-color: #b02a37;
    }

    /* Dropdown container */
    .edit-dropdown-container {
      position: relative;
      display: inline-block;
    }

    /* Dropdown menu */
    .edit-dropdown {
      display: none;
      position: absolute;
      top: 35px;
      left: 0;
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 6px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      z-index: 10;
      min-width: 160px;
    }

    .edit-dropdown a {
      display: block;
      padding: 10px;
      font-size: 14px;
      color: #333;
      text-decoration: none;
    }

    .edit-dropdown a:hover {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body style="padding-top: 120px;">

  <?php include 'header.html'; ?>

  <!-- Banner -->
  <div class="directory-banner">
    <img src="image/projectdirectory.png" alt="Project Directory Banner">
    <h1>Project Directory</h1>
  </div>

  <!-- Search Bar -->
  <div class="directorysearch-container">
    <input type="text" placeholder="🔍︎ Search Project" id="projectSearch">
  </div>

  <!-- New Project Button -->
  <div class="directorybutton-container">
    <a href="NewProjectDetails.php" class="new-directory-btn">+ New Project</a>
  </div>

  <!-- Table -->
  <div class="table-container">
    <table class="directory-table" id="projectTable">
      <thead>
        <tr>
          <th>Code</th>
          <th>Project</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="projectDetails.php?code=UHS001" class="project-link">UHS001</a></td>
          <td><a href="projectDetails.php?code=UHS001" class="project-link">Website Development</a></td>
          <td><span class="badge ongoing">On Going</span></td>
          <td class="edit-dropdown-container">
            <button class="editproject-btn">✎</button>
            <div class="edit-dropdown">
              <a href="editProject.php?project_id=UHS001">Project Details</a>
              <a href="updatePayment.php?project_id=UHS001">Update Payment</a>
            </div>
          </td>
          <td><button class="directorydelete-btn">❌</button></td>
        </tr>
        <tr>
          <td><a href="projectDetails.php?code=UHS002" class="project-link">UHS002</a></td>
          <td><a href="projectDetails.php?code=UHS002" class="project-link">Mobile App</a></td>
          <td><span class="badge completed">Completed</span></td>
          <td class="edit-dropdown-container">
            <button class="editproject-btn">✎</button>
            <div class="edit-dropdown">
              <a href="editProject.php?project_id=UHS002">Project Details</a>
              <a href="updatePayment.php?project_id=UHS002">Update Payment</a>
            </div>
          </td>
          <td><button class="directorydelete-btn">❌</button></td>
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

    // Toggle dropdown visibility
    document.querySelectorAll('.editproject-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        let dropdown = this.nextElementSibling;

        // Close all other dropdowns first
        document.querySelectorAll('.edit-dropdown').forEach(menu => {
          if (menu !== dropdown) menu.style.display = 'none';
        });

        // Toggle this one
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
      });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.edit-dropdown-container')) {
        document.querySelectorAll('.edit-dropdown').forEach(menu => {
          menu.style.display = 'none';
        });
      }
    });
  </script>

</body>
</html>