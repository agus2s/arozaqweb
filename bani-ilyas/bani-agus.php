 <?php
const NAMA = 'Ibu Umi Latifah';
include 'header.php';
?>
<main>
	<section>
		<h2><?= NAMA ?> bersuami Bapak Agus Supriyadi</h2>
		<p><?= NAMA ?> anak dari Bapak H. Hasan Ilyas dan Ibu Rochyati. <?= NAMA ?> bersuami Bapak Agus Supriyadi. Beliau memiliki 3 anak:</p>
		<ol>
			<li>Afiqa Fauziyah Latif</li>
			<li>Arsyila Yumna Fauziyah</li>
			<li>Asyifa Hanna Fauziyah</li>
		</ol>
  </section>
  <section>
			<h3>Silsilah Keluarga <?= NAMA ?></h3>
			<div class="mermaid" id="silsilah">
			graph TD
      A[Mbah Abdurrozaq] --> B[Bapak H. Ilyas]
      B --> C[<?= NAMA ?>]
      click A "../index.php"
      click B "index.php"
		</div>
	</section>
</main>

 <?php include '../footer.php'; ?>
