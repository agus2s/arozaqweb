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
			<li><a href="bani-mutingah.php">Ibu Mutingah</a></li>
			<li><a href="bani-muhtarom.php">Bapak Muhtarom</a></li>
			<li><a href="bani-mungawam.php">Bapak Mungawam</a></li>
			<li><a href="bani-muhtadi.php">Bapak Muhtadi</a></li>
			<li><a href="bani-fatoni.php">Bapak Fatoni</a></li>
			<li><a href="bani-mutasingah.php">Ibu Mutasingah</a></li>
			<li><a href="bani-muhtasun.php">Bapak Muhtasun</a></li>
			<li>Ibu Khoiriyah</li>
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