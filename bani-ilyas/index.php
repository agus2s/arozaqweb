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
    <section id="silsilah">
        <h3>Silsilah Keluarga</h3>
        <div id="output"></div>
    </section>
</main>
<?php 
const DIAGRAM = 
    'flowchart LR;
        A["Mbah Abdurrozaq"] --> B["Bapak Hasan Ilyas"];
        B --> C["Ibu Umi Latifah"];
        B --> D["Ibu Hindun Asfiyah"];
        B --> E["Ibu Malehatun"];
        click A "../index.php";
        click C "bani-agus.php";
        click D "bani-nurman.php";
        click E "bani-arsyad.php";
    ';
include '../footer.php'; 
?>