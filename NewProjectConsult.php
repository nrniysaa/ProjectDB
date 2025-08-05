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

<!-- Add margin-top to container -->
<div class="container" style="margin-top: 150px;">
    <h2>CONSULTANCY INFORMATION</h2>

    <form action="submitConsultancy.php" method="post">
        <fieldset>
            
            <legend><strong>Project Leader Information</strong></legend>

            <label for="leaderName">Name</label>
            <input type="text" name="leaderName" required>

            <label for="leaderIC">IC No.</label>
            <input type="text" name="leaderIC" required>

            <label for="leaderStaffNo">Staff No.</label>
            <input type="text" name="leaderStaffNo" required>

            <label for="leaderFaculty">Fakulti/PTJ</label>
            <input type="text" name="leaderFaculty" required>

            <label for="leaderPhone">Phone No</label>
            <input type="text" name="leaderPhone" required>
        </fieldset>

        <div id="memberContainer">
            <fieldset>
                <legend><strong>Member 1</strong></legend>

                <label>Name</label>
                <input type="text" name="memberName[]" required>

                <label>Staff No.</label>
                <input type="text" name="memberStaffNo[]" required>

                <label>Fakulti/PTJ</label>
                <input type="text" name="memberFaculty[]" required>
            </fieldset>
        </div>

        <button type="button" class="add-member-btn" onclick="addMember()">+ ADD MEMBER</button>

        <div class="form-buttons">
            <button type="button" class="cancel" onclick="window.location.href='addProject.php'">BACK</button>
            <button type="submit" class="next">NEXT</button>
        </div>
    </form>
</div>

<script>
    let memberCount = 1;

    function addMember() {
        memberCount++;
        const memberContainer = document.getElementById("memberContainer");

        const newFieldset = document.createElement("fieldset");
        newFieldset.setAttribute("id", `member-${memberCount}`);
        newFieldset.innerHTML = `
            <legend><strong>Member ${memberCount}</strong></legend>

            <label>Name</label>
            <input type="text" name="memberName[]" required>

            <label>Staff No.</label>
            <input type="text" name="memberStaffNo[]" required>

            <label>Fakulti/PTJ</label>
            <input type="text" name="memberFaculty[]" required>
            

            <button type="button" class="delete-member-btn" onclick="deleteMember(${memberCount})">Delete</button>
        `;

        memberContainer.appendChild(newFieldset);
    }

    function deleteMember(id) {
        const fieldsetToRemove = document.getElementById(`member-${id}`);
        if (fieldsetToRemove) {
           
            fieldsetToRemove.remove();
        }
    }
</script>



</body>
</html>
