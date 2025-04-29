<?php 
const NAMA = 'Bapak Muhammad';
include 'header.php'; 
?>
<main>
    <section>
        <h1><?=NAMA?></h1>
        <p><?=NAMA?> adalah anak Bapak Haji Amin. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
            <li><a href="#">Bapak Mistam</a></li>
            <li><a href="#">Ibu Sarwiyah</a></li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid" id="silsilah">flowchart TD
            A[Mbah Abdurrozaq] --> B[Bapak H. Amin]
            B --> C[Bapak Muhammad]
            C --> D[Bapak Mistam]
            C --> E[Ibu Sarwiyah]

            click A "../index.php"
            click B "index.php"
            click D "bani-mistam.php"
            click E "bani-sarwiyah.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>