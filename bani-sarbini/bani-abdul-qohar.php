<?php 
const NAMA = 'Bapak Abdul Qohar';
include 'header.php'; 
?>
    <main>
        <section>
            <h2><?=NAMA?> beristri Ibu Marchamah</h2>
            <p><?=NAMA?> anak dari Ibu Sujiah/Ibu Marjiah dan Bapak Sarbini. <?=NAMA?> Abdul Qohar beristri Ibu Marchamah. <?=NAMA?> memiliki 5 anak:</p>
            <ol>
                <li><a href="bani-wachyudin.php">Ibu Dingayatul Khoeriyah bersuami Bapak Wachyudin</a></li>
                <li><a href="bani-mustakim.php">Ibu Natijatul Muna bersuami Bapak H. Mustakim</a></li>
                <li><a href="bani-huda.php">Bapak Mun'imul Huda beristri Ibu Munjayanah</a></li>
                <li><a href="bani-toifur.php">Ibu Kharisatun Uwliyah bersuami Bapak Thoifur</a></li>
                <li><a href="#">Bapak Ulun Nuha beristri Ibu Iin Kurniasih</a></li>
            </ol>
        </section>
        <section>
            <h2>Garis Keturunan</h2>
            <div class="tree" id="silsilah">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><a href="index.php">Ibu Sujiah/Marjiah</a></div>
                <div class="line"></div>
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
    </main>
<?php include '../footer.php'; ?>