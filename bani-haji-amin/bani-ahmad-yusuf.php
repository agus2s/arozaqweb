<?php 
const NAMA = 'Bapak Ahmad Yusuf';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> memiliki 10 anak:</p>
		<ol>
			<li><a href="bani-lapi.php">Bapak/Ibu Lapi</a></li>
			<li><a href="bani-sariyah.php">Ibu Sariyah</a></li>
			<li><a href="bani-sarman.php">Bapak Sarman</a></li>
			<li><a href="bani-sarmiyah.php">Ibu Sarmiyah</a></li>
			<li><a href="bani-sarilah.php">Ibu Sarilah</a></li>
			<li><a href="bani-salimun.php">Bapak Salimun</a></li>
			<li><a href="bani-samingun.php">Bapak Samingun</a></li>
			<li><a href="bani-ludiyah.php">Ibu Ludiyah</a></li>
			<li><a href="bani-surat.php">Bapak Surat</a></li>
			<li><a href="bani-ngantun.php">Ibu Ngantun</a></li>
			<li>Ibu Ngaenah</li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="tree">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak H. Amin</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
	<section id="silsilah">
		<h3>Silsilah Keluarga</h3>
		<div id="output"></div>	
	</section>
</main>
<?php 
const DIAGRAM = 
	'flowchart LR;
		A["Bapak H. Amin"] --> B["Bapak Ahmad Yusuf"];
		B --> C["Bapak/Ibu Lapi"];
		B --> D["Ibu Sariyah"];
		B --> E["Bapak Sarman"];
		B --> F["Ibu Sarmiyah"];
		B --> G["Ibu Sarilah"];
		B --> H["Bapak Salimun"];
		B --> I["Bapak Samingun"];
		B --> J["Ibu Ludiyah"];
		B --> K["Bapak Surat"];
		B --> L["Ibu Ngantun"];
		B --> M["Ibu Ngaenah"];
		click A "index.php";
		click C "bani-lapi.php";
		click D "bani-sariyah.php";
		click E "bani-sarman.php";
		click F "bani-sarmiyah.php";
		click G "bani-sarilah.php";
		click H "bani-salimun.php";
		click I "bani-samingun.php";
		click J "bani-ludiyah.php";
		click K "bani-surat.php";
		click L "bani-ngantun.php";
	';
include '../footer.php'; 
?>