<?php 
const NAMA = 'Ibu Mus';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Imron. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Kudriyah</li>
			<li>Ibu Toifah</li>
			<li>Bapak Syamsul</li>
			<li>Bapak Anam</li>
			<li>Bapak Busro</li>
			<li>Bapak Ngakib</li>
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
