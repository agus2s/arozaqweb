<?php 
	const NAMA = 'Ibu Malehatun';
	include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> bersuami Bapak Arsyad Anwar</h2>
            <p><?=NAMA?> anak dari Bapak H. Hasan Ilyas dan Ibu Rochyati. <?=NAMA?> bersuami Bapak Arsyad Anwar. Baliau memiliki 2 orang anak:</p>
            <ol>
                <li>Arsalan Adi Permana</li>
                <li>Hamas Aisyah Mashelia</li>
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