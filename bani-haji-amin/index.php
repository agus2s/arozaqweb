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
	<section id="silsilah">
		<h3>Silsilah Keluarga</h3>
		<div id="output"></div>
</main>
<?php 
const DIAGRAM =
'flowchart LR
		A[Mbah Abdurrozaq]
		A --> B[Bapak H. Amin]
		B --> C[Bapak Ahmad Sidiq]
		B --> D[Bapak Ahmad Yusuf]
		B --> E[Bapak Abdullah Rasyad]
		B --> F[Bapak Mustagin]
		B --> G[Ibu Saridem]
		B --> H[Bapak Muhammad]
		B --> I[Bapak/Ibu Tumbu]
		B --> J[Bapak Slamet]
		B --> K[Bapak Kahar]
		click A "../index.php"
		click C "bani-ahmad-sidiq.php"
		click D "bani-ahmad-yusuf.php"
		click E "bani-abdullah-rasyad.php"
		click G "bani-mustakim.php"
		click H "bani-muhammad.php"
';
include '../footer.php'; 
?>