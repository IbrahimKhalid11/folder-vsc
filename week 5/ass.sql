
-- ass 1
SELECT DISTINCT productCode , priceEach  FROM `orderdetails` WHERE priceEach>100 
AND productCode LIKE 'S18%';
-- ass2
SELECT paymentDate , amount FROM `payments` WHERE paymentDate LIKE '%05' OR  paymentDate LIKE '%06';
-- ass3
SELECT customerName, creditLimit,country FROM `customers` WHERE country='usa' order BY creditLimit DESC limit 1 offset 4;