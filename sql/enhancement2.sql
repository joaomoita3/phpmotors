
-- Query 1
INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword, clientLevel, comment) 
VALUES ('Tony', 'Stark', 'Tony@starkent.com', 'IamIronM@n', 1, 'I am the real Ironman');

-- Query 2
UPDATE clients SET clientLevel = 3 WHERE clientLevel = 1;

-- Query 3
UPDATE inventory SET invDescription = REPLACE(invDescription, 'small interior', 'spacious interior') WHERE invMake = 'GM';

-- Query 4
SELECT invModel, classificationName
FROM inventory
INNER JOIN carclassification ON 
inventory.classificationId = carclassification.classificationId
where inventory.classificationId = 1;

-- Query 5

DELETE FROM inventory WHERE invMake = 'jeep';

-- Query 6

UPDATE inventory SET invImage = concat(invImage, "/phpmotors"), invThumbnail = concat(invThumbnail, "/phpmotors");