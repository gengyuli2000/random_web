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
    PRIMARY KEY (`order_id`)
    
);