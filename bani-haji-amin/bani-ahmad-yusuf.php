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
		<div class="mermaid" id="silsilah">flowchart LR;
		A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"];
		B --> C["Bapak Ahmad Yusuf"];	
		C --> 1[Bapak/Ibu Lapi];
		C --> 2[Ibu Sariyah];
		C --> 3[Bapak Sarman];
		C --> 4[Ibu Sarmiyah];
		C --> 5[Ibu Sarilah];
		C --> 6[Bapak Salimun];
		C --> 7[Bapak Samingun];
		C --> 8[Ibu Ludiyah];
		C --> 9[Bapak Surat];
		C --> 10[Ibu Ngantun];
		C --> 11[Ibu Ngaenah];

		click A "../index.php";
		click B "index.php";
		click 1 "bani-lapi.php" "Bapak/Ibu Lapi";
		click 2 "bani-sariyah.php" "Ibu Sariyah";
		click 3 "bani-sarman.php" "Bapak Sarman";
		click 4 "bani-sarmiyah.php" "Ibu Sarmiyah";
		click 5 "bani-sarilah.php" "Ibu Sarilah";
		click 6 "bani-salimun.php" "Bapak Salimun";
		click 7 "bani-samingun.php" "Bapak Samingun";
		click 8 "bani-ludiyah.php" "Ibu Ludiyah";
		click 9 "bani-surat.php" "Bapak Surat";
		click 10 "bani-ngantun.php" "Ibu Ngantun";
		click 11 "#" "Ibu Ngaenah";
	</div>	
	</section>
</main>
<?php include '../footer.php'; ?>