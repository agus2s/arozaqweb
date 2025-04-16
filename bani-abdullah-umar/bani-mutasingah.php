<?php 
define ('NAMA', 'Ibu Mutasingah');
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Nida</li>
			<li>Ibu Marjuni</li>
			<li>Ibu Ikoh</li>
			<li>Ibu Lina</li>
			<li>Bapak Ngafifudin</li>
			<li>Bapak Salim</li>
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
