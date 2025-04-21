<?php 
const NAMA = 'Bapak Hasan Ilyas';
include 'header.php'; 
?>
  
<main>
    <section>
        <h2><?=NAMA?> beristri Ibu Rochyati</h2>
        <p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> tinggal di Desa Sidamulya Kecamatan Sidareja. <?=NAMA?> beristri Ibu Rochyati. <?=NAMA?> memiliki 3 orang anak:</p>
        <ol>
            <li><a href="bani-agus.php">Ibu Umi Latifah bersuami Bapak Agus Supriyadi</a></li>
            <li><a href="bani-nurman.php">Ibu Hindun Asfiyah bersuami Bapak Nurman Mulyana</a></li>
            <li><a href="bani-arsyad.php">Ibu Malehatun bersuami Bapak Arsyad Anwar</a></li>
        </ol>
    </section>
    <section>
            <h3>Garis Keturunan</h3>
            <div class="tree">
                <div class="node"><a href="../index.php">Bapak K.H. Abdurrozaq</a></div>
                <div class="line"></div>
                <div class="node"><?=NAMA?></div>
            </div>
        </section>
</main>
<?php include '../footer.php'; ?>;