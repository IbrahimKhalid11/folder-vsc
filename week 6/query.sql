-- UNION to FULL JOIN
SELECT * FROM `customers` LEFT JOIN orders ON customers.customerNumber=orders.customerNumber
UNION 
SELECT * FROM `customers` RIGHT JOIN orders ON customers.customerNumber=orders.customerNumber;
-- pivat table 
CREATE TABLE course_student(
    `student_id` int(11) unsigned NOT NULL,
    `course_id` int(11) unsigned NOT NULL,
    primary key (student_id,course_id),
    CONSTRAINT student_relations
    FOREIGN KEY (student_id) references student(id) on UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT course_relations
    FOREIGN KEY (course_id) references course(id) on UPDATE CASCADE ON DELETE CASCADE

);

-- update
ALTER TABLE posts add COLUMN comments varchar(255)
ALTER TABLE posts modify COLUMN comments varchar(255)
ALTER TABLE posts add COLUMN comments varchar(255)