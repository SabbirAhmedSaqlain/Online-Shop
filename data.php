CREATE DATABASE content;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
   `type` varchar(255) NOT NULL, 
  `code`  varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)


CREATE TABLE `users` (

 

`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,

 `username` VARCHAR( 100 ) NOT NULL ,

 `password` VARCHAR( 100 ) NOT NULL ,

 `online` INT( 100 ) NOT NULL ,

 `email` VARCHAR( 100 ) NOT NULL ,

 `active` INT( 10 ) NOT NULL ,

 `rtime` INT( 100 ) NOT NULL

 

) 

//tblproduct

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(500)  ,

  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)



INSERT INTO `products` ( `name`, `code`, `image`, `price`,`quantity`,`type`,`description` ) VALUES
( 'ASUS K550', 'lap1', 'product-images/lap1.jpg', '25000.00','10','laptop','Processor  AMD  CPU Cache  1 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  500GB HDD');






INSERT INTO `products` ( `name`, `code`, `image`, `price`,`quantity`,`type`,`description` ) VALUES
( 'ASUS K550', 'lap1', 'product-images/lap1.jpg', '25000.00','10','laptop','Processor  AMD  CPU Cache  1 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  1TB HDD'),
('ASUS K555', 'lap2', 'product-images/lap2.jpg', '28000.00','10','laptop','Processor  AMD  CPU Cache  3 MB  Display Size  14 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  500GB HDD'),
('ASUS K565', 'lap3', 'product-images/lap3.jpg', '30000.00','10','laptop','Processor  intel CPU Cache  4 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  1TB HDD'),
('ASUS K552', 'lap4', 'product-images/lap4.jpg', '33000.00','10','laptop','Processor  AMD  CPU Cache  4MB  Display Size  14 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD 1TB HDD'),
('HP probook', 'lap5', 'product-images/lap5.jpg', '38000.00','10','laptop','Processor  intel  CPU Cache  1 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  500GB HDD'),
('HP probook', 'lap6', 'product-images/lap6.jpg', '48000.00','10','laptop','Processor  AMD  CPU Cache  4 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  1TB HDD'),
('DELL Vostro', 'lap7', 'product-images/lap7.jpg', '52000.00','10','laptop','Processor  AMD  CPU Cache  4 MB  Display Size  14 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  500GB HDD'),
('DELL Vostro', 'lap8', 'product-images/lap8.jpg', '60000.00','10','laptop','Processor  intel  CPU Cache  3 MB  Display Size  15.6 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  1TB HDD'),
('ACER', 'lap9', 'product-images/lap9.jpg', '68000.00','10','laptop','Processor  intel CPU Cache  3 MB  Display Size  14 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  500GB HDD'),
('ACER', 'lap10', 'product-images/lap10.jpg', '77000.00','10','laptop','Processor  AMD  CPU Cache  1 MB  Display Size  14 Display Type  LED Display  RAM  4GB RAM Type  DDR3L HDD  1TB HDD');


 

 



INSERT INTO `products` ( `name`, `code`, `image`, `price`,`quantity`,`type`,`description` ) VALUES
( 'CANON 50D', 'dslr1', 'product-images/dslr1.jpg', '25000.00','10','dslr','Effective Pixels - 18.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 60D', 'dslr2', 'product-images/dslr2.jpg', '28000.00','10','dslr','Effective Pixels - 16.0 megapixels  Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 70D', 'dslr3', 'product-images/dslr3.jpg', '30000.00','10','dslr','Effective Pixels - 16.0 megapixels   Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 80D', 'dslr4', 'product-images/dslr4.jpg', '33000.00','10','dslr','Effective Pixels - 19.0 megapixels   Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 90D', 'dslr5', 'product-images/dslr5.jpg', '38000.00','10','dslr','Effective Pixels - 20.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 6+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 100D', 'dslr6', 'product-images/dslr6.jpg', '48000.00','10','dslr','Effective Pixels - 20.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 6+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 110D', 'dslr7', 'product-images/dslr7.jpg', '52000.00','10','dslr','Effective Pixels - 21.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 120D', 'dslr8', 'product-images/dslr8.jpg', '60000.00','10','dslr','Effective Pixels - 22.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 6+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 130D', 'dslr9', 'product-images/dslr9.jpg', '68000.00','10','dslr','Effective Pixels - 24.0 megapixels  Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0'),
('CANON 150D', 'dslr10', 'product-images/dslr10.jpg', '77000.00','10','dslr','Effective Pixels - 32.0 megapixels Lens Mount - EF-S 18-55mm Kit Processor - Digic 4+ Sensor Type - CMOS Sensor Screen Size - 3.0');


 



 

INSERT INTO `products` ( `name`, `code`, `image`, `price`,`quantity`,`type`,`description`  ) VALUES
( 'ASUS  ', 'mon1', 'product-images/mon1.jpg', '25000.00','10','monitor','Display Size Inch  18.5 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1366 x 768 Brightness cd/m2 - 200cd/m2'),
('ASUS  ', 'mon2', 'product-images/mon2.jpg', '28000.00','10','monitor','Display Size Inch  21 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1920 x 1080 Brightness cd/m2 - 200cd/2'),
('ASUS  ', 'mon3', 'product-images/mon3.jpg', '30000.00','10','monitor','Display Size Inch  21 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1920 x 1080 Brightness cd/m2 - 200cd/m2'),
('ASUS ', 'mon4', 'product-images/mon4.jpg', '33000.00','10','monitor','Display Size Inch  18.5 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1920 x 1080 Brightness cd/m2 - 200cd/m2'),
('HP  ', 'mon5', 'product-images/mon5.jpg', '38000.00','10','monitor','Display Size Inch  24 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1366 x 768 Brightness cd/m2 - 200cd/m2'),
('HP  ', 'mon6', 'product-images/mon6.jpg', '48000.00','10','monitor','Display Size Inch  28 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1920 x 1080 Brightness cd/m2 - 200cd/m2'),
('DELL  ', 'mon7', 'product-images/mon7.jpg', '52000.00','10','monitor','Display Size Inch  27 Shape - Widescreen Display Type - LED Backlight Display Display Resolution -2560 x 1440 Brightness cd/m2 - 200cd/m2'),
('DELL  ', 'mon8', 'product-images/mon8.jpg', '60000.00','10','monitor','Display Size Inch  32 Shape - Widescreen Display Type - LED Backlight Display Display Resolution -2560 x 1440 Brightness cd/m2 - 200cd/m2'),
('ACER', 'mon9', 'product-images/mon9.jpg', '68000.00','10','monitor','Display Size Inch  42 Shape - Widescreen Display Type - LED Backlight Display Display Resolution - 1366 x 768 Brightness cd/m2 - 200cd/m2'),
('ACER', 'mon10', 'product-images/mon10.jpg', '77000.00','10','monitor','Display Size Inch  42 Shape - Widescreen Display Type - LED Backlight Display Display Resolution -2560 x 1440 Brightness cd/m2 - 200cd/m2');




 



INSERT INTO `products` ( `name`, `code`, `image`, `price`,`quantity`,`type`,`description`  ) VALUES
( 'CANON 50D', 'print1', 'product-images/print1.jpg', '25000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 1200 x 1200dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 60D', 'print2', 'product-images/print2.jpg', '28000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 1200 x 1200dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 70D', 'print3', 'product-images/print3.jpg', '30000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 1200 x 1600dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 80D', 'print4', 'product-images/print4.jpg', '33000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 1200 x 1600dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 90D', 'print5', 'product-images/print5.jpg', '38000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 4800 x 1200 dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 100D', 'print6', 'product-images/print6.jpg', '48000.00','10','printer','Printer Type - Single Function Color INK First Page Print - 15Sec Print Resolution (Pixel) 4800 x 1200 dpi Duplex Print - Manual Weight (Kg) - 2.02Kg '),
('CANON 110D', 'print7', 'product-images/print7.jpg', '52000.00','10','printer','Multifunction Color INK Print Resolution (Pixel) - 4800 x 1200 Weight (Kg) - 5.5kg Warranty - 1 year Consumable - 810 XL ,811 XL'),
('CANON 120D', 'print8', 'product-images/print8.jpg', '60000.00','10','printer','Multifunction Color INK Print Resolution (Pixel) - 4800 x 1200 Weight (Kg) - 5.5kg Warranty - 1 year Consumable - 810 XL ,811 XL'),

('CANON 130D', 'print9', 'product-images/print9.jpg', '68000.00','10','printer','Printer Type - Single Function Mono Laser First Page Print - 7.8sec Print Resolution (Pixel) - 4800 x 1200dpi Duplex Print - Manual Processor Speed - 600MHz'),
('CANON 150D', 'print10', 'product-images/print10.jpg', '77000.00','10','printer','Printer Type - Single Function Mono Laser First Page Print - 7.8sec Print Resolution (Pixel) - 1200 x 1200dpi Duplex Print - Manual Processor Speed - 600MHz');