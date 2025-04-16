<?php 
const NAMA = 'Bapak Muhtadi';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 8 orang anak, yaitu:</p>
        <ol>
			<li>Bapak Fatkhul Humam</li>
			<li>Ibu Khimayatul Karomah</li>
			<li>Ibu Mutamimah</li>
			<li>Bapak Ngatourrohman</li>
			<li>Bapak Hadadul Ahkam</li>
			<li>Ibu Masruhah</li>
			<li>Ibu Mei Muadibah</li>
			<li>Bapak Syahrul</li>
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
