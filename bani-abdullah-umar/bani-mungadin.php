<?php 
const NAMA = 'Bapak Mungadin';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki anak:</p>
        <ol>
			<li>Bapak Arif</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        flowchart TD;
        A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Aisyah];
        C --> D[<?= NAMA ?>] --> E[Bapak Arif];
        F[Bapak Abdullah Umar] --> C;
        G[Bapak Sabilan] --> D;
        click A "../index.php"
        click B "index.php"
        click C "bani-sabilan.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
