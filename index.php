<?php include 'header.php'; ?> 
<main> 
    <?php include 'root.php'; ?> 
    <section> 
        <h3>Silsilah Keluarga</h3> 
        <div class="mermaid"  id="silsilah">
        flowchart TD
            A[Mbah Abdurrozaq]
            A --> B[Bapak H. Amin]
            A --> C[Ibu Mariyah]
            A --> D[Ibu Sujiah/Marjiah]
            A --> E[Bapak Jamil]
            A --> F[Bapak Ilyas]
            A --> G[Ibu Satibah]
            click B "bani-haji-amin" "Bani Haji Amin"
            click C "bani-abdullah-umar" "Bani Abdullah Umar"
            click D "bani-sarbini" "Bani Sarbini"
            click E "bani-jamil" "Bani Jamil"
            click F "bani-ilyas" "Bani Ilyas"
            click G "bani-abdullah-sumeri" "Bani Abdullah Sumeri"
        </div> 
    </section> 
</main> 
<?php include 'footer.php'; ?>
