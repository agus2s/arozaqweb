<?php 
const NAMA = "Ibu 'Afinah";
include 'header.php'; 
?>

<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. Beliau memiliki 5 anak, yaitu:</p>
		<ol>
			<li><a href="bani-hasyim.php">Bapak Hasyim</a></li>
			<li><a href="bani-teblo.php">Bapak/Ibu Teblo</a></li>
			<li><a href="bani-toifah.php">Ibu Toifah</a></li>
			<li><a href="bani-cendek.php">Ibu Khusnul</a></li>
			<li>Bapak Fakhir</li>
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