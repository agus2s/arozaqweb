<?php 
const NAMA = 'Ibu Mustanginah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Saridem dan Bapak Mustakim. <?=NAMA?> memiliki 4 orang anak:</p>
		<ol>
			<li>Slamet</li>
			<li>Muklas</li>
			<li>Ruhin</li>
			<li>Dayah</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
				A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
				C["Ibu Saridem"] --> D["Ibu Mustanginah"]
				B --> C
				D --> 1["Slamet"] & 2["Muklas"]
				D --> 3["Ruhin"] & 4["Dayah"]
        
				click A "../index.php"
				click B "index.php"
				click C "bani-mustakim.php" "Bani Mustakim"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>