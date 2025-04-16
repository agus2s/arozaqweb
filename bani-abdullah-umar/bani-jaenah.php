<?php 
const NAMA = 'Ibu Jaenah';
include 'header.php'; 
?>
	<main>
		<section>
			<h1><?=NAMA?></h1>
			<p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 7 orang anak, yaitu:</p>
			<ol>
				<li><a href="bani-rohimah.php">Ibu Rohimah</a></li>
				<li><a href="bani-ngatoil.php">Bapak Ngatoil</a></li>
				<li><a href="bani-mungalim.php">Bapak Mungalim</a></li>
                <li><a href="bani-ngasimah.php">Ibu Tarwiyah/Ngasimah</a></li>
                <li>Ibu Inganah</li>
                <li>Bapak Mutowali</li>
                <li>Ibu Khotimah</li>
			</ol>
		</section>
		<section>
            <h3>Garis Keturunan</h3>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="index.php">Ibu Mariyah</a></div>
                <div class="line"></div>
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
	</main>
<?php include '../footer.php'; ?>