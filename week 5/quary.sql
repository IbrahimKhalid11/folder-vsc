all_number BETWEEN 120 and 130;
SELECT customerNumber ,customerName,country FROM `customers` WHERE country IN("france","usa","Australia");
SELECT * FROM `orders` where requiredDate LIKE '%-03-%';
==
SELECT * FROM `orders` where month( requiredDate) = 03;
ORDER BY contactFirstName,contactLastName  ASC;
ORDER BY contactFirstName,contactLastName  ASC limit 1 offset 1; --second order

SELECT state , SUM(creditLimit) as sumcredit FROM `customers` WHERE country='usa'
GROUP BY state;

--  condition before order or any thing

SELECT state , SUM(creditLimit) FROM `customers` WHERE country='usa' && creditLimit >100000
GROUP BY state;



--------------------------------------------
SELECT state , max(creditLimit) FROM `customers` WHERE country='usa' 
GROUP BY state
HAVING  max(creditLimit) >100000;


-- ass 1
SELECT DISTINCT productCode , priceEach  FROM `orderdetails` WHERE priceEach>100 
AND productCode LIKE 'S18%';
-- ass2
SELECT paymentDate , amount FROM `payments` WHERE paymentDate LIKE '%05' OR  paymentDate LIKE '%06';
-- ass3
SELECT customerName, creditLimit,country FROM `customers` WHERE country='usa' order BY creditLimit DESC limit 1 offset 4;


--  join 3 table
SELECT orders.orderDate, orderdetails.productCode ,customers.customerName FROM `orders` 
JOIN customers JOIN orderdetails ON customers.customerNumber=orders.customerNumber
 AND orders.orderNumber=orderdetails.orderNumber;
--  join in same table
SELECT emp.firstName ,emp.lastName , emp.employeeNumber,employees.firstName,employees.lastName,employees.employeeNumber FROM `employees` as emp JOIN employees on
employees.employeeNumber=emp.reportsTo;
--  employeeNumber as forekey to emp