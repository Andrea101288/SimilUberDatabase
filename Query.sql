#1) Elenco dei conducenti registrati

select U.nome, U.cognome from utente U 
where exists (select U.nome from patente P where P.nome = U.nome);

#2) Elenco dei conducenti sotto i 30 anni

select U.nome, U.cognome from utente U 
where exists (select U.nome from patente P
where P.nome = U.nome)
AND DATE_ADD(U.data_nascita, INTERVAL 30 YEAR) > now();

#3) Elenco dei conducenti con un solo mezzo

select * from utente U 
where username in 
(select username from possiede
where possiede.username = U.username
group by Username
having count(*) = 1);

#3) Elenco dei conducenti con più di un mezzo

select * from utente U 
where username in 
(select username from possiede
where possiede.username = U.username
group by Username
having count(*) > 1);

#5) Elenco dei conducenti con un mezzo con 7  o più posti(Suv, Pulmino)

select M.username, F.modello, F.numero_posti 
from possiede M, tipo_mezzo F
where M.targa = F.targa
and F.numero_posti >= 7;

#6) Elenco degli utenti con un feedback negativo( ho utilizzato numeri interi da 1 a 5
e considero un feedback negativo quelli inferiori a 3)

select U.username, U.nome, U.cognome, U.feedback from utente U 
where U.feedback < 3;

#7) Elenco dei tipi di mezzi a disposizione degli utenti

select distinct(modello), (select distinct(numero_posti)) as posti from tipo_mezzo;

#8) Elenco degli utenti che usano la piattaforma più frequentemente( ho contato quelli con frequenza settimanale maggiore di 1)\\

select U.nome, U.cognome from utente U 
where username in 
(select username from accede
where frequenza_settimanale > 1);

#9) Elenco dei metodi di pagamento accettati dai conducenti

select distinct(modalita_pagamento) from utente
where modalita_pagamento is not null;

10) Elenco degli sconti

select * from sconti;
