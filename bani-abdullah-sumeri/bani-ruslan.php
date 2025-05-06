<?php 
const NAMA = 'Ibu Hasanah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Ruslan</h2>
		<p><?=NAMA?> anak dari Ibu Satibah dan Bapak Ahmad Abdullah Sumeri. <?=NAMA?> bersuami Bapak Ruslan. <?=NAMA?> memiliki 6 orang anak:</p>
		<ol>
			<li><a href="#">Ibu Surati</a></li>
			<li><a href="#">Ibu Sijum</a></li>
			<li><a href="#">Ibu Rohanah</a></li>
			<li><a href="#">Bapak Rofingun</a></li>
			<li><a href="#">Ibu Hamidah</a></li>
			<li><a href="#">Ibu Tobingah</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
    	flowchart TD;
    	A["Mbah Abdurrozaq"] --> B["Ibu Satibah"];
    	B --> C[<?= NAMA ?>];
    	click A "../index.php";
    	click B "index.php" "Bani Abdullah Sumeri"
    </div>
	</section>
</main>

<?php include '../footer.php'; ?>