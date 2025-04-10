<?php 
const NAMA = 'Bapak Mujayir/Dahlan';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibu Aisyah dan Bapak Sabilan. Beliau memiliki 8 orang anak:</p>
        <ol>
            <li>Bapak Ma'sum</li>
			<li>Ibu Musfiroh</li>
			<li>Bapak Makin</li>
			<li>Ibu Wasilah</li>
			<li>Bapak Mukti</li>
			<li>Bapak Miftah</li>
			<li>Bapak Lutfi</li>
			<li>Ibu Khotijah</li>            
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
