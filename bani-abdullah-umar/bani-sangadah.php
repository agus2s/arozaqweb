<?php 
const NAMA = 'Ibu Sangadah';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Imron. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Mutmainah</li>
			<li>Ibu Munifah</li>
			<li>Bapak Sohib</li>
			<li>Ibu Khomsatun</li>
        </ol>
    </section>
    <section>
        <h2>Silsilah Keluarga <?= NAMA ?></h2>
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
