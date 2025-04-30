<?php 
const NAMA = 'Bapak Tulus';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Haris</li>
			<li>Bapak Labib</li>
			<li> Ibu Yuni</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        flowchart TD;
        A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Aisyah];
        C --> D[<?= NAMA ?>];
        E[Bapak Sabilan] --> D;
        F[Bapak Abdullah Umar] --> C;

        click A "../index.php";
        click B "index.php";
        click C "bani-sabilan.php";
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
