<?php 
const NAMA = 'Bapak Ulun Nuha';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> beristri Ibu Iin Kurniasih</h2>
		<p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> beristri Ibu Iin Kurniasih. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
		<ol>
			<li>Ahsan</li>
			<li>Aqil</li>
			<li>Aqila</li>
			<li>Amrina</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[Bapak Abdul Qohar]
			C --> D[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
			click C "bani-abdul-qohar.php"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>