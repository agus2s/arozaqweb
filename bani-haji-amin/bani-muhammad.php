<?php 
const NAMA = 'Bapak Muhammad';
include 'header.php'; 
?>
<main>
    <section>
        <h1><?=NAMA?></h1>
        <p><?=NAMA?> adalah anak Bapak Haji Amin. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
            <li><a href="bani-busro.php">Bapak Busro</a></li>
            <li><a href="bani-amirudin.php">Bapak Amirudin</a></li>
			<li>Ibu Musriyati</li>
			<li><a href="bani-muhtarom.php">Bapak Muhtarom</a></li>
			<li><a href="bani-tamrin.php">Bapak Tamrin</a></li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">flowchart TD
            A[Mbah Abdurrozaq] --> B[Bapak H. Amin]
            B --> C[Bapak Muhammad]

            click A "../index.php"
            click B "index.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>