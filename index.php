<?php include 'header.php'; ?> 
<main> 
    <?php include 'root.php'; ?> 
    <section id="silsilah"> 
        <h3>Silsilah Keluarga</h3> 
        <div id="output"></div> 
    </section> 
</main> 
<?php 
const DIAGRAM = 
'flowchart LR
        A[Mbah Abdurrozaq]
        A --> B[Bapak H. Amin]
        A --> C[Ibu Mariyah]
        A --> D[Ibu Sujiah/Marjiah]
        A --> E[Bapak Jamil]
        A --> F[Bapak Ilyas]
        A --> G[Ibu Satibah]
        click A "index.php"
        click B "bani-haji-amin"
        click C "bani-abdullah-umar"
        click D "bani-sarbini"
        click E "bani-jamil"
        click F "bani-ilyas"
        click G "bani-abdullah-sumeri"';
        
include 'footer.php'; 
?>
