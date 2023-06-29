
-- Client
INSERT into client VALUES(default,'Mirado','mirado@gmail.com','Mirado','Antananarivo','0345664714');


-- artist
insert into artist VALUES
(default,'Rakoto Nandrasana','jeune Talentueux','1994-04-12','Morondava','artiste/1.jpg','03454664821'),
(default,'Raazafy Tselounn','Retraite ambitieux','1992-06-13','Toliara','artiste/2.jpg','03454645421'),
(default,'Nore Artista','Gasy tia sary','1996-05-10','Majunga','artiste/3.jpg','0321555421'),
(default,'Be Filiriny','mpananao sary matianina','1995-05-21','Diego','artiste/4.jpg','0335464821'),
(default,'Rabe Zavana','Pationne art Malagasy','1974-12-06','Madagascar','artiste/5.jpg','0325445821'),
(default,'Mahefa Sary','','1986-02-02','Madagascar','artiste/5.jpg','0325445821'),
(default,'Fanja Randria','Peintre talentueuse','1988-08-15','Antananarivo','artiste/6.jpg','0324567821'),
(default,'Tiana Raja','Sculptrice inspirée','1990-03-27','Antsirabe','artiste/7.jpg','0345123456'),
(default,'Lala Andriam','Photographe passionnée','1993-07-08','Fianarantsoa','artiste/8.jpg','0334789654'),
(default,'Sitraka Ram','Artiste polyvalent','1985-11-24','Toamasina','artiste/9.jpg','0345896321'),
(default,'Zara Tsiaro','Artiste engagée','1998-09-18','Antsiranana','artiste/10.jpg','0321457896');

--paiment mode

insert into paymentmode values
(default,'MasterCard','payment/1.png'),
(default,'PayPal','payment/2.png'),
(default,'OrangeMoney','payment/3.png');

-- expedition mode

insert into expeditionmode values
(default,'poste','expeditonmode/1.png'),
(default,'ups','expeditonmode/2.png'),
(default,'dpd','expeditonmode/3.png');


--view painting_aritst
create VIEW view_artist_painting as(
select artist.idartist,artist.artistname,artist.biographie,artist.birthdate as artist_bd,artist.adress as artist_adress,
artist.image as artist_image, artist.contact, painting.idpainting,painting.paintingname,painting.image as painting_image,
painting.entrancedate as painting_bd,painting.description,painting.price
from artist
join painting
on painting.idartist = artist.idartist);


