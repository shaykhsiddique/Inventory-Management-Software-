create table products(
	product_code varchar(50) not null,
    product_name varchar(100) not null,
    product_brand varchar(100),
    product_price_sale numeric(10, 2) not null,
    product_price_buy numeric(10, 2) not null,
    product_type varchar(20),
    quantity numeric(5) not null,
    PRIMARY KEY (product_code),
    FOREIGN key (product_code) REFERENCES sales(product_code)
);

create table orders(
	order_number numeric(30) not null,
	product_code varchar(50) not null
);
create table billings(
	order_number numeric(30) not null,
	product_code varchar(50) not null
);

create table sales(
	order_number numeric(30) not null DEFAULT '201800000000' AUTO_INCREMENT,
	user_name varchar(20) not null,
	sales_quantity numeric(20) ,
	sales_time timestamp,
	sales_revenue numeric(30) ,
	PRIMARY key(order_number)
);

create table customer(
	customer_id varchar(20) not null AUTO_INCREMENT,
	customer_name varchar(20) not null,
	customer_phone char(15),
	customer_address varchar(100),
	PRIMARY key(customer_id)
);


-- products input database
INSERT INTO `products` (`product_code`, `product_name`, `product_brand`, `product_price_sale`, `product_price_buy`, `product_type`, `quantity`) VALUES ('65644545223', 'Yamaha_RTR', 'Yamaha', '202000', '200000', 'Motorcyle', '5');

INSERT INTO `products` (`product_code`, `product_name`, `product_brand`, `product_price_sale`, `product_price_buy`, `product_type`, `quantity`) VALUES ('25654546561', 'Yamaha_FZ', 'Yamaha', '302000', '300000', 'Motorcyle', '3');

INSERT INTO `products` (`product_code`, `product_name`, `product_brand`, `product_price_sale`, `product_price_buy`, `product_type`, `quantity`) VALUES ('36945875544', 'Palsar 150cc', 'Bajaj', '252000', '250000', 'Motorcyle', '7');


INSERT INTO `products` (`product_code`, `product_name`, `product_brand`, `product_price_sale`, `product_price_buy`, `product_type`, `quantity`) VALUES ('03244558886', 'Car Tire', 'Danlop', '5500', '5000', 'Tire', '15');

-- order input database



INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '65644541111', 'admin', '654522135685', '3', '04:09:28', '2018-02-13', '557.38');


INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '65644545223', 'admin', '654522135563', '3', '05:09:28', '2018-02-17', '657.38');



INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '65644545322', 'admin', '654522135325', '3', '07:20:28', '2018-02-22', '745.68');


INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '65644455223', 'admin', '456522135685', '3', '08:09:28', '2018-03-13', '5857.38');



INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '65654445223', 'admin', '6545122135685', '3', '09:29:28', '2018-05-14', '557.38');


INSERT INTO sales (order_number, product_code, user_name, customer_id, sales_quantity, sales_time, sales_date, sales_revenue) VALUES (NULL, '75644545223', 'admin', '654522153685', '3', '04:09:28', '2018-07-17', '100.00');