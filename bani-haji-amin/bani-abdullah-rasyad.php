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
		<h3>Garis Keturunan</h3>
		<div class="mermaid" id="silsilah">flowchart TD
			A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
			B --> C["Bapak Abdullah Rasyad"]
			click A "../index.php"
			click B "index.php"
		</div>
	</section>
	<section>
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid">flowchart LR
			A["Bapak Abdullah Rasyad"]
			A --> B["Ibu Kasriyah"]
			A --> C["Ibu Cublek Tasringah"]
			A --> D["Bapak Nasihin"]
			A --> E["Bapak Nasiran"]
			A --> F["Bapak Nasirin"]
			A --> G["Bapak Nasrudin"]
			click A "index.php"
			click C "bani-tasringah.php"
			click D "bani-nasihin.php"
			click E "#bani-nasiran.php"
			click F "bani-nasirin.php"
			click G "bani-nasrudin.php"
		</div>
</main>
<?php include '../footer.php'; ?>