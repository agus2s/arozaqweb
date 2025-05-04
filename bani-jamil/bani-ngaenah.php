<?php 
const NAMA = 'Ibu Ngaenah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA; ?></h2>
		<p><?= NAMA; ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA; ?> memiliki 4 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Siti Ma'muroh</a></li>
			<li><a href="#">Bapak Sugeng</a></li>
			<li><a href="#">Ibu Robingah</a></li>
			<li><a href="#">Bapak Sobirin</a></li>
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