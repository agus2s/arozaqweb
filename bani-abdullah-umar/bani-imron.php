<?php 
const NAMA = 'Bapak Imron';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 11 anak:</p>
            <ol>
                <li><a href="bani-sangadah.php">Ibu Sangadah</a></li>
                <li>Ibu Baryatun</li>
                <li><a href="bani-mudzakir.php">Bapak Mudzakir</a></li>
                <li><a href="bani-mus.php">Bapak/Ibu Mus</a></li>
                <li><a href="bani-sapiyah.php">Ibu Sapiyah</a></li>
                <li><a href="bani-taslimah.php">Ibu Taslimah</a></li>
                <li>Bapak Muhaimin</li>
                <li><a href="bani-muhtamil.php">Bapak Muhtamil</a></li>
                <li><a href="bani-munadir.php">Bapak H. Munadir</a></li>
				<li><a href="bani-muhtalim.php">Bapak Muhtalim</a></li>
				<li><a href="bani-yatimah.php">Ibu Yatimah</a></li>
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
</body>
</html>