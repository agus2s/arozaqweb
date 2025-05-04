<?php 
const NAMA ='Bapak Sarman';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Yusuf. <?=NAMA?> memiliki 4 anak:</p>
		<ol>
			<li>Ibu Rustiah</li>
			<li>Bapak Amin</li>
			<li>Bapak Jangim</li>
			<li>Bapak Ridho</li>          
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