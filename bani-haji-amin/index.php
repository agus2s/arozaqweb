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
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid" id="silsilah">
		flowchart LR
		A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
		B --> 1[Bapak Ahmad Sidiq]
		B --> 2[Bapak Ahmad Yusuf]
		B --> 3[Bapak Abdullah Rasyad]
		B --> 4[Bapak Mustagin]
		B --> 5[Ibu Saridem]
		B --> 6[Bapak Muhammad]
		B --> 7[Bapak/Ibu Tumbu]
		B --> 8[Bapak Slamet]
		B --> 9[Bapak Kahar]

		click A "../index.php"
		click B "index.php"
		click A "../index.php"
		click 1 "bani-ahmad-sidiq.php" "Bapak Ahmad Sidiq"
		click 2 "bani-ahmad-yusuf.php" "Bapak Ahmad Yusuf"
		click 3 "bani-abdullah-rasyad.php" "Bapak Abdullah Rasyad"
		click 5 "bani-mustakim.php" "Ibu Saridem"
		click 6 "bani-muhammad.php" "Bapak Muhammad"
	</div>
</main>
<?php include '../footer.php'; ?>