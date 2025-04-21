<?php 
const NAMA = 'Bapak Ulun Nuha';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> beristri Ibu Iin Kurniasih</h2>
            <p><?=NAMA?> anak dari Bapak Abdul Qohar dan Ibu Marchamah. <?=NAMA?> beristri Ibu Iin Kurniasih. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
            <ol>
                <li>Ahsan</li>
				<li>Aqil</li>
				<li>Aqila</li>
				<li>Amrina</li>
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