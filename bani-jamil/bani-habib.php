<?php 
const NAMA = 'Bapak Habib';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 2 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Bapak Miftahudin</a></li>
			<li><a href="#">Ibu Muniroh</a></li>
		</ol>
	<section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak Muhammad Jamil</a></div>
			<div class="line"></div>
			<div class="node"><?= NAMA ?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>