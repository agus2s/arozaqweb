<?php 
const NAMA = 'Ibu Ngasimah';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Jaenah. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
    <ol>
			<li>Ibu Iin Sururoh</li>
			<li>Ibu Rosidah</li>
			<li>Bapak Hidayat</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Jaenah]
    C --> D[<?= NAMA ?>]
        
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-jaenah.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
