<?php 
const NAMA = 'Ibu Mariyah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Abdullah Umar</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> bersuami Bapak Abdullah Umar. <?=NAMA?> memiliki 8 orang anak:</p>
		<ol>
			<li><a href="bani-sabilan.php">Ibu Aisyah bersuami Bapak Sabilan</a></li>
			<li><a href="bani-imron.php">Bapak Imron</a></li>
			<li><a href="bani-bahrudin.php">Bapak Bahrudin</a></li>
			<li><a href="bani-abu-nangim.php">Ibu Hamidah bersuami Bapak Abu Nangim</a></li>
			<li><a href="bani-romlah.php">Ibu Romlah</a></li>
			<li><a href="bani-jaenah.php">Ibu Jaenah</a></li>
			<li><a href="bani-hamdani.php">Bapak Hamdani</a></li>
			<li><a href="bani-hayan.php">Bapak Hayan beristri Ibu Tasmiyah</a></li>                
		</ol>
	</section>
	<section id="silsilah">
		<h3>Silsilah Keluarga</h3>
		<div id="output"></div>
	</section>
</main>
<?php 
const DIAGRAM = 
	'flowchart LR; 
		A[Mbah Abdurrozaq] --> B[Ibu Mariyah]; 
		B --> C[Ibu Aisyah]; 
		B --> D[Bapak Imron]; 
		B --> E[Bapak Bahrudin]; 
		B --> F[Ibu Hamidah]; 
		B --> G[Ibu Romlah]; 
		B --> H[Ibu Jaenah]; 
		B --> I[Bapak Hamdani]; 
		B --> J[Bapak Hayan]
		click A "../index.php";
		click C "bani-sabilan.php";
		click E "bani-bahrudin.php";
		click F "bani-abu-nangim.php";
		click G "bani-romlah.php";
		click H "bani-jaenah.php";
		click I "bani-hamdani.php";
		click J "bani-hayan.php";
		';
include '../footer.php'; 
?>