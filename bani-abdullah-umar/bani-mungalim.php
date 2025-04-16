<?php 
const NAMA = 'Bapak Mungalim';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Jaenah. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Maryamah</li>
			<li>Ibu Siti Mariah</li>
			<li>Ibu Umul Ma'muroh</li>
			<li>Ibu Umi Umaroh</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-jaenah.php">Ibu Jaenah</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
