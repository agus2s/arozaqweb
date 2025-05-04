<?php 
const NAMA = 'Bapak Tamrin';
include 'header.php'; 	
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Bapak Riyadi</a></li>
			<li><a href="#">Bapak Umar Said</a></li>
			<li><a href="#">Ibu Umarotun</a></li>
			<li><a href="#">Ibu Manisah</a></li>
			<li><a href="#">Ibu Siti Khotimah</a></li>
		</ol>
	</section>
	<section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
      graph TD
      A[Mbah Abdurrozaq] --> B[Bapak Jamil] --> C[<?= NAMA ?>]
      click A "../index.php"
      click B "index.php"
    </div>
  </section>
</main>
<?php include '../footer.php'; ?>