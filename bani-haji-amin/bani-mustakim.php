<?php 
const NAMA = 'Ibu Saridem';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Mustakim</h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> bersuami Bapak Mustakim. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="#">Ibu Mustanginah</a></li>
			<li><a href="#">Ibu Tunjiyah</a></li>
			<li><a href="#">Ibu Sujiah</a></li>
			<li><a href="#">Ibu Turiyah</a></li>
			<li><a href="#">Ibu Solihah</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak H. Amin</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>