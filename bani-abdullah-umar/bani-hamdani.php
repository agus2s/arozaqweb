<?php 
const NAMA = 'Bapak Hamdani';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?=NAMA?></h1>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-mustahiroh.php">Ibu Mustahiroh</a></li>
			<li><a href="bani-soimah.php">Ibu Soimah/Jibrog</a></li>
			<li>Bapak M. Hendar</li>
			<li>Bapak Tasdik</li>
			<li><a href="bani-syifa.php">Ibu Syifa</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Ibu Mariyah</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>