<?php 
const NAMA ='Ibu Kasiyah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Sidiq. <?=NAMA?> memiliki 5 anak:</p>
		<ol>
			<li>Bapak Ma'sum</li>
			<li>Bapak/Ibu Sirob</li>
			<li>Bapak Lisin</li>
			<li>Bapak Markham</li>
			<li>Ibu Una</li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid" id="silsilah">
		flowchart TD;
		A[Mbah Abdurrozaq] --> B[Bapak H. Amin];
		B --> C[Bapak Ahmad Sidiq];
		C --> D[<?=NAMA?>];

		click A "../index.php"
		click B "index.php"
		click C "bani-ahmad-sidiq.php"
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>  