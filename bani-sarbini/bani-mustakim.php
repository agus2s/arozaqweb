<?php 
const NAMA = 'Ibu Hj. Natijatul Muna';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> bersuami Bapak H. Mustakim</h2>
            <p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> bersuami Bapak H. Mustakim. <?=NAMA?> memiliki anak:</p>
            <ol>
                <li>Niswatu Sa'ida Amania</li>
            </ol>
        </section>
        <section>
            <h2>Garis Keturunan</h2>
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