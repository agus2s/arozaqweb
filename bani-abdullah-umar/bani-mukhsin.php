<?php 
const NAMA = 'Ibu Isti';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?> bersuami Bapak Mukhsin</h2>
    <p><?=NAMA?> anak dari Bapak Hayan. <?=NAMA?> bersuami Bapak Mukhsin dan memiliki 2 anak, yaitu:</p>
    <ol>
			<li>Ifah</li>
      <li>Mustafid</li>
    </ol>
    </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Bapak Hayan]
    C --> D[<?= NAMA ?>]
        
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-hayan.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
