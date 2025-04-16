<?php 
const NAMA = 'Bapak Mungawam';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki anak:</p>
        <ol>
			<li>Bapak Sururudin</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-abu-nangim.php">Ibu Hamidah</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
