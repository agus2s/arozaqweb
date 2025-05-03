<?php 
const NAMA = 'Bapak Muhtadi';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 8 orang anak, yaitu:</p>
    <ol>
      <li>Bapak Fatkhul Humam</li>
      <li>Ibu Khimayatul Karomah</li>
      <li>Ibu Mutamimah</li>
      <li>Bapak Ngatourrohman</li>
      <li>Bapak Hadadul Ahkam</li>
      <li>Ibu Masruhah</li>
      <li>Ibu Mei Muadibah</li>
      <li>Bapak Syahrul</li>
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
