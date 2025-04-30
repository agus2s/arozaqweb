<?php 
const NAMA = 'Bapak Mukhlas';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki 8 orang anak:</p>
        <ol>
			<li>Bapak Muhayat</li>
			<li>Bapak Amin</li>
			<li>Ibu Ngazimah</li>
			<li>Ibu Imroah</li>
			<li>Ibu Azlimah</li>
			<li>Bapak Kholil</li>
			<li>Ibu Khodimah</li>
			<li>Ibu Munjiroh</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
            graph TD;
            A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Aisyah] --> D[Bapak Mukhlas];
            E[Bapak Sabilan] --> D;
            F[Bapak Abdullah Umar] --> C;
            click A "../index.php";
            click B "index.php";
            click C "bani-sabilan.php";
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
