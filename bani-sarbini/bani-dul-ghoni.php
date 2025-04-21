<?php 
const NAMA = 'Ibu \'Ariyah';
include 'header.php'; 
?>

<main>
	<section>
		<h1><?=NAMA?> bersuami Bapak Dul Ghoni</h1>
		<p><?=NAMA?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. <?=NAMA?> bersuami Bapak Dul Ghoni. <?=NAMA?> memiliki 6 anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Badriyah</a></li>
			<li><a href="#">Bapak H. Zubaidi</a></li>
			<li><a href="#">Ibu Tarhimah</a></li>
			<li><a href="#">Bapak Ngafisudin/Bawuk</a></li>
			<li><a href="#">Ibu Makromah</a></li>
			<li><a href="#">Bapak Aminudin</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Ibu Sujiah/Marjiah</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>