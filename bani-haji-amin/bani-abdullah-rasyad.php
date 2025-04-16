<?php 
const NAMA = 'Bapak Abdullah Rasyad';
include 'header.php'; 
?>
    <main>
        <section>    
            <h1><?=NAMA?></h1>
            <p><?=NAMA?> anak dari Bapak H. Amin. <?=NAMA?> memiliki 6 anak:</p>
            <ol>
                <li><a href="#">Ibu Kasriyah</a></li>
				<li><a href="bani-tasringah.php">Ibu Cublek Tasringah</a></li>
				<li><a href="bani-nasihin.php">Bapak Nasihin</a></li>
                <li><a href="#bani-nasiran.php">Bapak Nasiran</a></li>
				<li><a href="bani-nasirin.php">Bapak Nasirin</a></li>
				<li><a href="bani-nasrudin.php">Bapak Nasrudin</a></li>
            </ol>
        </section>
        <section>
            <h3>Garis Keturunan</h3>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="index.php">Bapak H. Amin</a></div>
                <div class="line"></div>
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>