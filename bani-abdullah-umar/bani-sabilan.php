<?php 
const NAMA = 'Ibu Aisyah';
include 'header.php'; 
?>
<main>
    <section>
        <h2><?=NAMA?> bersuami Bapak Sabilan</h2>
        <p><?=NAMA?> adalah anak dari Ibu Mariyah dan Bapak Abdullah Umar. <?=NAMA?> memiliki 6 orang anak:</p>
        <ol>
            <li><a href="bani-mujayir.php">Bapak Mujayir/Dahlan</a></li>
			<li><a href="bani-mukhlas.php">Bapak Mukhlas</a></li>
            <li>Bapak Muhajir</li>
            <li>Bapak Mughofir</li>
            <li><a href="bani-muhyidin.php">Bapak Kuat/Muhyidin</a></li>
            <li><a href="bani-mungadin.php">Bapak Mungadin</a></li>
            <li><a href="bani-tulus.php">Bapak Tulus</a></li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga <?= NAMA ?></h3>
        <div class="mermaid" id="silsilah">
            graph LR;
                A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[<?=NAMA?>]
                D[Bapak Abdullah Umar] --> C;

                C --> 1[Bapak Mujayir/Dahlan]
                C --> 2[Bapak Mukhlas]
                C --> 3[Bapak Muhajir]
                C --> 4[Bapak Mughofir]
                C --> 5[Bapak Kuat/Muhyidin]
                C --> 6[Bapak Mungadin]
                C --> 7[Bapak Tulus]

                click A "../index.php"
                click B "index.php"
                click 1 "bani-mujayir.php"
                click 2 "bani-mukhlas.php"
                click 5 "bani-muhyidin.php"
                click 6 "bani-mungadin.php"
                click 7 "bani-tulus.php"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  