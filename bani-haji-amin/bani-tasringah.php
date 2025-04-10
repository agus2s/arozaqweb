<?php 
    const NAMA ='Ibu Cublek Tasringah';
    include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Bapak Abdullah Rasyad. <?=NAMA?> memiliki 4 anak:</p>
            <ol>			
				<li>Ibu Ruroh</li>
				<li>Bapak Badar</li>
				<li>Ibu Zuhriah</li>
				<li>Ibu Umi</li>
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