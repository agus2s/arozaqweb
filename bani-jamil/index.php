<?php 
const NAMA = 'Bapak Muhammad Jamil';
include 'header.php'; 
?>
<main>    
	<section>
		<h2><?=NAMA?> beristri Ibu Maemunah</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> beristri Ibu Maemunah. <?=NAMA?> memiliki 8 orang anak:</p>
		<ol>
			<li><a href="bani-sadiyah.php">Ibu Sa'diyah</a></li>
			<li><a href="bani-munawir.php">Bapak Munawir</a></li>
			<li><a href="bani-hamami.php">Bapah Hamami</a></li>
			<li>Bapak Khotib</li>
			<li><a href="bani-habib.php">Bapak Habib</a></li>
			<li><a href="bani-ngantun.php">Ibu Ngantun</a></li>
			<li><a href="bani-tamrin.php">Bapak Tamrin</a></li>
			<li><a href="bani-ngaenah.php">Ibu Ngaenah</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>