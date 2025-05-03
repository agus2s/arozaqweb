<?php 
const NAMA = 'Ibu Hamidah';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Abu Nangim</h2>
		<p><?=NAMA?> anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> bersuami Bapak Abu Nangim. <?=NAMA?> memiliki 9 anak:</p>
		<ol>
			<li><a href="bani-mujahid.php">Bapak Mujahid</a></li>
			<li><a href="bani-mutingah.php">Ibu Mutingah</a></li>
			<li><a href="bani-muhtarom.php">Bapak Muhtarom</a></li>
			<li><a href="bani-mungawam.php">Bapak Mungawam</a></li>
			<li><a href="bani-muhtadi.php">Bapak Muhtadi</a></li>
			<li><a href="bani-fatoni.php">Bapak Fatoni</a></li>
			<li><a href="bani-mutasingah.php">Ibu Mutasingah</a></li>
			<li><a href="bani-muhtasun.php">Bapak Muhtasun</a></li>
			<li>Ibu Khoiriyah</li>
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