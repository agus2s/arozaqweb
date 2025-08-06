<?php 
const NAMA = "Bapak Marsudi";
include 'header.php'; 
?>
<main>
	<section>
		<h2><?= NAMA ?></h2>
		<p><?= NAMA ?> anak dari Bapak Ibu Sa'diyah. <?= NAMA ?> memiliki 6 orang anak, yaitu:</p>
		<ol>
			<li>Nurul Hikmah</li>
			<li>Miftahudin</li>
			<li>Mamad</li>
			<li>Ulum Maesaroh</li>
			<li>Yusuf</li>
			<li>Yunus</li>
		</ol>
	</section>
	  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Bapak Jamil] --> C[Ibu Sa'diyah]
	C --> D[<?= NAMA ?>]
    click A "../index.php"
    click B "index.php"
	click C "bani-sadiyah.php"
    </div>
  </section>
</main>
<?php include '../footer.php'; ?>