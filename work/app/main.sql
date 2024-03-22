CREATE TABLE mst_staff (
    code INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(15),
    password VARCHAR(32),
    PRIMARY KEY (code)
);

insert into mst_staff (name, password) values ("ろくまる", "123456789");