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
	<section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid" id="silsilah">
		flowchart LR;
		A[Mbah Abdurrozaq] --> B[Ibu Mariyah];
		B --> 1[Ibu Aisyah]; 
		B --> 2[Bapak Imron]; 
		B --> 3[Bapak Bahrudin]; 
		B --> 4[Ibu Hamidah]; 
		B --> 5[Ibu Romlah]; 
		B --> 6[Ibu Jaenah]; 
		B --> 7[Bapak Hamdani]; 
		B --> 8[Bapak Hayan]

		click A "../index.php";
		click 1 "bani-sabilan.php";
		click 2 "bani-imron.php";
		click 3 "bani-bahrudin.php";
		click 4 "bani-abu-nangim.php";
		click 5 "bani-romlah.php";
		click 6 "bani-jaenah.php";
		click 7 "bani-hamdani.php";
		click 8 "bani-hayan.php"
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>