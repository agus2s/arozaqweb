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
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">flowchart LR;
  	A["Mbah Abdurrozaq"] --> B["Bapak Jamil"];
    B --> 1["Ibu Sa\'diyah"];
    B --> 2[Bapak Munawir];
    B --> 3[Bapak Hamami];
    B --> 4[Bapak Khotib];
    B --> 5[Bapak Habib];
    B --> 6[Ibu Ngantun];
    B --> 7[Bapak Tamrin];
    B --> 8[Ibu Ngaenah];
    click A "../index.php";
    click 1 "bani-sadiyah.php"
    click 2 "bani-munawir.php"
    click 3 "bani-hamami.php"
    click 5 "bani-habib.php"
    click 6 "bani-ngantun.php"
    click 7 "bani-tamrin.php"
    click 8J "bani-ngaenah.php"
    </div>
</main>
<?php include '../footer.php'; ?>