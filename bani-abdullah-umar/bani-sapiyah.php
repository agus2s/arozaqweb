<?php 
const NAMA = 'Ibu Sapiyah';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Imron. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Jured</li>
			<li>Ibu Etin</li>
			<li>Bapak Guntoro</li>
			<li>Bapak Bukhori</li>
			<li>Bapak Jauhar Maknun</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        graph TD
        A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Bapak Imron]
        C --> D[<?= NAMA ?>]
        click A "../index.php" "Bapak K.H. Abdurrozaq"
        click B "index.php" "Bani Abdullah Umar"
        click C "bani-imron.php" "Bani Imron"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
