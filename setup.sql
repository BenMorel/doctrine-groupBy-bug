CREATE TABLE Commission (
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 merchantId int(10) unsigned NOT NULL,
 amount int(10) NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE Merchant (
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 networkId int(10) unsigned not null,
 name varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 currencyCode char(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE Network (
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 name varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO Network (name) VALUES
 ('Network 1'),
 ('Network 2'),
 ('Network 3');

INSERT INTO Merchant (networkId, name, currencyCode) VALUES
 (1, 'Merchant 1', 'EUR'),
 (1, 'Merchant 2', 'USD'),
 (2, 'Merchant 3', 'GBP'),
 (2, 'Merchant 4', 'EUR'),
 (3, 'Merchant 5', 'USD'),
 (3, 'Merchant 6', 'CAD');

INSERT INTO Commission (merchantId, amount) VALUES
 (1, 100),
 (2, 200),
 (3, 300),
 (4, 400),
 (5, 500),
 (6, 600);
