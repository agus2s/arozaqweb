<?php 
const NAMA = 'Bapak Mahali';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Satibah dan Bapak Ahmad Abdullah Sumeri. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="#">Bapak/Ibu Mur</a></li>
			<li><a href="#">Bapak Muis</a></li>
			<li><a href="#">Bapak Alam</a></li>
			<li><a href="#">Bapak Hamid</a></li>
			<li><a href="#">Bapak/Ibu Nur</a></li>
		</ol>
	</section>
	<section>
	<h3>Garis Keturunan</h3>
	<div class="tree" id="silsilah">
		<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
		<div class="line"></div>
		<div class="node"><a href="index.php">Ibu Satibah</a></div>
		<div class="line"></div>
		<div class="node"><?=NAMA?></div>
	</div>
</section>
</main>

<?php include '../footer.php'; ?>