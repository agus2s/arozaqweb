<?php 
const NAMA = 'Ibu Dingayatul Khoeriyah';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> bersuami Bapak H. Wachyudin</h2>
            <p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> bersuami Bapak H. Wachyudin. <?=NAMA?> memiliki 3 anak, yatu:</p>
            <ol>
                <li>Bapak Faishal</li>
                <li>Fahri</li>
                <li>Fawaid</li>
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