<?php 
const NAMA ='Bapak Nasrudin';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Abdullah Rasyad. <?=NAMA?> memiliki 3 anak:</p>
		<ol>			
			<li>Ibu Linda</li>
			<li>Bapak Miftah</li>
			<li>Ibu Lisa</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Bapak H. Amin]
			B --> C[Bapak Dullah Rasyad] --> D[<?=NAMA?>]
      
			click A "../index.php"
			click B "index.php"
			click C "bani-abdullah-rasyad.php"			
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>  