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
		<h3>Kenangan Abadi</h3>
		<ol>
			<li>Bapak H. Ilyas bin Abdurrozaq sekalian</li>
			<li>Ibu Rochyati binti Hasan Muhanan</li>
			<li>Mbah Hasan Muhanan sekalian</li>
			<li>Mbah Sutarno bin Muryadi</li>
			<li>Mbah Ngadisem binti Sanwarid</li>
			<li>Mbah Partotinoyo sekalian</li>
		</ol>
  </section>
  <section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
    		A[Mbah Abdurrozaq] --> B[Bapak H. Ilyas] --> C[<?= NAMA ?>]

    		click A "../index.php"
    		click B "index.php"
		</div>
	</section>
</main>

 <?php include '../footer.php'; ?>
