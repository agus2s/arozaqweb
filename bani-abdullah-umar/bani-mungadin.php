<?php 
const NAMA = 'Bapak Mungadin';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki anak:</p>
        <ol>
			<li>Bapak Arif</li>
        </ol>
    </section>
    <section>
        <h2>Garis Keturunan</h2>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-sabilan.php">Ibu Aisyah</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
