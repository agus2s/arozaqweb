<?php 
const NAMA = 'Ibu Ngantun';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Umi S.</a></li>
			<li><a href="#">Bapak H. Anwari</a></li>
			<li><a href="#">Ibu Istiqomah</a></li>
			<li><a href="#">Bapak Mashud</a></li>
			<li><a href="#">Ibu Ianah</a></li>
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