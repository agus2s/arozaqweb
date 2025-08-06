<?php 
const NAMA = 'Ibu Siti Rohmah';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Nafsatun dan Bapak Ansor. <?=NAMA?> bersuami Bapak Sungada. <?=NAMA?> memiliki 6 anak:</p>
		<ol>
			<li>Ibu Rina</li>
			<li>Tatul</li>
			<li>Ida</li>
			<li>Nisa</li>
			<li>Novi</li>
			<li>Agus</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[Ibu Nafsatun]
			C --> D[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
			click C "bani-ansor.php" "Bani Ansor"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>