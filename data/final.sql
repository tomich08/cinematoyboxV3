DROP DATABASE IF EXISTS home_theater;
CREATE DATABASE IF NOT EXISTS home_theater;
USE home_theater;

CREATE TABLE products(
	id INT PRIMARY KEY auto_increment,
	product_type ENUM ("Television","Audio","Accessories","Projectors","Screens"),
	prod_head CHAR(75),
	brand CHAR(30),
	size DEC(5,2),
	price DEC (8,2),
	bg_img CHAR(75),
	tm_img CHAR(75),
	prod_desc TEXT,
	mini_desc TEXT
)ENGINE=InnoDB;


/*Table Data*/

INSERT INTO products
	VALUES 

	/*HDTV's*/
	(null,"Television","Innotech Home Theater Kit","Innotech",60.00,2899.99,"Kiawi60LED.png","th_Kiawi60LED.jpg","Watch your movie collection come to new life with all the richness this Innotech 60inch HDTV provides.  This LED TV has a brilliant 1080p 240hz picture that will stand out in any game room.  This kit also includes Innotech's 7.1 surround sound system to capture the whole home cinema experience.  Also a smart TV, you can enjoy internet applications from the comfort of your couch. Apps include Netflix, Hulu, and iTunes.  Comes with a one year manufacturer warranty that covers parts and labor.  Extended warranty also available.","Watch your movie collection come to new life with all the richness this Innotech....."),	
	(null,"Television","Kiawi 50-inch LED HDTV","Kiawi",50.00,1499.99,"kiawi52.jpg","th_kiawi52.jpg","This big screen LED television works at its best in well lit rooms. Watch Blu-ray movies and 1080p HD content at their highest level of detail.  Advanced TV sound with two internal 10W speakers to make dialogue easier to understand. With four HDMI inputs, you will have no problem connecting multiple components to this system. Watch fast-moving movies, sports and video games with a minimum of motion blur with it's 120 hz refresh rate. ","This big screen LED television works at its best in well lit rooms....."),
	(null,"Television","Miatchi 42-inch Plasma TV",42.00,"Miatchi",999.99,"miatchi42.jpg","th_miatchi42.jpg","Enjoy your favorite movies, TV shows and sports with this Miatchi plasma HDTV that features 600Hz Max Sub Field Driving for a bright, clear picture during fast-action scenes. Smart capability provides access to Netflix, YouTube and other instant content. 2-channel sound system. Features speakers that deliver up to 20W, plus 7 sound modes and 3 sound optimizer modes, for powerful audio. Inputs include 3 HDMI (1 side, 2 rear), 1 shared component video/composite (rear) and 1 RF antenna/cable (rear).  One year manufacturer warranty included.","Enjoy your favorite movies, TV shows and sports with this Miatchi plasma HDTV....."),
	(null,"Television","Patson Electronics 55-inch LED HDTV","Patson Electronics",55.00,1599.99,"patson55.jpg","th_patson55.jpg","This 55-inch TV is large enough to provide an immersive experience for everyone in the room. 1080p resolution for stunning HD images. Watch Blu-ray movies and 1080p HD content at their highest level of detail. 240Hz refresh rate for smooth action scenes. Watch fast-moving movies, sports and video games with virtually no motion blur. Uses the same passive 3D technology found in movie theaters. 8 pairs of 3D glasses are included. Additional pairs sold separately. One year manufacturer warranty included.","This 55-inch TV is large enough to provide an immersive experience for everyone in the room....."),
	(null,"Teleivsion","Patson Electronics 65-inch 4K HDTV","Patson Electronics",65.00,2999.99,"patson65.png","th_patson65.png","prod desc","mini desc"),
	(null,"Television","Kiawi 70-inch 4K HDTV","Kiawi",70.00,7999.99,"kiawi4k.png","th_kiawi4k.png","Product Desription","mini descpription"),
	(null,"Television","Miatchi 65-inch 4K HDTV","Miatchi",65.00,5999.99,"miatchi65.png","th_miatchi65.png","Product description here","mini description"),
	(null,"Television","Patson Electronics 65-inch Curved LED HDTV","Patson Electronics",65.00,2999.99,"curved.png","th_curved.png","prod desc","mini Desc"),
	(null,"Television","Kiawi 80-inch LED HDTV","Kiawi",80.00,2399.99,"eighty.png","th_eighty.png","prode description","mini desc"),
	
	/*Home Audio*/
	(null, "Audio","Patson Electronics 5.1 Dolby Digital Receiver","Patson Electronics",00.00,599.99,"receiver.jpg","th_receiver.jpg","5.1 dolby digital surround sound receiver. 600 watt total system power.  HDMI inputs and outputs that carry stunning high definition sound. AM/FM tuner with built in antenna.  Seven different sound modes that can be customized to your listening preference.   Calibration kit included so sound can be optimized in any room.  One year manufacturer warranty included.","5.1 dolby digital surround sound receiver. 600 watt total system power....."),
	(null,"Audio","Innotech iNstyle Speakers","Innotech",00.00,399.99,"inospeakers.jpg","th_inospeakers.jpg","The power of a 5.1 surround sound system is packed into these two four inch speakers. Wireless technology makes these easy to install.  Speaker cable provided if hard wired is preferred.  Compatible with most receivers. Custom audio calibration kit included. One year manufacturer warranty.","The power of a 5.1 surround sound system is packed into these two four inch speakers......"),
	(null,"Audio","Innotech Home Theater System","Innotech",00.00,649.99,"pic.png","th_pic.png","Product Description","Mini Description"),	
	(null,"Audio","Patson Electronics 2.1 Channel Soundbar","Patson Electronics",00.00,799.99,"soundbar.png","th_soundbar.png","prod desc","mini desc"),
	(null,"Audio","Kiawi 5.1 Home Theater System","Kiawi",00.00,399.99,"kiawi.png","th_kiawi.png","prod_desc","mini desc"),
	


	/*Accessories*/
	(null,"Accessories","Patson Electronics 6' HDMI Cable","Patson Electronics",00.00,19.99,"hdmicable.jpg","th_hdmicable.jpg","Display all video imagery at its highest level using HDMI.  This HDMI cable features up to 10.2 Gbps bandwidth and is compatible with most HDMI sources, including Blu-ray Disc players for stunning high-definition images. The 6' cable also supports HDMI Ethernet Channel (HEC) and Audio Return Channel (ARC) for wide-ranging use. One year warranty included.","Display all video imagery at its highest level using HDMI.  This HDMI cable....."),
	(null,"Accessories","Kiawi Noise Cancelling Headset","Kiawi",00.00,99.99,"kiawihs.png","th_kiawihs.png","prod desc","mini desc"),
	(null,"Accessories","Innotech Universal Remote","Innotech",00.00,299.99,"remote.jpg","th_remote.jpg","Now you can control every component in your home with one remote! This universal remote features a touch LCD screen that can operate up to ten different devices in your home, including your television, receiver, Blu-ray player, fireplace, ceiling fans, and much more. It also features favorite channel icons, AM/FM radio tuner, channel preview, and one touch functions.  Easy set up. Rechargeable lithium ion battery.  Includes a one year manufacturer warranty.","Now you can control every component in your home with one remote! This universal remote....."),
	(null,"Accessories","Innotech Wireless Headset","Innotech",00.00,149.99,"headset.png","th_headset.png","Product Description","mini description"),
	(null,"Accessories","Miatchi Slim Wall Mount","Miatchi",00.00,129.99,"mount.png","th_mount.png","prod desc","mini desc"),	

	/*Screens*/
	(null,"Screens","Innotech 92" Projection Screen","Innotech",92.00,179.99,"screen.png","th_screen.png","Product description","mini description"), 
	(null,"Screens","Wave 100-inch Fixed Frame Projection Screen","Wave",100.00,299.99,"wave.png","th_wave.png","Product Descprtion","mini desc"),	
	(null,"Screens","Wave 100-inch Ceiling Mounted Projection Screen","Wave",100.00,149.99,"wave2.png",th_wave2.png","Product Desc","mini desc"),
	(null,"Screens","Wave 106-inch Electric Slide Down Projection Screen","Wave",106.00,299.99,"wave3.png","th_wave2.png","Product Desc","mini desc"),
	(null,"Screens","Innotech 60-inch Floor Rising Projection Screen","Innotech",60.00,119.99,"innoscreen.png","th_innoscreen.png","Product Desc","miniDesc"),

	/*Projectors*/
	(null,"Projectors","Patson Electronics 4K Projector","Patson Electronics",00.00,14999.99,"4k.png","th_4k.png","Product Description","Mini Description"),
	(null,"Projectors","Miatchi HD Projector","Miatchi",00.00,799.99,"miatchi.png","th_miatchi.png","Product Description","mini description"),
	(null,"Projectors","Patson Electronics HD Projector","Patson Electronics",00.00,3499.99,"HDP.png","th_HDP.png","Product Description","mini Description");
	
	
	
	



CREATE TABLE user(
	id INT PRIMARY KEY auto_increment,
	username CHAR(10),
	password CHAR(6),
	privilege ENUM('normal','admin')
);

INSERT INTO user
	
	VALUES
	(null,'boss','boss','admin');



SELECT * FROM products;
SELECT * FROM user;