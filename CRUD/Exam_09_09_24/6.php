CREATE TABLE TABLE1(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(20));
    
    
    CREATE TABLE TABLE2(
    ID INT PRIMARY KEY AUTO_INCREMENT,
        TABLE1_ID INT,
        FOREIGN KEY(TABLE1_ID) REFERENCES TABLE1(ID));
        
        CREATE TABLE TABLE3(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            TABLE2_ID INT,
            FOREIGN KEY(TABLE2_ID)REFERENCES TABLE2(ID));

INSERT INTO TABLE1(NAME) VALUES('SUMAN');
INSERT INTO TABLE2(TABLE1_ID) VALUES (1);
INSERT INTO TABLE3(TABLE2_ID) VALUES (1);

DELETE FROM TABLE3 WHERE ID=1;
DELETE FROM TABLE2 WHERE ID=1;
DELETE FROM TABLE1 WHERE ID=1;