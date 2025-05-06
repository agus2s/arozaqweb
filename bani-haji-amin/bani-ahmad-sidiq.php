<?php 
const NAMA = 'Bapak Ahmad Sidiq';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> memiliki 2 anak:</p>
		<ol>
			<li><a href="bani-kasiyah.php">Ibu Kasiyah</a></li>
			<li><a href="bani-kuat.php">Bapak Kuat beristri Ibu Fatimah</a></li>
		</ol>
	</section>
	<section id="silsilah">
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid">flowchart TD;
		A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"];
		B["Bapak H. Amin"] --> C["Bapak Ahmad Sidiq"];
		C --> D["Ibu Kasiyah"];
		C --> E["Bapak Kuat"];
		click A "../index.php";
		click B "index.php";
		click D "bani-kasiyah.php";
		click E "bani-kuat.php";</div>
	</section>
</main>
<?php include '../footer.php'; ?>  