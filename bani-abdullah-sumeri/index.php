 <?php 
 const NAMA = 'Ibu Satibah';
 include 'header.php'; ?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Ahmad Abdullah Sumeri</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> bersuami Bapak Ahmad Abdullah Sumeri. <?=NAMA?> memiliki 3 orang anak:</p>
		<ol>
			<li><a href="bani-ruslan.php">Ibu Hasanah bersuami Bapak Ruslan</a></li>
			<li><a href="bani-mahali.php">Bapak Mahali</a></li>
			<li><a href="bani-saripah.php">Ibu Saripah</a></li>
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
		A["Mbah Abdurrozaq"] --> B["Ibu Satibah"];
		B --> C["Ibu Hasanah"];
		B --> D["Bapak Mahali"];
		B --> E["Ibu Saripah"];
		click A "../index.php";
		click C "bani-ruslan.php";
		click D "bani-mahali.php";
		click E "bani-saripah.php";
	';
include '../footer.php'; 
?>