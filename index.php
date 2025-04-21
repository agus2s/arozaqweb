<?php include 'header.php'; ?> 
<main> 
    <?php include 'root.php'; ?> 
    <section id="silsilah"> 
        <h3>Silsilah Keluarga</h3> 
        <script type="module">
            import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";
            mermaid.initialize({ startOnLoad: false });

            async function renderMermaid() {
                const elementId = "mermaidChart";
                const diagramDefinition = `
                    flowchart LR
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
                        click G "bani-abdullah-sumeri"
                `;
                const { svg } = await mermaid.render(elementId, diagramDefinition);
                document.getElementById("output").innerHTML = svg;
            }

            renderMermaid();
        </script> 
        <div id="output"></div> 
    </section> 
</main> 
<?php include 'footer.php'; ?>
