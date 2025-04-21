<?php 
const NAMA = 'Ibu Kharisatun Uwliyah';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> bersuami Bapak Thoifur</h2>
            <p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> bersuami Bapak Thoifur. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
            <ol>
                <li>Nabih</li>
				<li>Nabhan</li>
				<li>Aniq</li>
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