<?php 
const NAMA = 'Ibu Marsidah';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Sumedi. <?=NAMA?> memiliki 1 anak:</p>
		<ol>
			<li>Nining</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[Bapak Ahmad Sumedi]
			C --> D[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
			click C "bani-ahmad-sumedi.php" "Bapak Ahmad Sumedi"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>