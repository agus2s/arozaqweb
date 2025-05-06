<?php 
const NAMA = 'Bapak Basyuni';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Nafsatun dan Bapak Ansor. <?=NAMA?> memiliki 3 anak:</p>
		<ol>
			<li>Uul</li>
			<li>Amna</li>
			<li>Atik</li>
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