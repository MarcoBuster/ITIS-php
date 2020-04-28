create database collezione_sorpresine;
use collezione_sorpresine;

create table collezioni
(
    idCollezione int auto_increment
        primary key,
    nomeC        varchar(35)                                            not null,
    marca        varchar(20)                                            not null,
    categoria    enum ('Cartoni animati', 'Fantasy', 'Natale', 'Altro') not null,
    annoUscita   year                                                   null,
    valoreC      decimal(6, 2)                                          null,
    note         text                                                   null,
    link         text                                                   null,
    immagine     text                                                   null
);

create table sorpresine
(
    idSorpresina   int auto_increment
        primary key,
    collezione     int                  null,
    presente       tinyint(1) default 0 null,
    valoreS        double(6, 2)         null,
    prezzoAcquisto double(6, 2)         null,
    dataAggiunta   date                 null,
    note           varchar(500)         null,
    immagineS      varchar(300)         null,
    nomeS          varchar(50)          not null,
    foreign key (collezione) references collezioni (idCollezione)
);

INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (1, 'Barbapapa''', 'Kinder', 'Cartoni animati', 2012, 70.00, null, 'http://www.nonsolosorpresine.it/vendita/sorpresine-kinder-italia-barbapapa/18174', null);
INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (2, 'I puffi in citta''', 'Kinder', 'Cartoni animati', 2017, 263.00, null, 'http://www.nonsolosorpresine.it/vendita/sorpresine-kinder-italia-i-puffi-in-citta/19365', null);
INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (3, 'Harry Potter (Wizzis)', 'Esselunga', 'Fantasy', 2017, 412.00, null, 'https://www.nerdburger.it/wizzis/', null);
INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (4, 'Star Wars (rollinz 3)', 'Esselunga', 'Fantasy', 2018, 208.00, null, 'https://www.tomshw.it/culturapop/esselunga-rollinz-3-0-star-wars/', null);
INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (5, 'Kung fu panda', 'Kinder', 'Cartoni animati', 2016, 150.00, null, 'http://www.nonsolosorpresine.it/vendita/sorpresine-kinder-italia-kung-fu-panda/14479', null);
INSERT INTO collezione_sorpresine.collezioni (idCollezione, nomeC, marca, categoria, annoUscita, valoreC, note, link, immagine) VALUES (6, 'Mitici Carletti', 'Findus', 'Altro', 2014, 30.00, null, 'http://www.nonsolosorpresine.it/vendita/sorpresine-findus-mitici-carletti/17441', null);
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (1, 6, 1, 14.42, null, '2014-07-30', null, null, 'Carletto ladro');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (2, 6, 1, 43.66, null, '2014-09-21', null, null, 'Carletto supereroe');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (3, 6, 1, 48.23, null, '2014-02-10', null, null, 'Carletto musicista');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (4, 6, 1, 8.22, null, '2014-09-02', null, null, 'Carletto cavernicolo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (5, 6, 1, 35.12, 38.5, '2014-12-14', null, null, 'Carletto mago');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (6, 6, 1, 41.37, null, '2014-07-24', null, null, 'Carletto esploratore');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (7, 6, 1, 44.67, null, '2014-11-27', null, null, 'Carletto indiano');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (8, 6, 1, 36.95, 35.88, '2014-11-30', null, null, 'Carletto cowboy');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (9, 6, 1, 30.4, null, '2017-06-01', null, null, 'Carletto investigatore');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (10, 6, 1, 18.74, null, '2015-06-11', null, null, 'Carletto surfista');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (11, 6, 1, 0.53, null, '2014-01-09', null, null, 'Carletto vampiro');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (12, 6, 1, 22.36, null, '2016-08-29', null, null, 'Carletto pirata');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (13, 2, 1, 27.7, null, '2017-06-09', null, null, 'Puffo skater');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (14, 2, 1, 28.71, 40.34, '2018-02-13', null, null, 'Puffetta Giardiniera');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (15, 2, 0, 5.74, null, '2018-03-30', null, null, 'Puffo segnalatore traffico aereo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (16, 2, 1, 1.78, null, '2017-10-12', null, null, 'Puffo corridore');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (17, 2, 1, 84.07, null, '2018-01-01', null, null, 'Puffo arrampicatore');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (18, 2, 1, 13.7, null, '2017-10-11', null, null, 'Grande puffo pilota');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (19, 2, 0, 30.37, null, '2017-04-21', null, null, 'Puffo pompiere');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (20, 2, 0, 22.32, null, '2017-12-03', null, null, 'Puffetta che fa shopping');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (21, 2, 0, 41.41, null, '2017-03-23', null, null, 'Puffo radiografo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (22, 2, 1, 38.38, null, '2017-07-19', null, null, 'Puffo dottore');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (23, 5, 1, 24.05, null, '2016-05-03', null, null, 'Po');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (24, 5, 1, 24.64, null, '2016-06-17', null, null, 'Shifun');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (25, 5, 1, 28.11, null, '2016-02-22', null, null, 'Mantide');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (26, 5, 1, 33.46, null, '2016-05-15', null, null, 'Tigre');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (27, 5, 1, 17.96, null, '2016-02-08', null, null, 'Vipera');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (28, 5, 0, 17.59, null, '2016-09-05', null, null, 'Scimmia');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (29, 5, 0, 3.48, null, '2016-04-20', null, null, 'Airone');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (30, 5, 1, 26.01, 11.34, '2016-07-16', null, null, 'Tai Lung');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (31, 5, 1, 20.29, null, '2017-05-27', null, null, 'Oogway');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (32, 1, 0, 19.77, null, '2012-12-17', null, null, 'Barbabarba');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (33, 1, 0, 5.78, null, '2012-12-02', null, null, 'Barbapapà');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (34, 1, 1, 2.94, null, '2012-11-23', null, null, 'Barbamamma');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (35, 1, 1, 44.53, null, '2012-10-03', null, null, 'Barbalalla');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (36, 1, 1, 34.23, 29.44, '2012-07-05', null, null, 'Barbabella');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (37, 1, 0, 31.62, null, '2012-08-14', null, null, 'Barbottina');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (38, 1, 0, 33.95, 69.82, '2016-02-28', null, null, 'Barbazoo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (39, 1, 0, 33.6, null, '2014-05-09', null, null, 'Barbaforte');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (40, 1, 0, 4.3, null, '2012-05-15', null, null, 'Barbabravo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (41, 4, 1, 6.73, null, '2018-12-21', null, null, 'Nien Numb');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (42, 4, 0, 25.16, null, '2021-04-02', null, null, 'Porg');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (43, 4, 0, 41.23, 75.2, '2018-07-12', null, null, 'Jar Jar Binks');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (44, 4, 1, 2.27, null, '2022-10-08', null, null, 'Amilyn Holdo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (45, 4, 1, 86.22, null, '2021-09-09', null, null, 'Mace Windu');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (46, 4, 1, 16.85, null, '2018-09-05', null, null, 'Queen Amidala');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (47, 4, 0, 30.16, 59.4, '2019-05-31', null, null, 'Bib Fortuna');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (48, 4, 0, 19.39, null, '2018-03-02', null, null, 'Bossk');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (49, 4, 1, 47.26, null, '2018-11-20', null, null, 'Clone Trooper');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (50, 4, 0, 73.17, null, '2018-02-21', null, null, 'Flame Trooper');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (51, 4, 1, 16.64, 74.16, '2020-01-31', null, null, 'Sand Trooper');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (52, 4, 0, 4.05, null, '2018-09-11', null, null, 'At-at Pilot');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (53, 4, 1, 47.19, null, '2022-01-19', null, null, 'Young Anakin');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (54, 4, 0, 42.53, null, '2018-05-04', null, null, 'Grand Moff Tarkin');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (55, 4, 0, 28.86, null, '2018-09-16', null, null, 'Wampa');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (56, 4, 1, 22.4, 33.11, '2018-12-22', null, null, 'Tusken Raider');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (57, 4, 1, 22.93, null, '2018-08-21', null, null, 'Max Rebo');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (58, 4, 1, 16.42, null, '2018-10-09', null, null, 'Battle Droid');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (59, 4, 1, 42.78, null, '2018-01-11', null, null, 'Jet Trooper');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (60, 4, 1, 42.56, null, '2020-03-22', null, null, 'Sith Trooper');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (61, 4, 0, 7.23, null, '2022-09-29', null, null, 'Knights Of Ren');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (62, 4, 1, 47.61, null, '2021-05-11', null, null, 'Zorii');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (63, 4, 0, 10.77, null, '2021-03-30', null, null, 'Jannah');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (64, 4, 1, 28.09, null, '2018-04-06', null, null, 'Kylo Ren');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (65, 4, 1, 27.74, null, '2018-01-09', null, null, 'Ewok – Personaggio floccato');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (66, 4, 1, 81.97, null, '2021-11-22', null, null, 'Chewbacca – Personaggio floccato');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (67, 4, 0, 40.36, 26.7, '2018-01-12', null, null, 'Hologram Leia – Personaggio trasparente');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (68, 4, 0, 14.88, null, '2019-07-18', null, null, 'Darth Vader – Spada laser luminosa');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (69, 4, 0, 24.1, null, '2018-08-06', null, null, 'Luke Skywalker – Spada laser luminosa');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (70, 4, 1, 8.97, null, '2018-01-15', null, null, 'C3-PO – Bagno galvanico');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (71, 4, 1, 24.58, null, '2018-06-29', null, null, 'Captain Phasma – Bagno galvanico');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (72, 4, 1, 29.55, null, '2018-06-11', null, null, 'R2-D2 – Bagno galvanico');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (73, 3, 1, 5.17, null, '2017-07-08', null, null, 'Harry Potter');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (74, 3, 0, 34.24, null, '2017-12-12', null, null, 'Hermione Granger');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (75, 3, 1, 31.05, null, '2019-07-17', null, null, 'Ron Weasley');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (76, 3, 0, 21.64, null, '2017-01-16', null, null, 'Albus Silente');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (77, 3, 0, 67.14, null, '2017-01-23', null, null, 'Severus Piton');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (78, 3, 0, 37.57, null, '2018-08-29', null, null, 'Fred Weasley');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (79, 3, 1, 11.37, null, '2019-01-12', null, null, 'George Weasley');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (80, 3, 0, 1.18, null, '2017-07-18', null, null, 'Neville Paciock');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (81, 3, 0, 43.14, null, '2017-12-01', null, null, 'Ginny Weasley');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (82, 3, 1, 21.1, 73.73, '2017-07-07', null, null, 'Draco Malfoy');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (83, 3, 0, 43.88, null, '2017-01-12', null, null, 'Dobby');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (84, 3, 0, 34.56, null, '2021-09-10', null, null, 'Edvige');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (85, 3, 0, 63.39, null, '2017-05-15', null, null, 'Sirius Black');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (86, 3, 1, 14.36, null, '2018-09-07', null, null, 'Remus Lupin');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (87, 3, 1, 37.53, null, '2017-09-17', null, null, 'Rubeus Hagrid');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (88, 3, 1, 22.72, null, '2020-08-19', null, null, 'Minerva McGranitt');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (89, 3, 1, 29.56, null, '2017-08-01', null, null, 'Bellatrix Lestrange');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (90, 3, 1, 29.6, null, '2017-06-23', null, null, 'Luna Lovegood');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (91, 3, 0, 2.31, null, '2017-01-18', null, null, 'Cedric Diggory');
INSERT INTO collezione_sorpresine.sorpresine (idSorpresina, collezione, presente, valoreS, prezzoAcquisto, dataAggiunta, note, immagineS, nomeS) VALUES (92, 3, 0, 5.95, 29.61, '2017-05-09', null, null, 'Lord Voldemort');

