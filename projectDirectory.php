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

  <!-- Banner -->
  <div class="banner">
    <img src="image/projectdirectory.png" alt="Banner" class="banner-img">
    <h1 class="banner-title">Project Directory</h1>
  </div>

  <!-- Search Bar -->
  <div class="search-container">
    <input type="text" placeholder="Search Project" class="search-input">
  </div>

  <!-- New Project Button -->
  <a href="NewProjectDetails.php" class="new-project-btn">+ NEW PROJECT</a>


  <!-- Table -->
  <div class="table-container">
    <table class="project-table">
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
          <td>XXXX</td>
          <td>XXXX</td>
          <td><span class="badge ongoing">On Going</span></td>
          <td><button class="edit-btn">✎</button></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
        <tr>
          <td>XXXX</td>
          <td>XXXX</td>
          <td><span class="badge completed">Completed</span></td>
          <td><button class="edit-btn">✎</button></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
        <tr>
          <td>XXXX</td>
          <td>XXXX</td>
          <td><span class="badge extend">Extend</span></td>
          <td><button class="edit-btn">✎</button></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
        <tr>
          <td>XXXX</td>
          <td>XXXX</td>
          <td><span class="badge cancelled">Cancelled</span></td>
          <td><button class="edit-btn">✎</button></td>
          <td><button class="delete-btn">❌</button></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
