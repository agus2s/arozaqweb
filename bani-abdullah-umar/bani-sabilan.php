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
        <h3>Garis Keturunan</h3>
        <div class="mermaid" id="silsilah">
            graph TD;
                A[Mbah Abdurrozaq] --> B[Ibu Mariyah]
                B --> C[<?=NAMA?>]
        </div>
    </section>
    <section>
    <h3>silsilah Keluarga</h3>
        <div class="mermaid" id="silsilah">
            graph LR;
                A[<?=NAMA?>] -->|bersuami| B[Bapak Sabilan]
                B --> C[Bapak Mujayir/Dahlan]
                B --> D[Bapak Mukhlas]
                B --> E[Bapak Muhajir]
                B --> F[Bapak Mughofir]
                B --> G[Bapak Kuat/Muhyidin]
                B --> H[Bapak Mungadin]
                B --> I[Bapak Tulus]

                click C "bani-mujayir.php" "Bapak Mujayir/Dahlan"
                click D "bani-mukhlas.php" "Bapak Mukhlas"
                click E "bani-muhajir.php" "Bapak Muhajir"
                click F "bani-mughofir.php" "Bapak Mughofir"
                click G "bani-muhyidin.php" "Bapak Kuat/Muhyidin"
                click H "bani-mungadin.php" "Bapak Mungadin"
                click I "bani-tulus.php" "Bapak Tulus"
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>  