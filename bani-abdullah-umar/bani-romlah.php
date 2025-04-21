<?php 
const NAMA = 'Ibu Romlah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
		<ol>
			<li>Ibu Ghonimah</li>
			<li><a href="bani-muhdi.php">Bapak Muhdi</a></li>
			<li>Ibu Muntasiroh</li>
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