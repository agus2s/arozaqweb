<?php 
const NAMA = 'Bapak Muslimin';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Bahrudin. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Imah</li>
            <li>Bapak/Ibu Atul</li>
            <li>Bapak Nugroho</li>
        </ol>
    </section>
    <section>
      <h3>Silsilah Keluarga <?= NAMA ?></h3>
      <div class="mermaid" id="silsilah">
      graph TD
      A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Bapak Bahrudin]
      C --> D[<?= NAMA ?>]
      click A "../index.php" "Bapak K.H. Abdurrozaq"
      click B "index.php" "Bani Abdullah Umar"
      click C "bani-bahrudin.php" "Bani Bahrudin"
      </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
