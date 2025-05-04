<?php 
const NAMA = 'Ibu Ngantun';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?= NAMA ?> memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Umi S.</a></li>
			<li><a href="#">Bapak H. Anwari</a></li>
			<li><a href="#">Ibu Istiqomah</a></li>
			<li><a href="#">Bapak Mashud</a></li>
			<li><a href="#">Ibu Ianah</a></li>
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