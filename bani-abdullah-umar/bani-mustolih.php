<?php 
const NAMA = 'Bapak Mustolih/Gombloh';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Bahrudin. <?=NAMA?> memiliki 2 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Hanif</li>
            <li>Ibu Siti</li>
        </ol>
    </section>
    <section>
        <h2>Garis Keturunan</h2>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-bahrudin.php">Bapak Bahrudin</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
