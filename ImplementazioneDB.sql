# CREAZIONE DATABASE E TABELLE

CREATE DATABASE similUber;
USE similUber;
CREATE TABLE Utente(
username varchar(15) PRIMARY KEY,
password varchar(20) NOT NULL,
email varchar(200) NOT NULL,
nome varchar(20) NOT NULL,
cognome varchar(20) NOT NULL,
data_nascita varchar(20) NOT NULL,
citta_residenza varchar(20) NOT NULL,
via_residenza varchar(20) NOT NULL,
numero_civico int(3) NOT NULL,
modalita_pagamento varchar(30),
numero_patente int(5),
feedback int(5) 
) Engine = InnoDB;

CREATE TABLE Sconti(
codice_sconto int(15) PRIMARY KEY,
valore int(3) NOT NULL
) Engine = InnoDB;

CREATE TABLE Tipo_mezzo(
targa varchar(15) PRIMARY KEY,
modello varchar(20) NOT NULL,
numero_posti int(1) NOT NULL
) Engine = InnoDB;

CREATE TABLE Prenotazione(
codice_prenotazione int(15) PRIMARY KEY,
cliente varchar(20) NOT NULL,
conducente varchar(20) NOT NULL,
FOREIGN KEY (cliente) REFERENCES Utente(username),
FOREIGN KEY (conducente) REFERENCES Utente(username),
data_prenotazione date NOT NULL,
ora_prenotazione varchar(20) NOT NULL,
indirizzo_partenza varchar(20) NOT NULL,
indirizzo_destinazione varchar(20) NOT NULL,
data_ora_accettazione varchar(20),
data_ora_rifiuto varchar(20) 
) Engine = InnoDB;

CREATE TABLE Accede(
username varchar(15),
codice_sconto int(15),
FOREIGN KEY (username) REFERENCES Utente(username),
FOREIGN KEY (codice_sconto) REFERENCES Sconti(codice_sconto),
kilometraggio int(5),
frequenza_settimanale int(10)
) Engine = InnoDB;

CREATE TABLE Possiede(
username varchar(15) NOT NULL,
targa varchar(15) NOT NULL,
FOREIGN KEY (username) REFERENCES Utente(username),
FOREIGN KEY (targa) REFERENCES Tipo_mezzo(targa)
) Engine = InnoDB;

CREATE TABLE Richiede(
cliente varchar(15) NOT NULL,
codice_prenotazione int(15) NOT NULL,
FOREIGN KEY (cliente) REFERENCES Utente(username),
FOREIGN KEY (codice_prenotazione) REFERENCES Prenotazione(codice_prenotazione),
bagagli varchar(20),
animali varchar(20),
budget_max int(4)
) Engine = InnoDB;

# POPOLAMENTO DEL DB 

#Utente (username, password, email, nome, cognome, data_nascita, 
#		 citta_residenza, via_residenza, numero_civico, modalita_pagamento, feedback)

INSERT INTO Utente VALUES ( 'Andrea88', 'abcde', 'andrea@hotmail.it', 'Andrea', 'Rossi', '1988/12/10',
						   'Pesaro', 'Via Tocci', '12', 'Bonifico', '45673', '2');
						
INSERT INTO Utente VALUES ( 'Luca10', 'ahjdhjde', 'luca@hotmail.it', 'Luca', 'Bianchi', '1977/01/05',
						   'Rimini', 'Via Bosi' , '3', 'Contanti', '35263', '4');
						
INSERT INTO Utente VALUES ( 'Tony6', 'abdjkcsie', 'Tony@hotmail.it', 'Tony', 'Verdi', '1986/04/10',
						   'Riccione', 'Via Bracci',  '5', NULL, NULL, '3');
						   
INSERT INTO Utente VALUES ( 'Paso65', 'abdhdvhdkjdj', 'Paso@hotmail.it', 'Paso', 'Neri', '1978/04/08',
						   'Genova', 'Via Taccoli', '7', 'Bonifico', '09876', '1');
						   
INSERT INTO Utente VALUES ( 'Giorgia495', 'lklshgabcde', 'Giorgia@hotmail.it', 'Giorgia', 'Radi', '1989/07/02',
						   'Urbino', 'Via Saffi', '8', NULL, NULL, '1');
						   
INSERT INTO Utente VALUES ( 'Marco654', 'lklbddbshgabcde', 'Marco@hotmail.it', 'Marco', 'Nanni', '1983/11/06',
						   'Kioto', 'Via Solferino', '76', 'Bonifico', '52752', '5');
						   
INSERT INTO Utente VALUES ( 'Gianny89', 'jhgfhjssfkjde', 'Gianny@hotmail.it', 'Giovanni', 'Bonali', '1981/05/03',
						   'Torino', 'Via Serra', '34', NULL, NULL, NULL);
						   

#Sconti ( codice_sconto, valore)

INSERT INTO sconti VALUES('234567', '10');
INSERT INTO sconti VALUES('039858', '20');
INSERT INTO sconti VALUES('948758', '50');

#Tipo_mezzo ( targa, modello, numero_posti)

INSERT INTO tipo_mezzo VALUES('AH098PO', 'automobile', '5');
INSERT INTO tipo_mezzo VALUES('HF768LK', 'suv', '7');
INSERT INTO tipo_mezzo VALUES('FR562BD', 'pulmino', '9');
INSERT INTO tipo_mezzo VALUES('AW450MB', 'automobile', '5');
INSERT INTO tipo_mezzo VALUES('SF456HJ', 'automobile', '5');
INSERT INTO tipo_mezzo VALUES('DF329SC', 'suv', '7');


#Prenotazione (codice_prenotazione, cliente, conducente, data_prenotazione, ora_prenotazione,
#				indirizzo_partenza, indirizzo_destinazione, data_ora_accettazione, data_ora_rifiuto )
				
INSERT INTO prenotazione VALUES( '10', 'Tony6', 'Andrea88', '2017/01/10', '15:30', 
								 'Via Fratti', 'Via Kolbe', '2017/01/10 15:40', NULL);
								 
INSERT INTO prenotazione VALUES( '15', 'Giorgia495', 'Paso65', '2017/02/04', '12:15', 
								 'Via Buro', 'Via Zucco', '2017/01/10 12:22', NULL);
								 
INSERT INTO prenotazione VALUES( '05', 'Tony6', 'Paso65', '2017/07/07', '18:20', 
								 'Via Redi', 'Via Saiopa', '2017/07/07 18:21', NULL);
								 
INSERT INTO prenotazione VALUES( '03', 'Giorgia495', 'Luca10', '2017/03/07', '12:15', 
								 'Via Trena', 'Via Zoio', NULL, '2017/03/07 12:22');
								 
INSERT INTO prenotazione VALUES( '13', 'Giorgia495', 'Marco654', '2017/03/07', '12:22', 
								 'Via Trena', 'Via Zoio', '2017/03/07 12:30', NULL);
								 
INSERT INTO prenotazione VALUES( '09', 'Gianny89', 'Marco654', '2017/03/07', '13:25', 
								 'Via Tarricone', 'Via Zalando', '2018/06/09 13:27', NULL);
								 
#Accede (username, codice_sconto, frequenza_settimanale)

INSERT INTO accede VALUES( 'Giorgia495', '234567', NULL, '2');

INSERT INTO accede VALUES( 'Tony6', '039858', '100', NULL);

INSERT INTO accede VALUES( 'Gianny89', '948758', '150', '1');

#Possiede (username, targa)

INSERT INTO possiede VALUES('Andrea88','AH098PO'); 

INSERT INTO possiede VALUES('Paso65','HF768LK');
 
INSERT INTO possiede VALUES('Luca10','FR562BD');

INSERT INTO possiede VALUES('Marco654','AW450MB');

INSERT INTO possiede VALUES('Paso65','SF456HJ');
 
INSERT INTO possiede VALUES('Luca10','DF329SC');

#Richiede (username, codice_prenotazione, bagagli, animali, budget_max)

INSERT INTO Richiede VALUES('Tony6','10', '2 valigie', NULL, NULL);

INSERT INTO Richiede VALUES('Giorgia495','15', NULL, 'Cane', NULL);

INSERT INTO Richiede VALUES('Tony6','05', '1 valigia', 'Gatto', NULL);

INSERT INTO Richiede VALUES('Giorgia495','03', '3 valigie', NULL, '10');

INSERT INTO Richiede VALUES('Giorgia495','13', '1 trolley', 'Gatto', '20');

INSERT INTO Richiede VALUES('Gianny89','09', '1 valigia, 1 borsa', NULL, NULL);
