<?php 
const NAMA = 'Bapak Busro';
include 'header.php'; 
?>
<main>
    <section>
        <h1><?=NAMA?></h1>
        <p><?=NAMA?> adalah anak Bapak Haji Amin. <?=NAMA?> memiliki 2 orang anak, yaitu:</p>
        <ol>
            <li>Zulfah</li>
            <li>Arjun</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">flowchart TD
            A[Mbah Abdurrozaq] --> B[Bapak H. Amin]
            B --> C[Bapak Muhammad] --> D[<?= NAMA ?>]

            click A "../index.php"
            click B "index.php"
			click C "bani-muhammad.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>