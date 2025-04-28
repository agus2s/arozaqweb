 <?php 
 const NAMA = 'Ibu Sujiah/Marjiah';
 include 'header.php'; 
 ?>
<main>
	<section>
		<h2><?=NAMA?> bersuami Bapak Sarbini</h2>
		<p><?=NAMA?> anak dari K.H. Abdurrozaq. <?=NAMA?> bersuami Bapak Sarbini. <?=NAMA?> memiliki 5 orang anak:</p>
		<ol>
			<li><a href="bani-dul-ghoni.php">Ibu 'Ariyah bersuami Bapak Dul Ghoni</a></li>
			<li><a href="bani-ansor.php">Ibu Nafsatun bersuami Bapak Ansor</a></li>
			<li><a href="bani-afinah.php">Ibu 'Afinah</a></li>
			<li><a href="bani-ahmad-sumedi.php">Bapak Ahmad Sumedi</a></li>
			<li><a href="#">Ibu Alfiyah</a></li>
			<li><a href="bani-abdul-qohar.php">Bapak Abdul Qohar beristri Ibu Machamah</a></li>
			<li><a href="#">Ibu Mukronah</a></li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid" id="silsilah">flowchart TD;
			A["Mbah Abdurrozaq"] --> B["Ibu Sujiah/Marjiah"];
			click A "../index.php";
		</div>
	</section>
	<section>
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid">flowchart LR;
		A["Ibu Sujiah/Marjiah"] --> |bersuami| B["Bapak Sarbini"];
		B --> C["Ibu \'Ariyah"];
		B --> D["Ibu Nafsatun"];
		B --> E["Ibu \'Afinah"];
		B --> F["Bapak Ahmad Sumedi"];
		B --> G["Ibu Alfiyah"];
		B --> H["Bapak Abdul Qohar"];
		B --> I["Ibu Mukronah"];
		click C "bani-dul-ghoni.php";
		click D "bani-ansor.php";
		click E "bani-afinah.php";
		click F "bani-ahmad-sumedi.php";
		click H "bani-abdul-qohar.php"</div>
	</section>
</main>
<?php include '../footer.php'; ?>