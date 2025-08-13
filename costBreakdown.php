<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Overview</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
</head>
<body style="padding-top: 120px;">


  <?php include 'header.html'; ?>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 800px;
      margin: 60px auto;
      padding: 30px 40px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
      font-size: 26px;
    }

    .cost-section {
      margin-bottom: 30px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e1e4e8;
    }

    .cost-section h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: #374151;
      border-left: 5px solid #667eea;
      padding-left: 10px;
    }

    .input-group {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 10px;
    }

    .input-group input {
      padding: 8px 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #f9f9f9;
    }

    .input-group .desc {
      flex: 1.5;
    }

    .input-group .amount {
      width: 130px;
    }

    .delete-btn {
      background-color: #e74c3c;
      color: white;
      border: none;
      padding: 6px 12px;
      font-size: 13px;
      border-radius: 6px;
      cursor: pointer;
    }

    button[type="button"] {
      background-color: #30457d;
      color: white;
      border: none;
      padding: 7px 16px;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 10px;
      font-size: 14px;
      font-weight: 500;
    }

    .jumlah-line {
      text-align: right;
      font-weight: 500;
      margin-top: 10px;
      color: #2c3e50;
    }

    .jumlah-line.grand {
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
      border-top: 1px solid #ddd;
      padding-top: 10px;
    }

    .totals {
      margin-top: 20px;
      font-size: 15px;
    }

    .totals label {
      font-weight: 500;
    }

    .totals input[type="number"] {
      margin-left: 10px;
      width: 60px;
      padding: 5px 8px;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .totals input[type="checkbox"] {
      margin-left: 5px;
      transform: scale(1.1);
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
    }

    .confirm-btn {
      background-color: #27ae60;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .back-btn {
      background-color: #bdc3c7;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    @media screen and (max-width: 600px) {
      .input-group {
        flex-direction: column;
        align-items: flex-start;
      }

      .input-group .amount {
        width: 100%;
      }

      .buttons {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>PROJECT COST BREAKDOWN</h2>

  <form id="costForm">

    <!-- Section A -->
    <section id="sectionA" class="cost-section">
      <h3>A. Pembayaran/Caj kepada Perunding</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionA')">+ Add Item</button>
      <div class="jumlah-line">Jumlah A: RM <span id="totalA">0.00</span></div>
    </section>

    <!-- Section B -->
    <section id="sectionB" class="cost-section">
      <h3>B. Kos Langsung</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionB')">+ Add Item</button>
      <div class="jumlah-line">Jumlah B: RM <span id="totalB">0.00</span></div>
    </section>

    <!-- Section C -->
    <section id="sectionC" class="cost-section">
      <h3>C. Penemu</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionC')">+ Add Item</button>
      <div class="jumlah-line">Jumlah C: RM <span id="totalC">0.00</span></div>
    </section>

    <!-- Section D -->
    <section id="sectionD" class="cost-section">
      <h3>D. Yuran Pengurusan</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionD')">+ Add Item</button>
      <div class="jumlah-line">Jumlah D: RM <span id="totalD">0.00</span></div>
    </section>

    <!-- SST and Grand Total -->
    <section class="totals">
      <label>
        <input type="checkbox" id="includeSST" checked onchange="updateTotals()">
        Include SST (8%)
      </label>
      <div class="jumlah-line">SST Amount: RM <span id="sstAmount">0.00</span></div>
      <div class="jumlah-line grand">Jumlah Keseluruhan: RM <span id="grandTotal">0.00</span></div>
    </section>

    <div class="buttons">
      <button type="button" class="back-btn">BACK</button>
      <button type="submit" class="confirm-btn">CONFIRM</button>
    </div>
  </form>
</div>

<script>
  function addItem(sectionId) {
    const section = document.getElementById(sectionId).querySelector('.inputs');
    const div = document.createElement('div');
    div.className = 'input-group';

    div.innerHTML = `
      <input type="text" placeholder="e.g. Description" class="desc">
      <input type="number" placeholder="Amount (RM)" class="amount" step="0.01" oninput="updateTotals()">
      <button type="button" class="delete-btn" onclick="this.parentElement.remove(); updateTotals();">Delete</button>
    `;

    section.appendChild(div);
  }

  function calculateSectionTotal(sectionId) {
    const section = document.getElementById(sectionId);
    const amounts = section.querySelectorAll('.amount');
    let total = 0;
    amounts.forEach(input => {
      const val = parseFloat(input.value) || 0;
      total += val;
    });
    return total;
  }

  function updateTotals() {
    const totalA = calculateSectionTotal('sectionA');
    const totalB = calculateSectionTotal('sectionB');
    const totalC = calculateSectionTotal('sectionC');
    const totalD = calculateSectionTotal('sectionD');

    const subtotal = totalA + totalB + totalC + totalD;
    const includeSST = document.getElementById('includeSST').checked;
    const sstRate = 8;
    const sstAmount = includeSST ? (sstRate / 100) * subtotal : 0;
    const grandTotal = subtotal + sstAmount;

    document.getElementById('totalA').textContent = totalA.toFixed(2);
    document.getElementById('totalB').textContent = totalB.toFixed(2);
    document.getElementById('totalC').textContent = totalC.toFixed(2);
    document.getElementById('totalD').textContent = totalD.toFixed(2);
    document.getElementById('sstAmount').textContent = sstAmount.toFixed(2);
    document.getElementById('grandTotal').textContent = grandTotal.toFixed(2);
  }
</script>

</body>
</html>
