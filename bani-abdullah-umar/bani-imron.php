<?php 
const NAMA = 'Bapak Imron';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 11 anak:</p>
		<ol>
			<li><a href="bani-sangadah.php">Ibu Sangadah</a></li>
			<li>Ibu Baryatun</li>
			<li><a href="bani-mudzakir.php">Bapak Mudzakir</a></li>
			<li><a href="bani-mus-imron.php">Bapak/Ibu Mus</a></li>
			<li><a href="bani-sapiyah.php">Ibu Sapiyah</a></li>
			<li><a href="bani-taslimah.php">Ibu Taslimah</a></li>
			<li>Bapak Muhaimin</li>
			<li><a href="bani-muhtamil.php">Bapak Muhtamil</a></li>
			<li><a href="bani-munadir.php">Bapak H. Munadir</a></li>
			<li><a href="bani-muhtalim.php">Bapak Muhtalim</a></li>
			<li><a href="bani-yatimah.php">Ibu Yatimah</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
		flowchart TD;
		A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[<?= NAMA ?>];
		D[Bapak Abdullah Umar] --> C;

		click A "../index.php";
		click B "index.php";
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>