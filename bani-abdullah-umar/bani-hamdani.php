<?php 
const NAMA = 'Bapak Hamdani';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?=NAMA?></h1>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-mustahiroh.php">Ibu Mustahiroh</a></li>
			<li><a href="bani-soimah.php">Ibu Soimah/Jibrog</a></li>
			<li>Bapak M. Hendar</li>
			<li>Bapak Tasdik</li>
			<li><a href="bani-syifa.php">Ibu Syifa</a></li>
		</ol>
	</section>
	<section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[<?= NAMA ?>]
        
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    </div>
  </section>
</main>
<?php include '../footer.php'; ?>