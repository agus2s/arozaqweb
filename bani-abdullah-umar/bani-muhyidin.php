<?php 
const NAMA = 'Bapak Kuat/Muhyidin';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki anak:</p>
        <ol>
			<li>Ibu Rohmah</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        flowchart TD;
        A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Aisyah];
        C --> D[<?= NAMA ?>] --> E[Ibu Rohmah];
        F[Bapak Sabilan] --> D;
        G[Bapak Abdullah Umar] --> C;

        click A "../index.php"
        click B "index.php"
        click C "bani-sabilan.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
