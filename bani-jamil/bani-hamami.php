<?php 
const NAMA = 'Bapak Hamami';
include 'header.php'; 
?>
<main>
	<section>
		<h1><?= NAMA; ?></h1>
		<p><?= NAMA; ?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. Beliau memiliki 5 orang anak, yaitu:</p>
		<ol>
			<li><a href="#">Ibu Kuni</a></li>
			<li><a href="#">Bapak Taufik</a></li>
			<li><a href="#">Ibu Mutoharoh</a></li>
			<li><a href="#">Ibu Qoni'ah</a></li>
			<li><a href="#">Bapak Zen</a></li>
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