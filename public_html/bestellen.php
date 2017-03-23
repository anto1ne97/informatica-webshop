<?php
require '../include/session.php';

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner" class="margin-btm bestellen">
		<div class="main-title">
			<h2>Er is niets lekkerder dan je eigen pannenkoek.</h2>
		</div>
		<form method="POST" action="..include/orders.php">
			<article class="ebox1">
				<div>
					<h2>Kies je bodem</h2>
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="A01" value="naturel"></input>
					<label for="A01"></label>
					<label class="text" for="A01">Kleine bodem</label>€12,50
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="A02" value="naturel"></input>
					<label for="A02"></label>
					<label class="text" for="A02">Medium bodem</label>€13,50
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="A03" value="naturel"></input>
					<label for="A03"></label>
					<label class="text" for="A03">Grote bodem</label>€15,50
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="A04" value="naturel"></input>
					<label for="A04"></label>
					<label class="text" for="A04">XXL bodem</label>€14,00
				</div>
			</article>

			<article class="ebox1">
				<div>
					<h2>Kies je special</h2>
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="B01" value="naturel"></input>
					<label for="B01"></label>
					<label class="text" for="B01">Kleine bodem</label>€12,50
				</div>
				<div>
					<input type="radio" class="magic-radio" name="layout" id="B02" value="naturel"></input>
					<label for="B02"></label>
					<label class="text" for="B02">Medium bodem</label>€13,50
				</div>
			</article>

			<article>
				<div id="demo"></div>
				<script>
					var producten = '{"products":[' +
						'{"productnummer":"D05","productweergave":"Tonic","productomschrijving":"Blikje Royalclub tonic 33cl","prijs":1.5 },' +
						'{"productnummer":"D06","productweergave":"Cassis","productomschrijving":"Blikje Fanta cassis 33cl","prijs":1.5 }]}';

					obj = JSON.parse(producten);
					document.getElementById("demo").innerHTML = obj.products[0].productweergave + " = " + obj.products[0].productomschrijving;
				</script>
			</article>

				<a href="#" class="button">
<?php
/*				SELECT Productweergave, Prodcutomschrijving, xprijs
				FROM Producten 
				WHERE Productnummer = 'S01'
?>
				</a>
				<a href="#" class="button">
<?php
				SELECT Productweergave, Prodcutomschrijving, xprijs
				FROM Producten 
				WHERE Productnummer = 'S02'*/
?>
				</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Kies je toppings</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Kies je extra</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Drinken</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
		</form>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>