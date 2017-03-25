<?php
require '../include/session.php';

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner" class="bestellen">
		<h2>Er is niets lekkerder dan je eigen pannenkoek.</h2>
		<form method="POST" action="../include/orders.php">
			<article>
				<h2>Speciale pannenkoeken</h2>
				<p style="color: #8dc63f">Let op: kiest u een van onze speciale pannenkoeken, dan kunt u deze niet verder aanpassen.</p>
				<fieldset id="group3">
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S02" value="S02">
						<label for="S02">Lente special</label>
						<label for="S02" class="productomschrijving">Kaas, paprika, bosuitjes, asperges</label>
						<label for="S02" class="productprijs">€7,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S04" value="S04">
						<label for="S04">Zomer special</label>
						<label for="S04" class="productomschrijving">Munt, bosbessen, aardbei, framboos</label>
						<label for="S04" class="productprijs">€7,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S01" value="S01">
						<label for="S01">Herfst special</label>
						<label for="S01" class="productomschrijving">Appel, honing, kaneel</label>
						<label for="S01" class="productprijs">€7,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S03" value="S03">
						<label for="S03">Winter special</label>
						<label for="S03" class="productomschrijving">Peer, chocola, Nutella, poedersuiker</label>
						<label for="S03" class="productprijs">€7,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S05" value="S05">
						<label for="S05" class="">Mantoine</label>
						<label for="S05" class="productomschrijving">Bacon, shoarma, kip, biefstuk, chili pepers, wasabi</label>
						<label for="S05" class="productprijs">€11,39</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S06" value="S06">
						<label for="S06" class="">Meulinks Familie Recept</label>
						<label for="S06" class="productomschrijving">Geheim recept</label>
						<label for="S06" class="productprijs">€25,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S07" value="S07">
						<label for="S07" class="">Sjors Pjotr Ferdinand</label>
						<label for="S07" class="productomschrijving">Lasagne bolognese met laagjes pannenkoek in plaats van laagjes pasta</label>
						<label for="S07" class="productprijs">€8,99</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S08" value="S08">
						<label for="S08" class="">Lucky Luc's</label>
						<label for="S08" class="productomschrijving">Vla, Vlokken, Vodka (18+)</label>
						<label for="S08" class="productprijs">€8,60</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group3" id="S09" value="S09">
						<label for="S09" class="">Hammie XXL Vega Special</label>
						<label for="S09" class="productomschrijving">Kaas, courgette, rode &amp; groene &amp; gele paprika, rode &amp; witte ui, tomaat, mais, aubergine, asperges, broccoli, bosuitjes, papadews, okra, gegarneerd met peterselie &amp; basilicum en geserveerd met een frisse sla melange.</label>
						<label for="S09" class="productprijs">€12,50</label>
					</div>
				</fieldset>
			</article>

			<article>
				<h2>Bodems</h2>
				<fieldset id="group1" class="bodemsize">
					<div>
						<input type="radio" class="magic-radio" name="group1" id="A01" value="A01">
						<label for="A01">Kleine bodem</label>
						<label for="A01" style="padding-left: 30px;">25cm</label>
						<label for="A01" style="padding-left: 154px;">€12,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group1" id="A02" value="A02">
						<label for="A02">Medium bodem</label>
						<label for="A02" style="padding-left: 30px;">30 cm</label>
						<label for="A02" style="padding-left: 150px;">€13,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group1" id="A03" value="A03">
						<label for="A03">Grote bodem</label>
						<label for="A03" style="padding-left: 30px;">35 cm</label>
						<label for="A03" style="padding-left: 150px;">€13,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group1" id="A04" value="A04">
						<label for="A04">XXL bodem</label>
						<label for="A04" style="padding-left: 30px;">40 cm</label>
						<label for="A04" style="padding-left: 150px;">€14,00</label>
					</div>
				</fieldset>
				<fieldset id="group2" class="bodembeleg">
					<div>
						<input type="radio" class="magic-radio" name="group2" id="B00" value="B00" checked="checked">
						<label for="B00">Naturel</label>
						<label for="B00" style="padding-left: 30px;">Naturel bodem</label>
						<label for="B00" style="padding-left: 150px;">€0,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group2" id="B01" value="B01">
						<label for="B01">Appel</label>
						<label for="B01" style="padding-left: 30px;">Bodem met appels</label>
						<label for="B01" style="padding-left: 117px;">€1,30</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group2" id="B02" value="B02">
						<label for="B02">Spek</label>
						<label for="B02" style="padding-left: 30px;">Bodem met spek</label>
						<label for="B02" style="padding-left: 136px;">€1,40</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group2" id="B03" value="B03">
						<label for="B03">Bessen</label>
						<label for="B03" style="padding-left: 30px;">Bodem met bosbessen</label>
						<label for="B03" style="padding-left: 82px;">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group2" id="B04" value="B04">
						<label for="B04">Chocolade</label>
						<label for="B04" style="padding-left: 30px;">Bodem met chocolade</label>
						<label for="B04" style="padding-left: 82px;">€2,00</label>
					</div>
				</fieldset>
			</article>

			<article>
				<h2>Toppings</h2>
				<fieldset id="group4">
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T01" value="T01">
						<label for="T01">Suiker</label>
						<label for="T01" class="productomschrijving">Poedersuiker</label>
						<label for="T01" class="productprijs">€0,20</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T02" value="T02">
						<label for="T02">Stroop</label>
						<label for="T02" class="productomschrijving">Van Gilse schenkstroop</label>
						<label for="T02" class="productprijs">€0,25</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T03" value="T03">
						<label for="T03">Kaneel</label>
						<label for="T03" class="productomschrijving">Basterdsuiker met kaneel</label>
						<label for="T03" class="productprijs">€0,20</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T04" value="T04">
						<label for="T04">Nutella</label>
						<label for="T04" class="productomschrijving">Nutella hazelnootpasta</label>
						<label for="T04" class="productprijs">€0,00</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T05" value="T05">
						<label for="T05">Jonge kaas</label>
						<label for="T05" class="productomschrijving">Beemster jonge kaas</label>
						<label for="T05" class="productprijs">€0,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T06" value="T06">
						<label for="T06">Belegen kaas</label>
						<label for="T06" class="productomschrijving">Beemster belegen kaas</label>
						<label for="T06" class="productprijs">€0,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T07" value="T07">
						<label for="T07">Oude kaas</label>
						<label for="T07" class="productomschrijving">Beemster oude kaas</label>
						<label for="T07" class="productprijs">€0,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T08" value="T08">
						<label for="T08">Feta</label>
						<label for="T08" class="productomschrijving">Blokjes feta</label>
						<label for="T08" class="productprijs">€0,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T09" value="T09">
						<label for="T09">Rozijnen</label>
						<label for="T09" class="productomschrijving">Sundrop rozijnen</label>
						<label for="T09" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T10" value="T10">
						<label for="T10">Banaan</label>
						<label for="T10" class="productomschrijving">Chiquita bananan sneetje</label>
						<label for="T10" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T11" value="T11">
						<label for="T11">Appel</label>
						<label for="T11" class="productomschrijving">Pink lady appel sneetje</label>
						<label for="T11" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T12" value="T12">
						<label for="T12">Ananas</label>
						<label for="T12" class="productomschrijving">Gesneden ananas</label>
						<label for="T12" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T13" value="T13">
						<label for="T13">Peer</label>
						<label for="T13" class="productomschrijving">Sneetje peer</label>
						<label for="T13" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T14" value="T14">
						<label for="T14">Meloen</label>
						<label for="T14" class="productomschrijving"></label>
						<label for="T14" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T15" value="T15">
						<label for="T15">Bosbessen</label>
						<label for="T15" class="productomschrijving"></label>
						<label for="T15" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T16" value="T16">
						<label for="T16">Framboos</label>
						<label for="T16" class="productomschrijving"></label>
						<label for="T16" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T17" value="T17">
						<label for="T17">Aardbei</label>
						<label for="T17" class="productomschrijving"></label>
						<label for="T17" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T18" value="T18">
						<label for="T18">Ham</label>
						<label for="T18" class="productomschrijving"></label>
						<label for="T18" class="productprijs">€1,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T19" value="T19">
						<label for="T19">Spek</label>
						<label for="T19" class="productomschrijving"></label>
						<label for="T19" class="productprijs">€1,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T20" value="T20">
						<label for="T20">Salami</label>
						<label for="T20" class="productomschrijving"></label>
						<label for="T20" class="productprijs">€1,75</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T21" value="T21">
						<label for="T21">Bacon</label>
						<label for="T21" class="productomschrijving"></label>
						<label for="T21" class="productprijs">€2,00</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T22" value="T22">
						<label for="T22">Shoarma</label>
						<label for="T22" class="productomschrijving"></label>
						<label for="T22" class="productprijs">€2,00</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T23" value="T23">
						<label for="T23">Kip</label>
						<label for="T23" class="productomschrijving"></label>
						<label for="T23" class="productprijs">€2,00</label>
					</div>
					<div>
						<input type="checkbox" class="magic-checkbox" name="group4" id="T24" value="T24">
						<label for="T24">Pindakaas</label>
						<label for="T24" class="productomschrijving">Helaes pindakaas</label>
						<label for="T24" class="productprijs">€1,00</label>
					</div>
				</fieldset>
			</article>

			<article>
				<h2>Diversen</h2>
				<fieldset id="group5">
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E01" value="E01">
						<label for="E01">Side salad</label>
						<label for="E01" class="productomschrijving">Groene salade met frisse sla, komkommer, tomaat en oude kaas</label>
						<label for="E01" class="productprijs">€4,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E02" value="E02">
						<label for="E02">Greek salad</label>
						<label for="E02" class="productomschrijving">Salade met rucola, tomaat, fetakaas en pijnboompitten</label>
						<label for="E02" class="productprijs">€4,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E03" value="E03">
						<label for="E03">Caesar's salad</label>
						<label for="E03" class="productomschrijving">Salade met kip, tomaat, paprika en honing-mosterd dressing</label>
						<label for="E03" class="productprijs">€5,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E04" value="E04">
						<label for="E04">Tosti</label>
						<label for="E04" class="productomschrijving">Tosti met jonge kaas</label>
						<label for="E04" class="productprijs">€1,90</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E05" value="E05">
						<label for="E05">Ham/kaas</label>
						<label for="E05" class="productomschrijving">Tosti met ham &amp; kaas</label>
						<label for="E05" class="productprijs">€2,00</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group5" id="E06" value="E06">
						<label for="E06">Patat</label>
						<label for="E06" class="productomschrijving">Frites met frikandel of kroket</label>
						<label for="E06" class="productprijs">€3,50</label>
					</div>
				</fieldset>
			</article>

			<article>
				<h2>Dranken</h2>
				<fieldset id="group6">
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D01" value="D01">
						<label for="D01">Coca-cola</label>
						<label for="D01" class="productomschrijving">Blikje Coca-Cola 33cl</label>
						<label for="D01" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D02" value="D02">
						<label for="D02">Fanta</label>
						<label for="D02" class="productomschrijving">Blikje Fanta 33cl</label>
						<label for="D02" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D03" value="D03">
						<label for="D03">Sprite</label>
						<label for="D03" class="productomschrijving">Blikje Sprite 33cl</label>
						<label for="D03" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D04" value="D04">
						<label for="D04">7-Up</label>
						<label for="D04" class="productomschrijving">Blikje 7-Up 33cl</label>
						<label for="D04" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D05" value="D05">
						<label for="D05">Tonic</label>
						<label for="D05" class="productomschrijving">Blikje Royalclub tonic 33cl</label>
						<label for="D05" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D06" value="D06">
						<label for="D06">Cassis</label>
						<label for="D06" class="productomschrijving">Blikje Fanta cassis 33cl</label>
						<label for="D06" class="productprijs">€1,50</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D07" value="D07">
						<label for="D07">Spa blauw</label>
						<label for="D07" class="productomschrijving">Spa mineraalwater</label>
						<label for="D07" class="productprijs">€1,20</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D08" value="D08">
						<label for="D08">Spa rood</label>
						<label for="D08" class="productomschrijving">Spa bruisend mineraalwater</label>
						<label for="D08" class="productprijs">€1,30</label>
					</div>
					<div>
						<input type="radio" class="magic-radio" name="group6" id="D09" value="D09">
						<label for="D09">Bier</label>
						<label for="D09" class="productomschrijving">Heineken pils</label>
						<label for="D09" class="productprijs">€2,50</label>
					</div>
				</fieldset>
			</article>

			<article>
				<input type="submit" name="" class="button" value="bestellen">
			</article>
		</form>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>