<?php 
const NAMA = 'Bapak Muhdi';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Romlah. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
    <ol>
			<li>Bapak Abdul Karim</li>
			<li>Bapak Miftahurrohman</li>
			<li>Bapak Mustofa</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Romlah]
    C --> D[<?= NAMA ?>]
    
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-romlah.php" "Bani Abu Nangim"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
