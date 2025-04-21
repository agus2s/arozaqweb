<?php 
const NAMA = 'Bapak Hamami';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?= NAMA; ?></h1>
		<p><?= NAMA; ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. Beliau memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Kuni</a></li>
			<li><a href="#">Bapak Taufik</a></li>
			<li><a href="#">Ibu Mutoharoh</a></li>
			<li><a href="#">Ibu Qoni'ah</a></li>
			<li><a href="#">Bapak Zen</a></li>
		</ol>
	<section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak Muhammad Jamil</a></div>
			<div class="line"></div>
			<div class="node"><?= NAMA; ?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>