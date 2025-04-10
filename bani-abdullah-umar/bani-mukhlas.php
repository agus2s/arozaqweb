<?php 
const NAMA = 'Bapak Mukhlas';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. <?=NAMA?> memiliki 8 orang anak:</p>
        <ol>
			<li>Bapak Muhayat</li>
			<li>Bapak Amin</li>
			<li>Ibu Ngazimah</li>
			<li>Ibu Imroah</li>
			<li>Ibu Azlimah</li>
			<li>Bapak Kholil</li>
			<li>Ibu Khodimah</li>
			<li>Ibu Munjiroh</li>
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
