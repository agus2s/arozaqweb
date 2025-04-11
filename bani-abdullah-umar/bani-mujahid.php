<?php 
const NAMA = 'Bapak Mujahid';
include 'header.php'; 
?>

<main>
    <section>
        <h2><?=NAMA?></h2>
        <p><?=NAMA?> anak dari Ibnu Hamidah. <?=NAMA?> memiliki 8 orang anak, yaitu:</p>
        <ol>
			<li>Ibu Laelatul Ngidyah</li>
            <li>Bapak Fauzan</li>
            <li>Bapak Mustofa</li>
            <li>Ibu Ghoniyah</li>            
            <li>Bapak Murtadho</li>
            <li>Ibu Murtofingah</li>
            <li>Bapak Muntaha</li>
            <li>Bapak Iskandar</li>
        </ol>
    </section>
    <section>
        <h2>Garis Keturunan</h2>
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
