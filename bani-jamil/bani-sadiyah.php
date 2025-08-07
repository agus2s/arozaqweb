<?php 
const NAMA = "Ibu Sa'diyah";
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 3 orang anak, yaitu:</p>
		<ol>
			<li><a href="bani-marsudi.php">Bapak Marsudi</a></li>
			<li><a href="bani-syawal.php">Bapak Syawal</a></li>
			<li><a href="bani-towiyah.php">Ibu Towiyah</a></li>
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