<?php 
const NAMA = 'Bapak Mujahid';
include 'header.php'; 
?>

<main>
  <section>
    <h2><?=NAMA?></h2>
    <p><?=NAMA?> anak dari Ibu Hamidah. <?=NAMA?> memiliki 8 orang anak, yaitu:</p>
    <ol>
      <li><a href="bani-laelatul.php">Ibu Laelatul Ngidyah</a></li>
      <li><a href="bani-fauzan.php">Bapak Fauzan</a></li>
      <li><a href="bani-mustofa.php">Bapak Mustofa</a></li>
      <li><a href="bani-ghoniah.php">Ibu Ghoniah</a></li>
      <li><a href="bani-murtadlo.php">Bapak Murtadho</a></li>
      <li><a href="bani-murtofingah.php">Ibu Murtofingah</a></li>
      <li>Bapak Muntaha</li>
      <li>Bapak Iskandar</li>
    </ol>
  </section>
  <section>
    <h3>Silsilah Keluarga <?= NAMA ?></h3>
    <div class="mermaid" id="silsilah">
    graph TD
    A[Mbah Abdurrozaq] --> B[Ibu Mariyah] --> C[Ibu Hamidah]
    C --> D[<?= NAMA ?>]
    
    click A "../index.php" "Bani Abdurrozaq"
    click B "index.php" "Bani Abdullah Umar"
    click C "bani-abu-nangim.php" "Bani Abu Nangim"
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>  
