<?php 
const NAMA = 'Ibu Hamidah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Abu Nangim</h2>
		<p><?=NAMA?> anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> bersuami Bapak Abu Nangim. <?=NAMA?> memiliki 9 anak:</p>
		<ol>
			<li><a href="bani-mujahid.php">Bapak Mujahid</a></li>
			<li><a href="#">Ibu Mutingah</a></li>
			<li><a href="#">Bapak Muhtarom</a></li>
			<li><a href="#">Bapak Mungawam</a></li>
			<li><a href="#">Bapak Muhtadi</a></li>
			<li><a href="#">Bapak Fatoni</a></li>
			<li><a href="#">Ibu Mutasingah</a></li>
			<li><a href="#">Bapak Muhtasun</a></li>
			<li><a href="#">Ibu Khoiriyah</a></li>
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