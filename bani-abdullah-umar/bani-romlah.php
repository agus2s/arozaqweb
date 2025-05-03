<?php 
const NAMA = 'Ibu Romlah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
		<ol>
			<li>Ibu Ghonimah</li>
			<li><a href="bani-muhdi.php">Bapak Muhdi</a></li>
			<li>Ibu Muntasiroh</li>
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