<?php 
const NAMA = 'Bapak Muhtamil';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Imron. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Amanah</li>
			<li>Ibu Fitroh</li>
			<li>Bapak Ahmad</li>
			<li>Bapak Rohim</li>
			<li>Ibu Kholifah</li>			
        </ol>
    </section>
    <section>
        <h2>Garis Keturunan</h2>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-imron.php">Bapak Imron</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  
