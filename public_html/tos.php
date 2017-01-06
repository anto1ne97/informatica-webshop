<?php
session_start();

$title = "Gebruikersvoorwaarden";
include_once '../themes/header.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Amanda &amp; Co. Pannenkoeken</h2>
		<h2>Gebruikersvoorwaarden</h2>
		<article>
			We happily collect your personal information. Name, address, bank accounts, nothing is secure.<br>
			Vanaf hier kunnen we het aanvullen als we dat zouden willen. Hij stopt automatisch bij 1000 pixels. Dan is de ruimte op.
			Misschien moet de kleur nog wel iets aangepast worden, want zwarte tekst op een zwarte afbeelding is niet heel goed zichtbaar.
		</article>
		<article>
			Kijk, als ik hier nog een article plaats, heb je er 2. Zo kan je gemakkelijk onderscheiden tussen verschillende delen in de Gebruiksvoorwaarden.
		</article>
		<br>
		<p>
			<a href="javascript:window.open('','_self').close();" class="button">Dit tabblad sluiten</a>
		</p>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>