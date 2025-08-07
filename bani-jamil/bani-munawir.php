<?php 
const NAMA = 'Bapak Munawir';
include 'header.php'; 
?>

<main>
  <section>
    <h1><?=NAMA?></h1>
    <p><?=NAMA?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
    <ol>
      <li>Bapak H. Mafahir</li>
      <li>Ibu Mutmainah</li>
      <li>Bapak Muhsinun</li>
      <li>Bapak Mungalim</li>
      <li>Bapak Mughofir</li>
      <li>Ibu Nurhayati</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
      graph TD
      A[Mbah Abdurrozaq] --> B[Bapak Jamil] --> C[<?= NAMA ?>]
      click A "../index.php"
      click B "index.php"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>