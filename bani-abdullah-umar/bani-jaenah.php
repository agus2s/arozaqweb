<?php 
const NAMA = 'Ibu Jaenah';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?=NAMA?></h1>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 7 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-rohimah.php">Ibu Rohimah</a></li>
			<li><a href="bani-ngatoil.php">Bapak Ngatoil</a></li>
			<li><a href="bani-mungalim.php">Bapak Mungalim</a></li>
			<li><a href="bani-ngasimah.php">Ibu Tarwiyah/Ngasimah</a></li>
			<li>Ibu Inganah</li>
			<li>Bapak Mutowali</li>
			<li>Ibu Khotimah</li>
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