<?php 
const NAMA = 'Ibu Nafsatun';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Ansor</h2>
		<p><?=NAMA?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. <?=NAMA?> bersuami Bapak Ansor. <?=NAMA?> memiliki 5 anak:</p>
		<ol>
			<li><a href="bani-ngafiyah.php">Ibu Lembut/Ngafiyah</a></li>
			<li><a href="bani-sodik.php">Bapak Sodik</a></li>
			<li><a href="bani-basyuni.php">Bapak Basyuni</a></li>
			<li><a href="bani-mauludin.php">Bapak Ahmad Mauludin</a></li>
			<li><a href="bani-rohmah.php">Ibu Rohmah</a></li>
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