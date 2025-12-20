<?php 
const NAMA = 'Bapak Murtadlo';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Bapak Mujahid. <?=NAMA?> memiliki 1 orang anak, yaitu:</p>
    <ol>
		<li>Ainurrofiq</li>
		<li>Abdurrozaq</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Hamidah]
    C --> D[Bapak Mujahid] --> E[<?= NAMA ?>]
	E --> 1[Ainurrofiq] & 2[Abdurrozaq]
    
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-abu-nangim.php" "Bani Abu Nangim"
	click D "bani-mujahid.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
