<?php 
const NAMA = 'Ibu Saridem';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Mustakim</h2>
		<p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> bersuami Bapak Mustakim. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="#">Ibu Mustanginah</a></li>
			<li><a href="#">Ibu Tunjiyah</a></li>
			<li><a href="#">Ibu Sujiah</a></li>
			<li><a href="#">Ibu Turiyah</a></li>
			<li><a href="#">Ibu Solihah</a></li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid" id="silsilah">
			flowchart TD
				A["Mbah Abdurrozaq"] --> B["Bapak H. Amin"]
				B --> C["Ibu Saridem"]
				click A "../index.php"
				click B "index.php"
		</div>
	</section>
	<section>
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid">
			flowchart TD
				A["Ibu Saridem"] --> B["Ibu Mustanginah"] & C["Ibu Tunjiyah"] & D["Ibu Sujiah"]
				A --> E["Ibu Turiyah"] & F["Ibu Solihah"]
				G["Bapak Mustakim"] --> B & C & D & E & F
		</div>
	</section>
</main>

<?php include '../footer.php'; ?>