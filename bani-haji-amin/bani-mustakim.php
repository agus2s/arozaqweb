<?php 
const NAMA = 'Ibu Saridem';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Mustakim</h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> bersuami Bapak Mustakim. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="bani-mustanginah.php">Ibu Mustanginah</a></li>
			<li><a href="bani-tunjiyah.php">Ibu Tunjiyah</a></li>
			<li><a href="bani-sujiah.php">Ibu Sujiah</a></li>
			<li>Ibu Turiyah</li>
			<li><a href="bani-solihah.php">Ibu Solihah</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph LR
				A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"] --> C["Ibu Saridem"]
				C --> 1["Ibu Mustanginah"] & 2["Ibu Tunjiyah"] & 3["Ibu Sujiah"]
				C --> 4["Ibu Turiyah"] & 5["Ibu Solihah"]
        
				click A "../index.php"
				click B "index.php"
				click 1 "bani-mustanginah.php"
				click 2 "bani-tunjiyah.php"
				click 3 "bani-sujiah.php"
				click 5 "bani-solihah.php"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>