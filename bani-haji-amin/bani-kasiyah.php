<?php 
    const NAMA ='Ibu Kasiyah';
    include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Bapak Ahmad Sidiq. <?=NAMA?> memiliki 5 anak:</p>
            <ol>
                <li>Bapak Ma'sum</li>
                <li>Bapak/Ibu Sirob</li>
                <li>Bapak Lisin</li>
                <li>Bapak Markham</li>
                <li>Ibu Una</li>
            </ol>
        </section>
        <section>
            <h2>Garis Keturunan</h2>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="./index.php">Bapak H. Amin</a></div>
                <div class="line"></div>
                <div class="node"><a href="./bani-ahmad-sidiq.php">Bapak Ahmad Sidiq</a></div>
                <div class="line"></div>                
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>  