<?php 
const NAMA = 'Ibu Marfungah';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Sumedi. <?=NAMA?> memiliki 6 anak:</p>
		<ol>
			<li>Jaim</li>
			<li>Juli</li>
			<li>Iin</li>
			<li>Nur</li>
			<li>Lisoh</li>
			<li>Mif</li>
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