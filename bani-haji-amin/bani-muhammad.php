<?php 
const NAMA = 'Bapak Muhammad';
include 'header.php'; 
?>
<main>
    <section>
        <h1><?=NAMA?></h1>
        <p><?=NAMA?> adalah anak Bapak Haji Amin. <?=NAMA?> memiliki 5 orang anak, yaitu:</p>
        <ol>
            <li><a href="#">Bapak Mistam</a></li>
            <li><a href="#">Ibu Sarwiyah</a></li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="tree" id="silsilah">
            <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
            <div class="line"></div>
            <div class="node"><a href="index.php">Bapak H. Amin</a></div>
            <div class="line"></div>
            <div class="node"><?=NAMA?></div>
    </section>
</main>
<?php include '../footer.php'; ?>