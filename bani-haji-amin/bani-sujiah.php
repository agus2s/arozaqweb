<?php 
const NAMA = 'Ibu Sujiah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Saridem dan Bapak Mustakim. <?=NAMA?> memiliki 2 orang anak:</p>
		<ol>
			<li>Siti Romlah</li>
			<li>Ade</li>
	
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
				A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
				C["Ibu Saridem"] --> D[<?= NAMA ?>]
				B --> C
				D --> 1["Siti Romlah"] & 2["Ade"]
        
				click A "../index.php"
				click B "index.php"
				click C "bani-mustakim.php" "Bani Mustakim"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>