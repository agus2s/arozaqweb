<?php 
const NAMA = "'Afinah";
include 'header.php'; 
?>

<main>
	<section>
		<h2>Ibu 'Afinah</h2>
		<p>Ibu 'Afinah anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. Beliau memiliki 5 anak, yaitu:</p>
		<ol>
			<li><a href="#">Bapak Hasim</a></li>
			<li><a href="#">Bapak Teblo</a></li>
			<li><a href="#">Ibu Toifah</a></li>
			<li><a href="#">Bapak/Ibu Cendek</a></li>
			<li><a href="#">Bapak Fakhir</a></li>
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