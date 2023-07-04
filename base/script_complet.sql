CREATE SCHEMA IF NOT EXISTS "public";

CREATE SEQUENCE "public".code_journal_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".compte_general_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".content_journal_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".journal_seq START WITH 1 INCREMENT BY 1;

CREATE  TABLE "public".artist ( 
	idartist             serial  NOT NULL  ,
	artistname           varchar(255)    ,
	biographie           text    ,
	birthdate            date    ,
	adress               varchar(255)    ,
	image                varchar(255)    ,
	contact              varchar(255)    ,
	CONSTRAINT pk_artiste PRIMARY KEY ( idartist )
 );

CREATE  TABLE "public".client ( 
	idclient             serial  NOT NULL  ,
	name                 varchar(255)    ,
	email                varchar(255)    ,
	pass                 varchar(255)    ,
	adress               varchar(255)    ,
	"number"             varchar(255)    ,
	CONSTRAINT pk_client PRIMARY KEY ( idclient )
 );

CREATE  TABLE "public".code_journal ( 
	id_code_journal      varchar(50) DEFAULT concat('CODE_', nextval('code_journal_seq'::regclass)) NOT NULL  ,
	intitule_code        varchar(100)    ,
	reference_code       varchar(50)    ,
	CONSTRAINT code_journal_pkey PRIMARY KEY ( id_code_journal )
 );

CREATE  TABLE "public".compte_general ( 
	id_compte_general    varchar(50) DEFAULT concat('CG_', nextval('compte_general_seq'::regclass)) NOT NULL  ,
	numero_compte        varchar(50)    ,
	intitule_compte      varchar(50)    ,
	CONSTRAINT compte_general_pkey PRIMARY KEY ( id_compte_general )
 );

CREATE  TABLE "public".expeditionmode ( 
	idexpedition         serial  NOT NULL  ,
	expeditionname       varchar(255)    ,
	image                varchar(255)    ,
	CONSTRAINT pk_expeditionmode PRIMARY KEY ( idexpedition )
 );

CREATE  TABLE "public".journal ( 
	id_journal           varchar(50) DEFAULT concat('JOURNAL_', nextval('journal_seq'::regclass)) NOT NULL  ,
	reference_piece      varchar(50)    ,
	libelle_journal      varchar(100)    ,
	date_journal         date    ,
	id_code_journal      varchar(50)    ,
	est_valide           integer    ,
	CONSTRAINT journal_pkey PRIMARY KEY ( id_journal ),
	CONSTRAINT journal_id_code_journal_fkey FOREIGN KEY ( id_code_journal ) REFERENCES "public".code_journal( id_code_journal )   
 );

CREATE  TABLE "public".painting ( 
	idpainting           serial  NOT NULL  ,
	paintingname         varchar(255)    ,
	idartist             integer    ,
	image                varchar(255)    ,
	entrancedate         timestamp    ,
	description          text    ,
	price                numeric(10,2)    ,
	CONSTRAINT pk_tableau PRIMARY KEY ( idpainting ),
	CONSTRAINT fk_tableau_tableau FOREIGN KEY ( idartist ) REFERENCES "public".artist( idartist )   
 );

CREATE  TABLE "public".paymentmode ( 
	idpayment            serial  NOT NULL  ,
	paymentname          varchar(255)    ,
	image                varchar(255)    ,
	CONSTRAINT pk_paymentmode PRIMARY KEY ( idpayment )
 );

CREATE  TABLE "public".buying ( 
	idbuying             serial  NOT NULL  ,
	datebuying           timestamp    ,
	idclient             integer    ,
	idpayment            integer    ,
	idexpedition         integer    ,
	CONSTRAINT pk_achat PRIMARY KEY ( idbuying ),
	CONSTRAINT fk_buying_client FOREIGN KEY ( idclient ) REFERENCES "public".client( idclient )   ,
	CONSTRAINT fk_buying_paymentmode FOREIGN KEY ( idpayment ) REFERENCES "public".paymentmode( idpayment )   ,
	CONSTRAINT fk_buying_expeditionmode FOREIGN KEY ( idexpedition ) REFERENCES "public".expeditionmode( idexpedition )   
 );

CREATE  TABLE "public".content_journal ( 
	id_content_journal   varchar(50) DEFAULT concat('CJ_', nextval('content_journal_seq'::regclass)) NOT NULL  ,
	id_journal           varchar(50)    ,
	id_compte_general    varchar(50)    ,
	debit                numeric    ,
	credit               numeric    ,
	CONSTRAINT content_journal_pkey PRIMARY KEY ( id_content_journal ),
	CONSTRAINT content_journal_id_compte_general_fkey FOREIGN KEY ( id_compte_general ) REFERENCES "public".compte_general( id_compte_general )   ,
	CONSTRAINT content_journal_id_journal_fkey FOREIGN KEY ( id_journal ) REFERENCES "public".journal( id_journal )   
 );

CREATE  TABLE "public".painting_buying ( 
	idpaintingbuiying    serial  NOT NULL  ,
	idpainting           integer    ,
	idbuying             integer    ,
	CONSTRAINT pk_painting_buying PRIMARY KEY ( idpaintingbuiying ),
	CONSTRAINT fk_painting_buying_buying FOREIGN KEY ( idbuying ) REFERENCES "public".buying( idbuying )   ,
	CONSTRAINT fk_painting_buying_painting FOREIGN KEY ( idpainting ) REFERENCES "public".painting( idpainting )   
 );

CREATE VIEW "public".view_artist_painting AS  SELECT artist.idartist,
    artist.artistname,
    artist.biographie,
    artist.birthdate AS artist_bd,
    artist.adress AS artist_adress,
    artist.image AS artist_image,
    artist.contact,
    painting.idpainting,
    painting.paintingname,
    painting.image AS painting_image,
    painting.entrancedate AS painting_bd,
    painting.description,
    painting.price
   FROM (artist
     JOIN painting ON ((painting.idartist = artist.idartist)));

INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 1, 'Rakoto Nandrasana', 'jeune Talentueux', '1994-04-12', 'Morondava', 'artiste/1.jpg', '03454664821');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 2, 'Raazafy Tselounn', 'Retraite ambitieux', '1992-06-13', 'Toliara', 'artiste/2.jpg', '03454645421');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 3, 'Nore Artista', 'Gasy tia sary', '1996-05-10', 'Majunga', 'artiste/3.jpg', '0321555421');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 4, 'Be Filiriny', 'mpananao sary matianina', '1995-05-21', 'Diego', 'artiste/4.jpg', '0335464821');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 5, 'Rabe Zavana', 'Pationne art Malagasy', '1974-12-06', 'Madagascar', 'artiste/5.jpg', '0325445821');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 6, 'Mahefa Sary', '', '1986-02-02', 'Madagascar', 'artiste/5.jpg', '0325445821');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 7, 'Fanja Randria', 'Peintre talentueuse', '1988-08-15', 'Antananarivo', 'artiste/6.jpg', '0324567821');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 8, 'Tiana Raja', 'Sculptrice inspir‚e', '1990-03-27', 'Antsirabe', 'artiste/7.jpg', '0345123456');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 9, 'Lala Andriam', 'Photographe passionn‚e', '1993-07-08', 'Fianarantsoa', 'artiste/8.jpg', '0334789654');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 10, 'Sitraka Ram', 'Artiste polyvalent', '1985-11-24', 'Toamasina', 'artiste/9.jpg', '0345896321');
INSERT INTO "public".artist( idartist, artistname, biographie, birthdate, adress, image, contact ) VALUES ( 11, 'Zara Tsiaro', 'Artiste engag‚e', '1998-09-18', 'Antsiranana', 'artiste/10.jpg', '0321457896');
INSERT INTO "public".expeditionmode( idexpedition, expeditionname, image ) VALUES ( 1, 'poste', 'expeditonmode/1.png');
INSERT INTO "public".expeditionmode( idexpedition, expeditionname, image ) VALUES ( 2, 'ups', 'expeditonmode/2.png');
INSERT INTO "public".expeditionmode( idexpedition, expeditionname, image ) VALUES ( 3, 'dpd', 'expeditonmode/3.png');
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 1, 'Baobab tree', 1, 'paint/1.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspiree de la baobab de Majunga', 300000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 2, 'Vehivavy Gasy', 1, 'paint/2.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspiree d une fille de la campagne', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 3, 'La Campagne', 1, 'paint/3.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspiree de l environnement', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 4, 'Ranomasina', 1, 'paint/4.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspiree de la baobab de Majunga', 300000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 5, 'Coucher de soleil', 1, 'paint/5.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant un magnifique coucher de soleil', 250000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 6, 'Ny Antsika', 1, 'paint/6.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la solidarite et l unite', 450000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 7, 'Hariva', 2, 'paint/7.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la beaute de la nature', 280000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 8, 'Tsara fotsiny', 2, 'paint/8.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la serenite', 320000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 9, 'L Envolee', 2, 'paint/9.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant des oiseaux en plein vol', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 10, 'Miara-Misaka', 2, 'paint/10.jpg', '2023-06-28 12:00:00 AM', 'Tableau symbolisant l union et la force', 420000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 11, 'Ny Tany', 2, 'paint/11.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la beaute de la terre', 310000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 12, 'Mamiratra', 2, 'paint/12.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la pluie bienfaisante', 270000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 13, 'Village cotier', 3, 'paint/13.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant un village cotier paisible', 290000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 14, 'Mainty', 3, 'paint/14.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la douceur de vivre', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 15, 'Ny Ranomasina', 3, 'paint/15.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la mer et de ses mysteres', 360000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 16, 'Sitraka sy Tahiry', 3, 'paint/16.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant l amour et la complicite', 410000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 17, 'Ny Ainga', 3, 'paint/17.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la beaute de la nature sauvage', 320000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 18, 'Manga Be', 3, 'paint/18.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la richesse culturelle malgache', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 19, 'Trano Gasy', 4, 'paint/19.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant une maison traditionnelle malgache', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 20, 'Hira Gasy', 4, 'paint/20.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant une scene de danse traditionnelle', 300000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 21, 'Fahazavana', 4, 'paint/21.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la lumiere et l espoir', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 22, 'Madio', 4, 'paint/22.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la purete et de la simplicite', 290000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 23, 'Rano sy Rano', 4, 'paint/23.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant l importance de l eau dans la vie', 420000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 24, 'Tily', 4, 'paint/24.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la delicatesse et la fragilite', 310000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 25, 'Mahery', 5, 'paint/25.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la force et la puissance', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 26, 'Fifohazana', 5, 'paint/26.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la spiritualite malgache', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 27, 'Talenta', 5, 'paint/27.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la creativite et le talent', 320000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 28, 'Harena', 5, 'paint/28.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la richesse naturelle de Madagascar', 390000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 29, 'Lamba Soa', 5, 'paint/29.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la beaute des vetements traditionnels', 330000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 30, 'Sambatra', 5, 'paint/30.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la joie et du bonheur', 420000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 31, 'Fanolorana', 6, 'paint/31.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la tradition de l echange de cadeaux', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 32, 'Mazava', 6, 'paint/32.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la clarte et de la luminosite', 310000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 33, 'Tsolika', 6, 'paint/33.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant l elegance et la grƒce', 360000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 34, 'Mora-penitra', 6, 'paint/34.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la splendeur des paysages montagneux', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 35, 'Sakalava', 6, 'paint/35.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la culture et l histoire du peuple Sakalava', 390000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 36, 'Vazimba', 6, 'paint/36.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la legende des Vazimba, les premiers habitants de Madagascar', 340000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 37, 'Lamba Fara', 7, 'paint/37.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la finesse et l elegance du lamba fara', 320000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 38, 'Rano Mena', 7, 'paint/38.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la beaute des cascades', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 39, 'Maraina', 7, 'paint/39.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant l aube et le renouveau', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 40, 'Vary Morarano', 7, 'paint/40.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la culture du riz a Madagascar', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 41, 'Mpiady', 7, 'paint/41.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la solidarite et l entraide', 370000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 42, 'Talenta Gasy', 7, 'paint/42.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire du talent et de la creativite malgache', 420000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 43, 'Mainty sy Fanantenana', 8, 'paint/43.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la douceur et la gratitude', 330000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 44, 'Mama', 8, 'paint/44.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la maternite et de l amour maternel', 390000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 45, 'Soleil Levant', 8, 'paint/45.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant le lever du soleil sur l horizon', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 46, 'Mafy Avaratra', 8, 'paint/46.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la force et de la grandeur du nord', 410000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 47, 'Tantsaha', 8, 'paint/47.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la vie et le travail des agriculteurs', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 48, 'Mpanjaka', 8, 'paint/48.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire du pouvoir et de la noblesse', 370000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 49, 'Ravitoto sy voanjobory', 9, 'paint/49.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant un plat traditionnel malgache', 360000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 50, 'Tsinjo', 9, 'paint/50.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la simplicite et de la modestie', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 51, 'Mpanotrona', 9, 'paint/51.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant le pouvoir de la musique et de la danse', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 52, 'Lazan i Betsileo', 9, 'paint/52.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire des proverbes et des dictons Betsileo', 350000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 53, 'Fihavanana', 9, 'paint/53.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la valeur de la solidarite et de la fraternite', 390000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 54, 'Hira Malagasy', 9, 'paint/54.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire des chants et des musiques traditionnelles malgaches', 340000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 55, 'Tany Masina', 10, 'paint/55.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la sacralite de la terre', 420000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 56, 'Soratra Masina', 10, 'paint/56.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire des ecrits sacres et des textes anciens', 370000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 57, 'Sakamalaho', 10, 'paint/57.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant la beaute et la delicatesse des orchidees', 400000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 58, 'Ranomasina sy Ranomainty', 10, 'paint/58.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de la rencontre de l ocean et de la terre', 360000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 59, 'Fahatelo', 10, 'paint/59.jpg', '2023-06-28 12:00:00 AM', 'Tableau representant l harmonie entre les trois elements (terre, eau, ciel)', 380000);
INSERT INTO "public".painting( idpainting, paintingname, idartist, image, entrancedate, description, price ) VALUES ( 60, 'Antso sy rano', 10, 'paint/60.jpg', '2023-06-28 12:00:00 AM', 'Tableau inspire de l appel de l eau et de la nature', 390000);
INSERT INTO "public".paymentmode( idpayment, paymentname, image ) VALUES ( 1, 'MasterCard', 'payment/1.png');
INSERT INTO "public".paymentmode( idpayment, paymentname, image ) VALUES ( 2, 'PayPal', 'payment/2.png');
INSERT INTO "public".paymentmode( idpayment, paymentname, image ) VALUES ( 3, 'OrangeMoney', 'payment/3.png');