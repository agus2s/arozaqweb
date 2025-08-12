<?php 
const NAMA = 'Ibu Tunjiyah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Saridem dan Bapak Mustakim. <?=NAMA?> memiliki 4 orang anak:</p>
		<ol>
			<li>Wahrudin</li>
			<li>Alifah</li>
			<li>Fahrurrozi</li>
			<li>Ikoh</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
				A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
				C["Ibu Saridem"] --> D[<?= NAMA ?>]
				B --> C
				D --> 1["Wahrudin"] & 2["Alifah"]
				D --> 3["Fahrurrozi"] & 4["Ikoh"]
        
				click A "../index.php"
				click B "index.php"
				click C "bani-mustakim.php" "Bani Mustakim"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>