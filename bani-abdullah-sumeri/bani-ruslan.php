<?php 
	include 'header.php'; 
	const NAMA = 'Ibu Hasanah';
?>
    <main>
        <section>
            <h2><?=NAMA?> bersuami Bapak Ruslan</h2>
            <p><?=NAMA?> anak dari Ibu Satibah dan Bapak Ahmad Abdullah Sumeri. <?=NAMA?> bersuami Bapak Ruslan. Beliau memiliki 6 orang anak:</p>
            <ol>
                <li><a href="#">Ibu Surati</a></li>
                <li><a href="#">Ibu Sijum</a></li>
				<li><a href="#">Ibu Rohanah</a></li>
				<li><a href="#">Bapak Rofingun</a></li>
				<li><a href="#">Ibu Hamidah</a></li>
				<li><a href="#">Ibu Tobingah</a></li>
            </ol>
        </section>
		<section>
		<h2>Garis Keturunan</h2>
		<div class="tree">
			<div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
			<div class="line"></div>
			<div class="node"><a href="index.php">Ibu Satibah</a></div>
			<div class="line"></div>
			<div class="node"><?=NAMA?></div>
		</div>
	</section>
    </main>
<?php include '../footer.php'; ?>