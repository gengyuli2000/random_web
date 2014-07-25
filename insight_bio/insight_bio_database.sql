CREATE TABLE orders
(
  	`order_id` INT AUTO_INCREMENT,
  	`name` VARCHAR(20),
    `email` VARCHAR (60),
    `phone` VARCHAR (20),
    `institution` VARCHAR (60),
    `address` VARCHAR (100),
    `product` VARCHAR (100),
    `msg` VARCHAR (300),
    `city` VARCHAR(20),
    `postcode` VARCHAR (40),
    `date` DATE (10),

    PRIMARY KEY (`order_id`)
    
);


CREATE TABLE products
(
	`product_id` INT AUTO_INCREMENT,
	`name` VARCHAR(60),
    `price` VARCHAR (20),
    `description` VARCHAR (200),
    `stock` INT,
    `pic` VARCHAR (300),
    `type` VARCHAR (20),
    `cat` VARCHAR (20),
    PRIMARY KEY (`product_id`)


);
