<?php 
    const NAMA ='Bapak Nasirin';
    include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Bapak Abdullah Rasyad. <?=NAMA?> memiliki 4 anak:</p>
            <ol>			
				<li>Bapak/Ibu Nur</li>
				<li>Bapak Ohib</li>
				<li>Bapak/Ibu Ta'ul</li>
				<li>Ibu IIf</li>
			</ol>
        </section>
        <section>
            <h2>Garis Keturunan</h2>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="./index.php">Bapak H. Amin</a></div>
                <div class="line"></div>
                <div class="node"><a href="./bani-abdullah-rasyad.php">Bapak Abdullah Rasyad</a></div>
                <div class="line"></div>                
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>  