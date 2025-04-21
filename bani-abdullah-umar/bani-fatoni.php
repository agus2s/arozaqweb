<?php 
define const NAMA = 'Bapak Fatoni';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Hanan</li>
			<li>Bapak Itmam</li>
			<li>Bapak Nasrullah</li>
			<li>Ibu Ulin Ni'mah</li>
			<li>Bapak Najihul Umam</li>
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
