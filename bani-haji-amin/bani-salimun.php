<?php 
    const NAMA ='Bapak Salimun';
    include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?></h2>
            <p><?=NAMA?> anak dari Bapak Ahmad Yusuf. <?=NAMA?> memiliki 3 anak:</p>
            <ol>			
				<li>Bapak Ahmad Dini Lutfi</li>   
				<li>Ibu Kholifatul</li>   
				<li>Ibu Naeli Amalina</li>   
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