-- a = bodem
INSERT INTO orders (aprijs, aweergave)
SELECT prijs, productweergave 
FROM producten
WHERE productnummer = 'A01'

INSERT INTO orders (bprijs, bweergave)
SELECT prijs, productweergave 
FROM producten
WHERE productnummer = 'B01';

-- 

UPDATE orders
SET bprijs = 
	(	SELECT prijs, productweergave
     	FROM producten
     	WHERE productnummer = 'B01'
     )
WHERE ordernummer = 1;

--

INSERT INTO orders (aprijs, aweergave, bprijs, bweergave, t1prijs, t1weergave, t2prijs, t2weergave, t3prijs, t3weergave, eprijs, eweergave, dprijs, dweergave)
VALUES (
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'A01'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'A01'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'B01'),
(		SELECT productweergave
		FROM producten
		WHERE productnummer = 'B01'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'T01'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'T01'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'T02'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'T02'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'T03'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'T03'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'E01'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'E01'),
(		SELECT prijs
		FROM producten
		WHERE productnummer = 'D01'),
(		SELECT productweergave 
		FROM producten
		WHERE productnummer = 'D01')
);