<?php 
const NAMA = "Ibu 'Ariyah";
include 'header.php'; 
?>

<main>
	<section>
		<h1><?=NAMA?> bersuami Bapak Dul Ghoni</h1>
		<p><?=NAMA?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. <?=NAMA?> bersuami Bapak Dul Ghoni. <?=NAMA?> memiliki 6 anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Badriyah</a></li>
			<li><a href="#">Bapak H. Zubaidi</a></li>
			<li><a href="#">Ibu Tarhimah</a></li>
			<li><a href="#">Bapak Ngafisudin/Bawuk</a></li>
			<li><a href="#">Ibu Makromah</a></li>
			<li><a href="#">Bapak Aminudin</a></li>
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