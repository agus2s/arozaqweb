<?php include 'header.php'; ?>
<main>
    <?php include 'root.php'; ?>
    <h3>Silsilah Keluarga</h3>
    <script type="module">
    import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";

    mermaid.initialize({ startOnLoad: false });

    async function renderMermaid() {
        const elementId = "mermaidChart";
        const diagramDefinition = `--- config: look: classic --- flowchart LR A[Mbah Abdurrozaq] A --> [Bapak H. Amin] & [Ibu Mariyah] & [Ibu Sujiah/Marjiah] & [Bapak Ilyas] & [Bapak Jamil] & [Ibu Satibah]`;
        const { svg } = await mermaid.render(elementId, diagramDefinition);
        document.getElementById("output").innerHTML = svg;
    }

    renderMermaid();
</script>

<div id="output"></div>

</main>
<?php include 'footer.php'; ?>