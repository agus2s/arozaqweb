<?php 
const NAMA = 'Bapak Tamrin';
include 'header.php'; 	
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Bapak Riyadi</a></li>
			<li><a href="#">Bapak Umar Said</a></li>
			<li><a href="#">Ibu Umarotun</a></li>
			<li><a href="#">Ibu Manisah</a></li>
			<li><a href="#">Ibu Siti Khotimah</a></li>
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