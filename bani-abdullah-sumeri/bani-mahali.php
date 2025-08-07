<?php 
const NAMA = 'Bapak Mahali';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Satibah dan Bapak Ahmad Abdullah Sumeri. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li>Bapak/Ibu Mur</li>
			<li>Bapak Muis</li>
			<li>Bapak Alam</li>
			<li>Bapak Hamid</li>
			<li>Bapak/Ibu Nur</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
      flowchart TD;
      A["Mbah Abdurrozaq"] --> B["Ibu Satibah"];
      B --> C[<?= NAMA ?>];
      click A "../index.php";
      click B "index.php" "Bani Abdullah Sumeri"
    </div>
	</section>
</main>

<?php include '../footer.php'; ?>