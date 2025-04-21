<?php 
const NAMA = 'Ibu Saripah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Satibah dan Bapak Ahmad Abdullah Sumeri. <?=NAMA?> memiliki 2 orang anak:</p>
		<ol>
			<li><a href="#">Bapak H. Lukman</a></li>
			<li><a href="#">Bapak Sunyoto</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
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