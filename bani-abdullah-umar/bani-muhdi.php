<?php 
define ('NAMA', 'Bapak Muhdi');
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Romlah. <?=NAMA?> memiliki 3 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Abdul Karim</li>
			<li>Bapak Miftahurrohman</li>
			<li>Bapak Mustofa</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-romlah.php">Ibu Romlah</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
