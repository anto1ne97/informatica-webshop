##pannenkoekdb

####klanten
| Name                | Type          | Null | Default     | Extra |
|---------------------|---------------|------|-------------|-------|
| klantID             | int(11)       | No   | Primary Key | A_I   |
| email               | varchar(320)  | No   | Index       |       |
| voornaam            | varchar(255)  | No   |             |       |
| achternaam          | varchar(255)  | No   |             |       |
| password            | varchar(255)  | No   |             |       |
| straat              | varchar(255)  | No   |             |       |
| huisnummer          | int(11)       | No   |             |       |
| toevoeging          | char(1)       | No   |             |       |
| woonplaats          | varchar(255)  | No   |             |       |
| telefoonnummer      | varchar(11)   | No   |             |       |

####orders
| Name                | Type          | Null | Default     | Extra |
|---------------------|---------------|------|-------------|-------|
| orderID             | int(11)       | No   | Primary Key | A_I   |
| klantID             | int(11)       | No   | Index       |       |
| aprijs              | decimal(19,2) | Yes  | NULL        |       |
| aweergave           | varchar(255)  | Yes  | NULL        |       |
| bprijs              | decimal(19,2) | Yes  | NULL        |       |
| bweergave           | varchar(255)  | Yes  | NULL        |       |
| t1prijs             | decimal(19,2) | Yes  | NULL        |       |
| t1weergave          | varchar(255)  | Yes  | NULL        |       |
| t2prijs             | decimal(19,2) | Yes  | NULL        |       |
| t2weergave          | varchar(255)  | Yes  | NULL        |       |
| t3prijs             | decimal(19,2) | Yes  | NULL        |       |
| t3weergave          | varchar(255)  | Yes  | NULL        |       |
| eprijs              | decimal(19,2) | Yes  | NULL        |       |
| eweergave           | varchar(255)  | Yes  | NULL        |       |
| dprijs              | decimal(19,2) | Yes  | NULL        |       |
| dweergave           | varchar(255)  | Yes  | NULL        |       |
| sprijs              | decimal(19,2) | Yes  | NULL        |       |
| sweergave           | varchar(255)  | Yes  | NULL        |       |

####producten
| Name                | Type          | Null | Default     | Extra |
|---------------------|-------------- |------|-------------|-------|
| productID           | varchar(255)  | No   | Primary Key |       |
| productweergave     | varchar(320)  | No   |             |       |
| productomschrijving | varchar(255)  | Yes  | NULL        |       |
| prijs               | decimal(19,2) | No   | 0.00        |       |
