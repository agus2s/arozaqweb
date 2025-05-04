<?php 
const NAMA = 'Ibu Malehatun';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Arsyad Anwar</h2>
		<p><?=NAMA?> anak dari Bapak H. Hasan Ilyas dan Ibu Rochyati. <?=NAMA?> bersuami Bapak Arsyad Anwar. Baliau memiliki 2 orang anak:</p>
		<ol>
			<li>Arsalan Adi Permana</li>
			<li>Hamas Aisyah Mashelia</li>
		</ol>
	</section>
	<section>
			<h3>Silsilah Keluarga <?= NAMA ?></h3>
			<div class="mermaid" id="silsilah">
			graph TD
      A[Mbah Abdurrozaq] --> B[Bapak H. Ilyas]
      B --> C[<?= NAMA ?>]
      click A "../index.php"
      click B "index.php"
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>