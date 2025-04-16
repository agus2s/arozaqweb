<?php 
const NAMA = 'Ibu Soimah/Jibrog';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Bapak Hamdani. <?=NAMA?> memiliki 4 orang anak, yaitu:</p>
        <ol>
			<li>Fatimah</li>
			<li>Gipsi</li>
			<li>Misko</li>
			<li>Halim</li>
		
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Ibu Mariyah</a></div>
            <div class="line"></div>
			<div class="node"><a href="bani-hamdani.php">Bapak Hamdani</a></div>
            <div class="line"></div>			
            <div class="node"><?=NAMA?></div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>  
