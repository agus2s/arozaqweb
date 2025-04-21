<?php 
const NAMA = 'Bapak H. Mun\'imul Huda';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> beristri Ibu Hj. Munjayanah</h2>
            <p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> beristri Ibu Hj. Munjayanah. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
            <ol>
                <li>Husna</li>
				<li>Naila</li>
				<li>Idris</li>
				<li>Najihah</li>
            </ol>
        </section>
        <section>
            <h3>Garis Keturunan</h3>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="index.php">Ibu Sujiah/Marjiah</a></div>
				<div class="line"></div>
				<div class="node"><a href="bani-abdul-qohar.php">Bapak Abdul Qohar</a></div>
                <div class="line"></div>
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>