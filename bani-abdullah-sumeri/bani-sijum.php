<?php 
const NAMA = 'Ibu Sijum';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Hasanah dan Bapak Ruslan. <?=NAMA?> memiliki 4 orang anak:</p>
		<ol>
			<li><a href="#">Ibu Tati</a></li>
			<li><a href="#">Bapak Imam</a></li>
			<li><a href="#">Ibu Asfihani</a></li>
			<li><a href="#">Ibu Mahfufah</a></li>
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