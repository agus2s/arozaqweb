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
        <h3>silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
            flowchart TD;
            A["Mbah Abdurrozaq"] --> B["Bapak Hasan Ilyas"];
            B["Bapak Hasan Ilyas"] --> |beristri|C["Ibu Rochyati"];
            C --> D["Ibu Umi Latifah"];
            C --> E["Ibu Hindun Asfiyah"];
            C --> F["Ibu Malehatun"];
            click A "../index.php";
            click D "bani-agus.php";
            click E "bani-nurman.php";
            click F "bani-arsyad.php";
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>