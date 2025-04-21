<?php 
const NAMA = 'Bapak Muhammad Jamil';
include 'header.php'; 
?>
<main>    
	<section>
		<h2><?=NAMA?> beristri Ibu Maemunah</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> beristri Ibu Maemunah. <?=NAMA?> memiliki 8 orang anak:</p>
		<ol>
			<li><a href="bani-sadiyah.php">Ibu Sa'diyah</a></li>
			<li><a href="bani-munawir.php">Bapak Munawir</a></li>
			<li><a href="bani-hamami.php">Bapah Hamami</a></li>
			<li>Bapak Khotib</li>
			<li><a href="bani-habib.php">Bapak Habib</a></li>
			<li><a href="bani-ngantun.php">Ibu Ngantun</a></li>
			<li><a href="bani-tamrin.php">Bapak Tamrin</a></li>
			<li><a href="bani-ngaenah.php">Ibu Ngaenah</a></li>
		</ol>
	</section>
	<section id="silsilah">
		<h3>Silsilah Keluarga</h3>
		<div id="output">			
		</div>
</main>
<?php 
const DIAGRAM = 
	'flowchart LR;
	A["Mbah Abdurrozaq"] --> B["Bapak Muhammad Jamil"];
	B --> C["Ibu Sa\'diyah"];
	B --> D[Bapak Munawir];
	B --> E[Bapak Hamami];
	B --> F[Bapak Khotib];
	B --> G[Bapak Habib];
	B --> H[Ibu Ngantun];
	B --> I[Bapak Tamrin];
	B --> J[Ibu Ngaenah];
	click A "../index.php"
	click C "bani-sadiyah.php"
	click D "bani-munawir.php"
	click E "bani-hamami.php"
	click G "bani-habib.php"
	click H "bani-ngantun.php"
	click I "bani-tamrin.php"
	click J "bani-ngaenah.php"
	';
include '../footer.php'; 
?>