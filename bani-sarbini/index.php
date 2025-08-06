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
		<h3>Kenangan Abadi</h3>
		<ol>
			<li>Mbah Abdul Hamid Kartanegara sekalian</li>
			<li>Mbah Asngari sekalian</li>
			<li>Mbah Murjana sekalian</li>
			<li>Mbah Sarbini sekalian</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga <?= NAMA ?></h3>
		<div class="mermaid" id="silsilah">
    flowchart LR;
		A["Mbah Abdurrozaq"] --> B["Ibu Sujiah/Marjiah"];
		B --> 1["Ibu \'Ariyah"];
		B --> 2["Ibu Nafsatun"];
		B --> 3["Ibu \'Afinah"];
		B --> 4["Bapak Ahmad Sumedi"];
		B --> 5["Ibu Alfiyah"];
		B --> 6["Bapak Abdul Qohar"];
		B --> 7["Ibu Mukronah"];
    click A "../index.php";
		click 1 "bani-dul-ghoni.php";
		click 2 "bani-ansor.php";
		click 3 "bani-afinah.php";
		click 4 "bani-ahmad-sumedi.php";
		click 6 "bani-abdul-qohar.php"</div>
	</section>
</main>
<?php include '../footer.php'; ?>