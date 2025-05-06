<?php 
const NAMA = 'Bapak Abdul Qohar';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> beristri Ibu Marchamah</h2>
		<p><?=NAMA?> anak dari Ibu Sujiah/Ibu Marjiah dan Bapak Sarbini. <?=NAMA?> beristri Ibu Marchamah. <?=NAMA?> memiliki 5 anak:</p>
		<ol>
			<li><a href="bani-wachyudin.php">Ibu Dingayatul Khoeriyah bersuami Bapak Wachyudin</a></li>
			<li><a href="bani-mustakim.php">Ibu Natijatul Muna bersuami Bapak H. Mustakim</a></li>
			<li><a href="bani-huda.php">Bapak Mun'imul Huda beristri Ibu Munjayanah</a></li>
			<li><a href="bani-toifur.php">Ibu Kharisatun Uwliyah bersuami Bapak Thoifur</a></li>
			<li><a href="bani-nuha.php">Bapak Ulun Nuha beristri Ibu Iin Kurniasih</a></li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>