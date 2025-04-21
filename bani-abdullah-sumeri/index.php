 <?php 
 const NAMA = 'Ibu Satibah';
 include 'header.php'; ?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Ahmad Abdullah Sumeri</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> bersuami Bapak Ahmad Abdullah Sumeri. <?=NAMA?> memiliki 3 orang anak:</p>
		<ol>
			<li><a href="bani-ruslan.php">Ibu Hasanah bersuami Bapak Ruslan</a></li>
			<li><a href="bani-mahali.php">Bapak Mahali</a></li>
			<li><a href="bani-saripah.php">Ibu Saripah</a></li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>