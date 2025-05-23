<?php 
const NAMA = 'Ibu Hj. Natijatul Muna';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak H. Mustakim</h2>
		<p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> bersuami Bapak H. Mustakim. <?=NAMA?> memiliki anak:</p>
		<ol>
			<li>Niswatu Sa'ida Amania</li>
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