<?php 
const NAMA = 'Ibu Laelatul Ngidyah';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Bapak Mujahid. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
    <ol>
      <li>Nangim</li>
      <li>Slamet Riyadi</li>
      <li>Nida</li>            
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Hamidah]
    C --> D[Bapak Mujahid] --> E[<?= NAMA ?>]
    
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-abu-nangim.php" "Bani Abu Nangim"
	click D "bani-mujahid.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
