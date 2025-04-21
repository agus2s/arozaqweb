 <?php 
 const NAMA = 'Ibu Sujiah/Marjiah';
 include 'header.php'; 
 ?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Sarbini</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> bersuami Bapak Sarbini. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="bani-dul-ghoni.php">Ibu 'Ariyah bersuami Bapak Dul Ghoni</a></li>
			<li><a href="bani-ansor.php">Ibu Nafsatun bersuami Bapak Ansor</a></li>
			<li><a href="bani-afinah.php">Ibu 'Afinah</a></li>
			<li><a href="bani-ahmad-sumedi.php">Bapak Ahmad Sumedi</a></li>
			<li><a href="#">Ibu Alfiyah</a></li>
			<li><a href="bani-abdul-qohar.php">Bapak Abdul Qohar beristri Ibu Machamah</a></li>
			<li><a href="#">Ibu Mukronah</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>