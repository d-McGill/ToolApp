

CREATE TABLE users (
  GUID int(11) PRIMARY KEY AUTO_INCREMENT,
  email varchar(255),
  password varchar(255),
  firstname varchar(255),
  surname varchar(255)
);

CREATE TABLE manDetail(
  manId int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(255),
  phone int(11),
  adress varchar(255),
  postcode varchar(255),
  purchaseDate DATE
);

CREATE TABLE tools (
  toolId int(11) PRIMARY KEY AUTO_INCREMENT,
  description varchar(255),
  status varchar(255),
  asetNum varchar(255),
  cat varchar(255),
  make varchar(255),
  model varchar(255),
  serialNum varchar(255),
  teamIssued varchar(255),
  dateIssued DATE,
  serviceDate DATE,
  serviceItems varchar(255),
  manID int(11),
  FOREIGN KEY (manId) REFERENCES manDetail(manId)
);

CREATE TABLE parts(
  partId int(11) PRIMARY KEY AUTO_INCREMENT,
  toolId int(11),
  FOREIGN KEY ( toolId) REFERENCES tools(toolId),
  name varchar(255),
  price (11)
);


INSERT INTO `parts` (`partID`, `name`, `price`)
VALUES (1, 'filter', 20.99 );


INSERT INTO `users` (`GUID`, `email`, `password`,`firstname`, `surname`)
VALUES (1, 'admin@admin.com', 'password','john','smith');


INSERT INTO `tools` (`toolId`, `description`, `status`, `asetNum`, `cat`,`make`, `model`, `serialNum`, `teamIssued`, `dateIssued`, `serviceDate`, `serviceItems`)
VALUES(1, 'Core Drill', 'Active', 'CD 001', 'Electrical Tools', 'BOSH', `model`, '0089', 'FFE', '2021-02-28', '2022-02-28', 'Filter');
