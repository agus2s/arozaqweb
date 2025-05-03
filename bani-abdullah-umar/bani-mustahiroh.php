<?php 
const NAMA = 'Ibu Mustahiroh';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Bapak Hamdani. <?=NAMA?> memiliki 2 orang anak, yaitu:</p>
    <ol>
			<li>Ibu Tuti</li>
			<li>Ibu Ira</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Bapak Hamdani]
    C --> D[<?= NAMA ?>]
        
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-hamdani.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
