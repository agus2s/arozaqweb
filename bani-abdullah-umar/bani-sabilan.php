<?php 
const NAMA = 'Ibu Aisyah';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?> bersuami Bapak Sabilan</h2>
        <p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 6 orang anak:</p>
        <ol>
            <li><a href="bani-mujayir.php">Bapak Mujayir/Dahlan</a></li>
			<li><a href="bani-mukhlas.php">Bapak Mukhlas</a></li>
            <li>Bapak Muhajir</li>
            <li>Bapak Mughofir</li>
            <li><a href="bani-muhyidin.php">Bapak Kuat/Muhyidin</a></li>
            <li><a href="bani-mungadin.php">Bapak Mungadin</a></li>
            <li><a href="bani-tulus.php">Bapak Tulus</a></li>
        </ol>
    </section>
    <section>
        <h2>Garis Keturunan</h2>
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