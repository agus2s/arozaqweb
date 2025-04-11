<?php 
const NAMA = 'Bapak Bahrudin';
include 'header.php'; 
?>  

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li>Ibu Mudriyah</li>
			<li><a href="bani-rubangi.php">Bapak Rubangi</a></li>
			<li><a href="bani-mustolih.php">Bapak Mustolih/Gombloh</a></li>
			<li><a href="bani-muslimin.php">Bapak Muslimin</a></li>
			<li><a href="bani-mus-bahrudin.php">Bapak/Ibu Mus</a></li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Ibu Mariyah</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>