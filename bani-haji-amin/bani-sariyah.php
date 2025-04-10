<?php 
    const NAMA ='Ibu Sariyah';
    include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Bapak Ahmad Yusuf. <?=NAMA?> memiliki 4 anak:</p>
            <ol>
				<li>Bapak Sugeng</li>
                <li>Bapak/Ibu Ris</li>
                <li>Bapak Waluyo</li>
				<li>Bapak Untung</li>
            </ol>
        </section>
        <section>
            <h2>Garis Keturunan</h2>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="./index.php">Bapak H. Amin</a></div>
                <div class="line"></div>
                <div class="node"><a href="./bani-ahmad-yusuf.php">Bapak Ahmad Yusuf</a></div>
                <div class="line"></div>                
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>  