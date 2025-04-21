<?php 
const NAMA = 'Bapak H. Amin';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> beristri Ibu Satariyah</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> beristri Ibu Satariyah. <?=NAMA?> memiliki 9 orang anak:</p>
		<ol>
			<li><a href="bani-ahmad-sidiq.php">Bapak Ahmad Sidiq</a></li>
			<li><a href="bani-ahmad-yusuf.php">Bapak Ahmad Yusuf</a></li>
			<li><a href="bani-abdullah-rasyad.php">Bapak Abdullah Rasyad</a></li>
			<li>Bapak Mustagin</li>
			<li><a href="bani-mustakim.php">Ibu Saridem bersuami Bapak Mustakim</a></li>
			<li><a href="bani-muhammad.php">Bapak Muhammad</a></li>
			<li>Bapak/Ibu Tumbu</li>
			<li>Bapak Slamet</li>
			<li>Bapak Kahar</li>
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