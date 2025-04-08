<?php 
	include 'header.php'; 
	const NAMA = 'Ibu Ngaenah';
?>
	<main>
		<section>
			<h2><?= NAMA; ?></h2>
			<p><?= NAMA; ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA; ?> memiliki 4 orang anak, yaitu:</p>
			<ol>
				<li><a href="#">Ibu Siti Ma'muroh</a></li>
				<li><a href="#">Bapak Sugeng</a></li>
				<li><a href="#">Ibu Robingah</a></li>
				<li><a href="#">Bapak Sobirin</a></li>
			</ol>
		<section>
		<section>
			<h2>Garis Keturunan</h2>
			<div class="tree">
				<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
				<div class="line"></div>
				<div class="node"><a href="index.php">Bapak Muhammad Jamil</a></div>
				<div class="line"></div>
				<div class="node"><?= NAMA; ?></div>
				
			</div>
		</section>
	</main>
<?php include '../footer.php'; ?>