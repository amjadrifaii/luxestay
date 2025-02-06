INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Cozy Haven', 200, 'A warm and welcoming retreat with comfortable furnishings and a cozy atmosphere.', 4, 3, 1, 9);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Garden Retreat', 150, 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay.', 2, 6, 5, 10);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Serenity House', 350, 'A tranquil and serene guesthouse, designed to promote relaxation and rejuvenation.', 6, 1, 3, 10);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Mountain View', 100, 'A guesthouse situated in the mountains.Offering breathtaking views and a peaceful escape from the city.', 4, 4, 2, 9);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Peaceful Cottage', 60, 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests.', 2, 4, 6, 6);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Pine Ridge', 550, 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat.', 4, 5, 5, 5);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Sunrise', 190, 'A guesthouse that boasts beautiful sunrise views, perfect for early risers and nature lovers.', 3, 1, 4, 7);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Sunset Villa', 630, 'A guesthouse with stunning sunset views, ideal for those looking to unwind and enjoy the beauty of nature.', 2, 2, 8, 3);

INSERT INTO guest_houses(guest_house_name, guest_house_ppd, guest_house_des, guest_house_persons, owner_id, location_id, house_type)
VALUES('Tranquil Hideaway', 125, 'A hidden gem of a guesthouse, offering a tranquil and secluded escape from the hustle and bustle of daily life.', 3, 8, 9, 4);




INSERT INTO house_types(type_desc)
VALUES('Pool');

INSERT INTO house_types(type_desc)
VALUES('Villa');

INSERT INTO house_types(type_desc)
VALUES('Chalet');

INSERT INTO house_types(type_desc)
VALUES('Cabin');

INSERT INTO house_types(type_desc)
VALUES('Mansion');

INSERT INTO house_types(type_desc)
VALUES('Farmhouse');

INSERT INTO house_types(type_desc)
VALUES('Hut');

INSERT INTO house_types(type_desc)
VALUES('Apartment');

INSERT INTO house_types(type_desc)
VALUES('Townhouse');

INSERT INTO house_types(type_desc)
VALUES('Courtyard');

INSERT INTO house_types(type_desc)
VALUES('Duplex');

INSERT INTO house_types(type_desc)
VALUES('Beach');

INSERT INTO house_types(type_desc)
VALUES('Studio');


INSERT INTO images(guest_house_id,image_path)
VALUES('1','photos/cozyHaven.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('1','photos/cozyHaven2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('1','photos/cozyHaven3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('2','photos/gardenRetreat.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('2','photos/gardenRetreat2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('2','photos/gardenRetreat3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('3','photos/mountainView.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('3','photos/mountainView2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('3','photos/mountainView3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('4','photos/peacefulCottage.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('4','photos/peacefulCottage2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('4','photos/peacefulCottage3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('5','photos/pineRidge.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('5','photos/pineRidge2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('5','photos/pineRidge3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('6','photos/serenityHouse.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('6','photos/serenityHouse2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('6','photos/serenityHouse3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('7','photos/sunrise.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('7','photos/sunrise2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('7','photos/sunrise3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('8','photos/sunsetVilla.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('8','photos/sunsetVilla2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('8','photos/sunsetVilla3.jpg');

INSERT INTO images(guest_house_id,image_path)
VALUES('9','photos/tranquil.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('9','photos/tranquil2.jpg');
INSERT INTO images(guest_house_id,image_path)
VALUES('9','photos/tranquil3.jpg');



INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Anthony Mhanna', '81-214815','anthony@gmail.com' ,CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Stephan Chabchoul', '71-456634', 'stephan@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Jimmy Rahme', '76-345876', 'jimmy@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Hicham Sleimen', '03-548321', 'hicham@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Hady Hapche', '76-567523', 'hady@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Charbel Bteich', '71-456432', 'charbel@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Paul Akiki', '76-143159', 'paul@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Youssef Seif', '81-678754', 'youssef@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Marc Zgheib', '71-398789', 'marc@gmail.com',CURDATE());

INSERT INTO owners(owner_name,owner_phone,owner_email,registration_date)
VALUES('Elie', '03-335445', 'elie@gmail.com',CURDATE());

INSERT INTO locations(location_desc)
VALUES('Beirut');
INSERT INTO locations(location_desc)
VALUES('Tripoli');
INSERT INTO locations(location_desc)
VALUES('Sidon');
INSERT INTO locations(location_desc)
VALUES('Byblos ');
INSERT INTO locations(location_desc)
VALUES('Zahle');
INSERT INTO locations(location_desc)
VALUES('Baalbek');
INSERT INTO locations(location_desc)
VALUES('Batroun');
INSERT INTO locations(location_desc)
VALUES('Nabatieh');
INSERT INTO locations(location_desc)
VALUES('Jounieh');
INSERT INTO locations(location_desc)
VALUES('Bint Jbeil');
INSERT INTO locations(location_desc)
VALUES('Marjeyoun');
INSERT INTO locations(location_desc)
VALUES('Zgharta');
INSERT INTO locations(location_desc)
VALUES('Rashaya');
INSERT INTO locations(location_desc)
VALUES('Hasbaya');