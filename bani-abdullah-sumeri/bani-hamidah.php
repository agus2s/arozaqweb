<?php 
const NAMA = 'Ibu Hamidah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Hasanah dan Bapak Ruslan. <?=NAMA?> memiliki 1 orang anak:</p>
		<ol>
			<li>Ainun</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
    	flowchart TD;
    	A["Mbah Abdurrozaq"] --> B["Ibu Satibah"] --> C[Ibu Hasanah];
    	C --> D[<?= NAMA ?>];
    	click A "../index.php";
    	click B "index.php" "Bani Abdullah Sumeri"
		click C "bani-ruslan.php" "Bani Ruslan"
    </div>
	</section>
</main>

<?php include '../footer.php'; ?>