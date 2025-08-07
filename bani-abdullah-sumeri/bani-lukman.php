<?php 
const NAMA = 'Bapak H. Lukman';
include 'header.php'; 
?>

<main>
	<section>
		<h2><?=NAMA?></h2>
		<p><?=NAMA?> anak dari Ibu Saripah. <?=NAMA?> memiliki 1 orang anak:</p>
		<ol>
			<li>Vivi</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
      flowchart TD;
      A["Mbah Abdurrozaq"] --> B["Ibu Satibah"] --> C[Ibu Saripah];
      C --> D[<?= NAMA ?>];
      click A "../index.php";
      click B "index.php" "Bani Abdullah Sumeri"
	  click C "bani-saripah.php"
    </div>
	</section>
</main>

<?php include '../footer.php'; ?>