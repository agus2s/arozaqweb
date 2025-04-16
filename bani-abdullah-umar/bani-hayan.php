<?php 
const NAMA = 'Bapak Hayan';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?=NAMA?> beristri Ibu Tasmiyah</h1>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> beristri Ibu Tasmiyah. <?=NAMA?> memiliki 7 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-ngapip.php">Bapak Ngapip</a></li>
			<li><a href="bani-misbah.php">Bapak Misbah</a></li>
			<li><a href="bani-irham.php">Bapak Irham</a></li>
			<li><a href="bani-khanifah.php">Ibu Khanifah</a></li>
			<li><a href="#">Bapak Amir Fatah</a></li>
			<li><a href="#">Ibu Nunung</a></li>
			<li><a href="#">Bapak Ma'muri</a></li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
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