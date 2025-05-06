<?php 
const NAMA = 'Bapak Abdullah Rasyad';
include 'header.php'; 
?>
<main>
	<section>    
		<h1><?=NAMA?></h1>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> memiliki 6 anak:</p>
		<ol>
			<li><a href="#">Ibu Kasriyah</a></li>
			<li><a href="bani-tasringah.php">Ibu Cublek Tasringah</a></li>
			<li><a href="bani-nasihin.php">Bapak Nasihin</a></li>
			<li><a href="#bani-nasiran.php">Bapak Nasiran</a></li>
			<li><a href="bani-nasirin.php">Bapak Nasirin</a></li>
			<li><a href="bani-nasrudin.php">Bapak Nasrudin</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">flowchart LR
			A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"] --> C["Bapak Dullah Rasyad"]
			C --> 1["Ibu Kasriyah"]
			C --> 2["Ibu Cublek Tasringah"]
			C --> 3["Bapak Nasihin"]
			C --> 4["Bapak Nasiran"]
			C --> 5["Bapak Nasirin"]
			C --> 6["Bapak Nasrudin"]
			click A "../index.php"
			click B "index.php"
			click 2 "bani-tasringah.php"
			click 3 "bani-nasihin.php"
			click 4 "#bani-nasiran.php"
			click 5 "bani-nasirin.php"
			click 6 "bani-nasrudin.php"
		</div>
</main>
<?php include '../footer.php'; ?>