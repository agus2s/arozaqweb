<?php 
define('NAMA', 'Bapak Ahmad Yusuf');
include 'header.php'; 
?>

<main>
	<section>
		<h2>Bapak Ahmad Yusuf</h2>
		<p>Bapak Ahmad Yusuf anak dari Bapak H. Amin. Beliau memiliki 10 anak:</p>
		<ol>
			<li><a href="bani-lapi.php">Bapak/Ibu Lapi</a></li>
			<li><a href="bani-sariyah.php">Ibu Sariyah</a></li>
			<li><a href="bani-sarman.php">Bapak Sarman</a></li>
			<li><a href="bani-sarmiyah.php">Ibu Sarmiyah</a></li>
			<li><a href="bani-sarilah.php">Ibu Sarilah</a></li>
			<li><a href="bani-salimun.php">Bapak Salimun</a></li>
			<li><a href="bani-samingun.php">Bapak Samingun</a></li>
			<li><a href="bani-ludiyah.php">Ibu Ludiyah</a></li>
			<li><a href="bani-surat.php">Bapak Surat</a></li>
			<li><a href="bani-ngantun.php">Ibu Ngantun</a></li>
			<li>Ibu Ngaenah</li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="tree" id="silsilah">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Bapak H. Amin</a></div>
			<div class="line"></div>
			<div class="node">Bapak Ahmad Yusuf</div>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>