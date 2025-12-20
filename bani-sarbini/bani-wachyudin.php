<?php 
const NAMA = 'Ibu Dingayatul Khaeriyah';
include 'header.php'; 
?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak H. Wachyudin</h2>
		<p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> bersuami Bapak H. Wachyudin. <?=NAMA?> memiliki 3 anak, yatu:</p>
		<ol>
			<li>Bapak Muhammad Faishal Danial</li>
			<li>Fakhri Ahmad</li>
			<li>Ahmad Fawaid Al Mubdiu</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
			graph TD
			A[Mbah Abdurrozaq] --> B[Ibu Sujiah/Marjiah] --> C[Bapak KH. Abdul Qohar]
			C --> D[<?= NAMA ?>]
			click A "../index.php"
			click B "index.php" "Bani Sarbini"
			click C "bani-abdul-qohar.php"
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>