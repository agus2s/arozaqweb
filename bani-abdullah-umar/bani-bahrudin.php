<?php 
const NAMA = 'Bapak Bahrudin';
include 'header.php'; 
?>  

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li>Ibu Mudriyah</li>
			<li><a href="bani-rubangi.php">Bapak Rubangi</a></li>
			<li><a href="bani-mustolih.php">Bapak Mustolih/Gombloh</a></li>
			<li><a href="bani-muslimin.php">Bapak Muslimin</a></li>
			<li><a href="bani-mus-bahrudin.php">Bapak/Ibu Mus</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
        graph TD
        A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[<?= NAMA ?>]
        click A "../index.php" "Bapak K.H. Abdurrozaq"
        click B "index.php" "Bani Abdullah Umar"
        </div>
	</section>
</main>

<?php include '../footer.php'; ?>