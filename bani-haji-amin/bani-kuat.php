<?php 
const NAMA ='Bapak Kuat';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> beristri Ibu Fatimah</h2>
		<p><?=NAMA?> anak dari Bapak Ahmad Sidiq. <?=NAMA?> beristri Ibu Fatimah. <?=NAMA?> memiliki 6 anak:</p>
		<ol>
			<li>Bapak/Ibu Rus</li>
			<li>Bapak Soiman</li>
			<li>Bapak Soleman</li>
			<li>Ibu Toimah</li>
			<li>Ibu Hotimah</li>
			<li>Bapak Hartono</li>
		</ol>
	</section>
	<section>
		<h2>Garis Keturunan</h2>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="./index.php">Bapak H. Amin</a></div>
			<div class="line"></div>
			<div class="node"><a href="./bani-ahmad-sidiq.php">Bapak Ahmad Sidiq</a></div>
			<div class="line"></div>                
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>  