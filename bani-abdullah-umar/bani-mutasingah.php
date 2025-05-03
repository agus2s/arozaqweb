<?php 
define ('NAMA', 'Ibu Mutasingah');
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
    <ol>
			<li>Ibu Nida</li>
			<li>Ibu Marjuni</li>
			<li>Ibu Ikoh</li>
			<li>Ibu Lina</li>
			<li>Bapak Ngafifudin</li>
			<li>Bapak Salim</li>
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
