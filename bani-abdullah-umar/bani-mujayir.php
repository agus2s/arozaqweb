<?php 
const NAMA = 'Bapak Mujayir/Dahlan';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. Beliau memiliki 8 orang anak:</p>
        <ol>
            <li>Bapak Ma'sum</li>
			<li>Ibu Musfiroh</li>
			<li>Bapak Makin</li>
			<li>Ibu Wasilah</li>
			<li>Bapak Mukti</li>
			<li>Bapak Miftah</li>
			<li>Bapak Lutfi</li>
			<li>Ibu Khotijah</li>            
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        graph TD;
            A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Aisyah]
            C --> D[<?= NAMA ?>]
            E[Bapak Sabilan] --> D;
            F[Bapak Abdullah Umar] --> C;
            click A "../index.php"
            click B "index.php"
            click C "bani-sabilan.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
