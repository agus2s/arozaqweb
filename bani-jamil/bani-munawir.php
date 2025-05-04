<?php 
const NAMA = 'Bapak Munawir';
include 'header.php'; 
?>

<main>
  <section>
    <h1><?=NAMA?></h1>
    <p><?=NAMA?> anak dari Bapak Muhammad Jamil dan Ibu Maemunah. <?=NAMA?> memiliki 6 orang anak, yaitu:</p>
    <ol>
      <li><a href="#">Bapak H. Mafahir</a></li>
      <li><a href="#">Ibu Mutmainah</a></li>
      <li><a href="#">Bapak Muhsinun</a></li>
      <li><a href="#">Bapak Mungalim</a></li>
      <li><a href="#">Bapak Mughofir</a></li>
      <li><a href="#">Ibu Nurhayati</a></li>
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