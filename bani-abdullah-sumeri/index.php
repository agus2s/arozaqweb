<?php
const NAMA = 'Ibu Satibah';
include 'header.php'; 
?>
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
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid">
			flowchart TD;
			A["Mbah Abdurrozaq"] --> B["Ibu Satibah"];
			B --> |bersuami|C["Bapak Abdullah Sumeri"];
			C --> D["Ibu Hasanah"];
			C --> E["Bapak Mahali"];
			C --> F["Ibu Saripah"];
			click A "../index.php";
			click D "bani-ruslan.php";
			click E "bani-mahali.php";
			click F "bani-saripah.php";
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>