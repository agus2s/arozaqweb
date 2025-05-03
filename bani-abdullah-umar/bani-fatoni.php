<?php 
const NAMA = 'Bapak Fatoni';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
    <ol>
      <li>Bapak Hanan</li>
      <li>Bapak Itmam</li>
      <li>Bapak Nasrullah</li>
      <li>Ibu Ulin Ni'mah</li>
      <li>Bapak Najihul Umam</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Hamidah]
    C --> D[<?= NAMA ?>]
    
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-abu-nangim.php" "Bani Abu Nangim"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
