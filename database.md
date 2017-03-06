##pannenkoekdb
####klantadres
| Name                | Type          | Null | Default     | Extra |
|---------------------|---------------|------|-------------|-------|
| ID                  | int(11)       | No   | Primary Key | A_I   |
| straat              | varchar(255)  | No   |             |       |
| huisnummer          | int(11)       | No   |             |       |
| toevoeging          | char(1)       | No   |             |       |
| woonplaats          | varchar(255)  | No   |             |       |
| telefoonnummer      | varchar(11)   | No   |             |       |

####klanten
| Name                | Type          | Null | Default     | Extra |
|---------------------|---------------|------|-------------|-------|
| ID                  | int(11)       | No   | Primary Key | A_I   |
| email               | varchar(320)  | No   | Index       |       |
| voornaam            | varchar(255)  | No   |             |       |
| achternaam          | varchar(255)  | No   |             |       |
| password            | varchar(255)  | No   |             |       |

####orders
| Name                | Type          | Null | Default     | Extra |
|---------------------|---------------|------|-------------|-------|
| ordernummer         | int(11)       | No   | Primary Key | A_I   |
| aprijs              | varchar(255)  | Yes  | NULL        |       |
| aweergave           | varchar(255)  | Yes  | NULL        |       |
| bprijs              | varchar(255)  | Yes  | NULL        |       |
| bweergave           | varchar(255)  | Yes  | NULL        |       |
| t1prijs             | varchar(255)  | Yes  | NULL        |       |
| t1weergave          | varchar(255)  | Yes  | NULL        |       |
| t2prijs             | varchar(255)  | Yes  | NULL        |       |
| t2weergave          | varchar(255)  | Yes  | NULL        |       |
| t3prijs             | varchar(255)  | Yes  | NULL        |       |
| t3weergave          | varchar(255)  | Yes  | NULL        |       |
| eprijs              | varchar(255)  | Yes  | NULL        |       |
| eweergave           | varchar(255)  | Yes  | NULL        |       |
| dprijs              | varchar(255)  | Yes  | NULL        |       |
| dweergave           | varchar(255)  | Yes  | NULL        |       |

####producten
| Name                | Type          | Null | Default     | Extra |
|---------------------|-------------- |------|-------------|-------|
| productnummer       | varchar(255)  | No   | Primary Key |       |
| productweergave     | varchar(320)  | No   |             |       |
| productomschrijving | varchar(255)  | Yes  | NULL        |       |
| prijs               | decimal(19,2) | No   | 0.00        |       |
