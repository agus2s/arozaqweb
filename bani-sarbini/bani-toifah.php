<?php 
const NAMA = 'Ibu Toifah';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu 'Afinah. <?=NAMA?> bersuami Bapak Nurhadi. <?=NAMA?> memiliki 3 anak:</p>
		<ol>
			<li>Umi Salamah</li>
			<li>Ahmad Fauzan</li>
			<li>Amin Ashar</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[Ibu 'Afinah]
			C --> D[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
			click C "bani-afinah.php" "Ibu 'Afinah"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>