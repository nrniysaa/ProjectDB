<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Cost Breakdown</title>
  <link rel="stylesheet" href="styles.css"> <!-- External CSS -->
</head>
<body>

<?php include 'header.html'; ?>

<main class="container">
  <h2>PROJECT COST BREAKDOWN</h2>

  <form id="costForm">

    <!-- Section A -->
    <section id="sectionA" class="cost-section">
      <h3>A. Pembayaran/Caj kepada Perunding</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionA')">+ Add Item</button>
      <p>Jumlah A: RM <span id="totalA">0.00</span></p>
    </section>

    <!-- Section B -->
    <section id="sectionB" class="cost-section">
      <h3>B. Caj oleh Fakulti/PTJ</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionB')">+ Add Item</button>
      <p>Jumlah B: RM <span id="totalB">0.00</span></p>
    </section>

    <!-- Section C -->
    <section id="sectionC" class="cost-section">
      <h3>C. Perbelanjaan Operasi</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionC')">+ Add Item</button>
      <p>Jumlah C: RM <span id="totalC">0.00</span></p>
    </section>

    <!-- Section D -->
    <section id="sectionD" class="cost-section">
      <h3>D. Lain-lain Perbelanjaan</h3>
      <div class="inputs"></div>
      <button type="button" onclick="addItem('sectionD')">+ Add Item</button>
      <p>Jumlah D: RM <span id="totalD">0.00</span></p>
    </section>

    <!-- SST and Grand Total -->
    <section class="totals">
      <label for="sst">SST (%)</label>
      <input type="number" id="sst" value="8" min="0" oninput="updateTotals()">

      <p>SST Amount: RM <span id="sstAmount">0.00</span></p>
      <p><strong>Jumlah Keseluruhan:</strong> RM <span id="grandTotal">0.00</span></p>
    </section>

    <div class="buttons">
      <button type="button">BACK</button>
      <button type="submit">CONFIRM</button>
    </div>
  </form>
</main>

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
    const sst = parseFloat(document.getElementById('sst').value) || 0;
    const sstAmount = (sst / 100) * subtotal;
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
