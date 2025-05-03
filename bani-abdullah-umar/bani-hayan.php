<?php 
const NAMA = 'Bapak Hayan';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?=NAMA?> beristri Ibu Tasmiyah</h1>
		<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> beristri Ibu Tasmiyah. <?=NAMA?> memiliki 7 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-ngapip.php">Bapak Ngapip</a></li>
			<li><a href="bani-misbah.php">Bapak Misbah</a></li>
			<li><a href="bani-irham.php">Bapak Irham</a></li>
			<li><a href="bani-khanifah.php">Ibu Khanifah</a></li>
			<li><a href="bani-amir-fatah.php">Bapak Amir Fatah</a></li>
			<li><a href="bani-nunung.php">Ibu Nunung</a></li>
			<li><a href="bani-mamuri.php">Bapak Ma'muri</a></li>
      <li><a href="bani-mukhsin.php">Ibu Isti</a></li>
      <li><a href="bani-hanafi.php">Hafsoh</a></li>
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