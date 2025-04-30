<?php 
const NAMA = 'Ibu Mus';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Imron. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Kudriyah</li>
			<li>Ibu Toifah</li>
			<li>Bapak Syamsul</li>
			<li>Bapak Anam</li>
			<li>Bapak Busro</li>
			<li>Bapak Ngakib</li>
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
