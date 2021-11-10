CREATE TABLE Pharmacies
(
    ID       int          NOT NULL AUTO_INCREMENT,
    Location varchar(255) NOT NULL,

    PRIMARY KEY (ID)
);

CREATE TABLE Producers
(
    ID      int         NOT NULL AUTO_INCREMENT,
    Name    varchar(50) NOT NULL,
    Country varchar(50) NOT NULL,

    PRIMARY KEY (ID)
);
CREATE TABLE Medicines
(
    ID          int         NOT NULL AUTO_INCREMENT,
    Name        varchar(50) NOT NULL,
    Description varchar(50) NOT NULL,
    Price       int         NOT NULL,
    ProducerId  int,
    FOREIGN KEY (ProducerId) REFERENCES Producers (ID),
    PRIMARY KEY (ID)
);

CREATE TABLE Available
(
    ID         int NOT NULL AUTO_INCREMENT,
    MedicineId int,
    PharmacyId int,
    Price      int NOT NULL,
    FOREIGN KEY (MedicineId) REFERENCES Medicines (ID),
    FOREIGN KEY (PharmacyId) REFERENCES Pharmacies (ID),
    PRIMARY KEY (ID)
);


CREATE TABLE