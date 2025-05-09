<?php 
const NAMA = 'Bapak Ahmad Sumedi';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. <?= NAMA ?> memiliki 7 anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Marfungah</a></li>
			<li><a href="#">Ibu Marsidah</a></li>
			<li><a href="#">Ibu Maulidah</a></li>
			<li><a href="#">Ibu Marhamah</a></li>
			<li><a href="#">Ibu Linatul</a></li>
			<li><a href="#">Ibu Halimah</a></li>
			<li><a href="#">Bapak/Ibu Milhan</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>