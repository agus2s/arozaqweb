<?php 
const NAMA ='Bapak Kuat';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> beristri Ibu Fatimah</h2>
		<p>
			<?=NAMA?> anak dari Bapak Ahmad Sidiq. 
			<?=NAMA?> beristri Ibu Fatimah dan memiliki 6 anak:
		</p>
		<ol>
			<li>Bapak/Ibu Rus</li>
			<li>Bapak Soiman</li>
			<li>Bapak Soleman</li>
			<li>Ibu Toimah</li>
			<li>Ibu Hotimah</li>
			<li>Bapak Hartono</li>
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