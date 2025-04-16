  <?php
	define('NAMA','Ibu Umi Latifah');
    include 'header.php';
  ?>
  <main>
    <section>
        <h2><?= NAMA; ?> bersuami Bapak Agus Supriyadi</h2>
        <p><?= NAMA; ?> anak dari Bapak H. Hasan Ilyas dan Ibu Rochyati. <?= NAMA; ?> bersuami Bapak Agus Supriyadi. Beliau memiliki 3 anak:</p>
        <ol>
            <li>Afiqa Fauziyah Latif</li>
            <li>Arsyila Yumna Fauziyah</li>
            <li>Asyifa Hanna Fauziyah</li>
        </ol>
    </section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak H. Hasan Ilyas</a></div>
			<div class="line"></div>
			<div class="node"><?= NAMA; ?></div>
		</div>
	</section>
  </main>
  <?php include '../footer.php'; ?>
