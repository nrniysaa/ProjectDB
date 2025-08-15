<?php include 'header.html'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Memo Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 120px; /* space for header */
            background-color: #f8f8f8;
        }
        .memo-section {
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: auto;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .memo-header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .form-group {
            display: flex;
            margin-bottom: 8px;
        }
        .form-group label {
            width: 150px;
            font-weight: bold;
        }
        .form-group input, 
        .form-group textarea {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        hr {
            margin: 20px 0;
        }
        .add-btn {
            background: #2c3e50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .remove-btn {
            background: #e74c3c;
            color: white;
            padding: 4px 8px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
</head>
<body style="padding-top: 160px;">

<div class="memo-section">
    <div class="memo-header">
        MEMO<br>
        Reference No.
    </div>

    <form id="memoForm" action="generate_memo.php" method="post">

        <div class="row">
            <div class="form-group">
                <label>From:</label>
                <input type="text" name="from" required>
            </div>
            <div class="form-group">
                <label>To:</label>
                <input type="text" name="to" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Project Code:</label>
                <input type="text" name="project_code" required>
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="date" name="date" required>
            </div>
        </div>

        <div class="form-group">
            <label>Subject:</label>
            <input type="text" name="subject" required>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" rows="3" required></textarea>
        </div>

        <hr>

        <div id="itemsContainer">
            <div class="memo-item">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name[]" required>
                </div>
                <div class="form-group">
                    <label>Bank:</label>
                    <input type="text" name="bank[]" required>
                </div>
                <div class="form-group">
                    <label>Account No.:</label>
                    <input type="text" name="account_no[]" required>
                </div>
                <div class="form-group">
                    <label>Amount:</label>
                    <input type="number" step="0.01" name="amount[]" required>
                </div>
                <div class="form-group">
                    <label>Justification:</label>
                    <textarea name="justification[]" rows="2" required></textarea>
                </div>
            </div>
        </div>

        <button type="button" class="add-btn" onclick="addItem()">+ Add Item</button>
        <br><br>
        <button type="submit" class="add-btn">Generate Memo</button>

    </form>
</div>

<script>
    function addItem() {
        let container = document.getElementById('itemsContainer');
        let newItem = document.createElement('div');
        newItem.classList.add('memo-item');
        newItem.innerHTML = `
            <hr>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name[]" required>
                <button type="button" class="remove-btn" onclick="this.parentElement.parentElement.remove()">Delete</button>
            </div>
            <div class="form-group">
                <label>Bank:</label>
                <input type="text" name="bank[]" required>
            </div>
            <div class="form-group">
                <label>Account No.:</label>
                <input type="text" name="account_no[]" required>
            </div>
            <div class="form-group">
                <label>Amount:</label>
                <input type="number" step="0.01" name="amount[]" required>
            </div>
            <div class="form-group">
                <label>Justification:</label>
                <textarea name="justification[]" rows="2" required></textarea>
            </div>
        `;
        container.appendChild(newItem);
    }
</script>

</body>
</html>
