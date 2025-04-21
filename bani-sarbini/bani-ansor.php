<?php 
cosnt NAMA = 'Ibu Nafsatun';
include 'header.php'; 
?>
	
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Ansor</h2>
		<p><?=NAMA?> anak dari Ibu Sujiah/Marjiah dan Bapak Sarbini. <?=NAMA?> bersuami Bapak Ansor. <?=NAMA?> memiliki 5 anak:</p>
		<ol>
			<li><a href="#">Ibu Lembut/Ngafiyah</a></li>
			<li><a href="#">Bapak Sodik</a></li>
			<li><a href="#">Bapak Basyuni</a></li>
			<li><a href="#">Bapak Ahmad Mauludin</a></li>
			<li><a href="#">Ibu Rohmah</a></li>
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