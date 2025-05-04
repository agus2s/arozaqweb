<?php 
const NAMA ='Bapak Salimun';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Yusuf. <?=NAMA?> memiliki 3 anak:</p>
		<ol>			
			<li>Bapak Ahmad Dini Lutfi</li>   
			<li>Ibu Kholifatul</li>   
			<li>Ibu Naeli Amalina</li>   
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
      A[Mbah Abdurrozaq] --> B[Bapak H. Amin]
      B --> C[Bapak Ahmad Yusuf] --> D[<?=NAMA?>]
      
      click A "../index.php"
			click B "index.php"
			click C "bani-ahmad-yusuf.php"			
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>  