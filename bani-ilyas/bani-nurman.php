<?php 
const NAMA = 'Ibu Hindun Asfiyah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?> bersuami Bapak Nurman Mulyana</h2>
		<p><?= NAMA ?> anak dari Bapak H. Hasan Ilyas dan Ibu Rochyati. <?= NAMA ?> bersuami Bapak Nurman Mulyana. Beliau memiliki 2 orang anak:</p>
		<ol>
			<li>Ahmad Hasan Ath-Thabari</li>
			<li>Syarifah Noor Iqlima</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Bapak H. Ilyas] --> C[<?= NAMA ?>]

			click A "../index.php"
			click B "index.php"
		</div>
	</section>		
</main>
<?php include '../footer.php'; ?>