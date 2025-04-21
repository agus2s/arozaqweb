<?php 
const NAMA = 'Bapak Ahmad Sidiq';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> memiliki 2 anak:</p>
		<ol>
			<li><a href="bani-kasiyah.php">Ibu Kasiyah</a></li>
			<li><a href="bani-kuat.php">Bapak Kuat beristri Ibu Fatimah</a></li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="./index.php">Bapak H. Amin</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>  