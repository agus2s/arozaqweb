<?php include 'header.php'; ?>
<main>
    <?php include 'root.php'; ?>
    <h3>Silsilah Keluarga</h3>
    <script type="module">
    import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";

    mermaid.initialize({ startOnLoad: false });

    async function renderMermaid() {
        const elementId = "mermaidChart";
        const diagramDefinition = `flowchart LR; [Mbah Abdurrozaq] --> [Bapak H. Amin]; [Mbah Abdurrozaq] --> [Ibu Mariyah]; [Mbah Abdurrozaq] --> [Ibu Sujiah/Marjiah]; [Mbah Abdurrozaq] --> [Bapak Ilyas]; [Mbah Abdurrozaq] --> [Bapak Jamil]; [Mbah Abdurrozaq] --> [Ibu Satibah]`;
        const { svg } = await mermaid.render(elementId, diagramDefinition);
        document.getElementById("output").innerHTML = svg;
    }

    renderMermaid();
</script>

<div id="output"></div>

</main>
<?php include 'footer.php'; ?>