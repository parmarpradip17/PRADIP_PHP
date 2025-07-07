<?php
//! MySQL Create Table 

//* String Datatypes in MySQL 


//!  name                   size

//* CHAR                     0 to 255
//* VARCHAR                  0 to 65535 
//* BINARY                   
//* VARBINARY                    
//* TINYTEXT                  255 characters
//* TEXT                      65,535 bytes
//* MEDIUMTEXT                16,777,215 character   
//* LONGTEXT                  4,294,967,295 character  
//* TINYBLOB                  255 bytes   
//* BLOB                      65,535 bytes
//* MEDIUMBLOB                16,777,215 bytes   
//* LONGBLOB                  4,294,967,295 bytes  
//* ENUM                      list up to 65535 values
//* SET                       list up to 64 values




//! MySQL Create Table

// create table personal( 
// id int,
// name varchar(50),
// birth_date date,
// phone varchar(12),
// gender varchar(1)
// );


//! MySQL Insert

// insert into personal(id , name , birth_date, phone,gender)
// value(1,"parmar pradip","2005-06-17","8160422007","M")	


//! MySQL INSERT Multiple Rows
// insert into personal(id , name , birth_date, phone,gender)
// value
// (1,"parmar pradip","2005-06-17","8160422007","M")	,
// (2,"lakani harsh","2005-08-31","8160422007","M")	,
// (3,"gajera dhruv","2004-09-22","8160422007","M")	,
// (4,"patel Drasti","2005-12-11","8992422002","F")	,
// (4,"patel dhruvi","2005-11-10","8992422002","F")	,
// (4,"parmar rajnish","2005-12-11","8160422007","M")	;


//! MySQL Constraints 
//? syntax

// CREATE TABLE table_name (
// id int not null unique,
// name varchar(50) not null,
// age int not null check(age>=18),
// gender varchar(10)not null,
// phone varchar(10) not null unique,
// city varchar(10)not null default'ahemdabad'
// );

// ? example
// insert into collage_info (id,name,age,gender,phone,city)
// values
// (1,"parmar pradip","21","M","8160422007","vanthali"),
// (2,"lakani harsh","22","M","8160222007","junagadh"),
// (3,"gajera dhruv","20","M","8160322007","junagadh"),
// (4,"patel Drasti","19","F","8164422007","dungari"),
// (5,"patel dhruvi","19","F","8160444007","rajkot");



//! Not NULL
// insert into collage_info (id,name,age,gender,phone)
// values
// (6,"patel riya","21","F","8160444657");



//! MySQL SELECT With WHERE Clause
// ? syntax 

// select column1,column2,column3,...... 
// from table_name;

// select column1,column2,column3,...... 
// from table_name;
// where condition  

// select * 
// from table_name

//* WHERE condition Operators
//! Operators       condition

//? =                Equal
//? >                greater then
//? <                less then
//? >=               greater then or Equal
//? <=               less then or Equal
//? <> or !=         not Equal
//? BETWEEN          between a certain range
//? LIKE             search for pattern
//? IN               To specify Multiple possible values for a column 


//? example
// select * from collage_info;

// select id,name,age from collage_info;

//! As 
//? The AS command is used to rename a column or table with an alias.
// select id as Id,name as Student,age as Age from collage_info;

//? example
// select id, name , gender , age from collage_info
// where gender = "M" and age >= 20;

// select * from collage_info
// where city != 'junagadh';



//! Operators ( IN , NOTIN)

// select * from collage_info
// where city IN ('junagadh','rajkot');

// select * from collage_info
// where city NOTIN ('junagadh','rajkot');

// ? between not between

// select * from collage_info
// where city between 'junagadh' or 'rajkot';

// select * from collage_info
// where city not between 'junagadh' and 'rajkot' and age between 18 and 20 ;


// select * from collage_info
// where city not between 'junagadh' or 'rajkot' and age between 18 and 20 ;

// select * from personal
// where birth_date between "2005-01-01" and "2005-12-31";

// ? LIKE
// select * from personal
// where name LIKE "%a%" ;

// select * from personal
// where birth_date LIKE "%17%" ;

//! MySQL Regular Expression 

//! MySQL ORDER BY & DISTINCT 

//! MySQL IS NULL & IS NOT NULL

//! MySQL LIMIT & OFFSET

//? syntex

// SELECT column1,column2,column3..
// FROM table_name
// WHERE condition
// LIMIT number;


//! Aggregate functions in MySQL Count Sum Min Max Avg

// SELECT count(column_name)
// FROM table_name
// WHERE condition

// SELECT Sum(column_name)
// FROM table_name
// WHERE condition

// SELECT Min(column_name)
// FROM table_name
// WHERE condition

// SELECT Max(column_name)
// FROM table_name
// WHERE condition

// SELECT Avg(column_name)
// FROM table_name
// WHERE condition


//! MySQL COMMIT & ROLLBACK 

//! MySQL DELETE 

// delete FROM city WHERE cid BETWEEN 5 AND 8;


//! MySQL constraints in MySQL

//* NOT NULL
//* UNIQUE
//* DEFAULT
//* CHECK
//* PRIMARY KEY 
//* FOREIGN KEY 

//* PRIMARY KEY 
// create table city (
// cid int not null auto_increment,
// cityname varchar(50)not null,
// primary key(cid)
// );


//* FOREIGN KEY 

// create table city (
// cid int not null auto_increment,
// cityname varchar(50)not null,
// primary key(cid)
// );

// ?

// insert into city (cityname)
// values
// ('Junagadh'),
// ('Rajkot'),
// ('Ananad'),
// ('Vadodra');
// ?

// create table personal (
// id int not null ,
// name varchar(50) not null ,
// percentage int not null,
// age int not null,
// gender varchar(1) not null,
// city int not null,
// primary key(id),
// foreign key(city) references city(cid)
// );

// ?

// INSERT INTO personal (id, name, percentage, age, gender, city)
// VALUES
// (1, "Ram Kumar", 45, 19, "M", 1),
// (2, "Sarita Kumari", 55, 22, "F", 2),
// (3, "Salman Khan", 62, 20, "M", 1),
// (4, "Juhi Chawla", 47, 18, "F", 3),
// (5, "Anil Kapoor", 74, 22, "M", 1),
// (6, "John Abraham", 64, 21, "M", 2),
// (7, "Shahid Kapoor", 52, 20, "M", 1);



//! ✅ 1. NOT NULL

//? Ensures a column cannot have a NULL value.

//! 🔹Usage:

// CREATE TABLE students (
//   id INT NOT NULL,
//   name VARCHAR(100) NOT NULL
// );

//! 🔹Explanation:

// * You must provide a value for id and name when inserting.

//! ✅ 2. UNIQUE

//? Ensures all values in a column are different (no duplicates).

//! 🔹Usage:

// CREATE TABLE employees (
//   emp_id INT UNIQUE,
//   email VARCHAR(100) UNIQUE
// );

//! 🔹Explanation:

// * Each emp_id and email must be unique across the table.

//! ✅ 3. DEFAULT

//? Sets a default value if no value is provided during insert.

//! 🔹Usage:

// CREATE TABLE users (
//   id INT,
//   city VARCHAR(50) DEFAULT 'Unknown'
// );

//! 🔹Explanation:

// * If you insert without specifying a city, 'Unknown' will be stored.

//! ✅ 4. CHECK

//? Ensures that a column’s value satisfies a specific condition.

//? > ✅ Supported in MySQL 8.0+ (older versions ignored it).

//! 🔹Usage:

// CREATE TABLE products (
//   id INT,
//   price DECIMAL(10, 2),
//   CHECK (price >= 0)
// );

//! 🔹Explanation:

// * The price must be 0 or greater.

//! ✅ 5. PRIMARY KEY

//? Uniquely identifies each row — must be unique and NOT NULL.

//! 🔹Usage:

// CREATE TABLE departments (
//   dept_id INT PRIMARY KEY,
//   dept_name VARCHAR(100)
// );

//! 🔹Explanation:

// * dept_id is the main unique identifier for each record.

//! ✅ 6. FOREIGN KEY

//? Creates a link between two tables. It refers to the PRIMARY KEY of another table.

//! 🔹Usage:


// CREATE TABLE city (
//   id INT PRIMARY KEY,
//   city_name VARCHAR(100)
// );

// CREATE TABLE personal (
//   id INT PRIMARY KEY,
//   name VARCHAR(100),
//   city_id INT,
//   FOREIGN KEY (city_id) REFERENCES city(id)
// );

//! 🔹Explanation:

// * The personal table’s city_id must match a valid id from the city table.
// * This enforces relational integrity.

//! ✅ Full Table Example:


// CREATE TABLE student (
//   roll_no INT PRIMARY KEY,
//   name VARCHAR(50) NOT NULL,
//   email VARCHAR(100) UNIQUE,
//   gender CHAR(1) CHECK (gender IN ('M', 'F')),
//   city VARCHAR(50) DEFAULT 'Unknown',
//   class_id INT,
//   FOREIGN KEY (class_id) REFERENCES class(id)
// );


// ! MySQL INNER JOIN 

//? syntax

// SELECT columns
// FROM table1
// INNER JOIN table2
// ON table1.column_name = table2.column_name;


// SELECT * FROM personal p inner join city c
// on p.city = c.cid;

// SELECT p.id , p.name , p.percentage , p.age , p.gender, c.cityname
//  FROM personal p inner join city c
// on p.city = c.cid
// where c.cityname = "junagadh"
// order by p.percentage;

//! MySQL LEFT JOIN & RIGHT JOIN  

//? syntax LEFT JOIN

// SELECT columns
// FROM table1
// LEFT JOIN table2
// ON table1.column_name = table2.column_name;

// select p.id , p.name , p.percentage, p.age ,p.gender, c.cityname
// from personal p left join city c 
// on p .city = c.cid
// where gender = "M";

//? syntax RIGHT JOIN

// SELECT columns
// FROM table1
// RIGHT JOIN table2
// ON table1.column_name = table2.column_name;

//! MySQL CROSS JOIN

//? syntax CROSS JOIN

// SELECT columns
// FROM table1
// LEFT JOIN table2
// ON table1.column_name = table2.column_name;

// select p.id , p.name AS NAME ,c.cityname AS CITY
// from personal p CROSS join city c ;

// ✅ Step-by-step solution:

//? 1. Create the cities table correctly:

// CREATE TABLE cities (
//     city_id INT PRIMARY KEY,
//     cityname VARCHAR(100) NOT NULL
// );

// INSERT INTO cities (city_id, cityname)
// VALUES
// (1, 'Junagadh'),
// (2, 'Rajkot'),
// (3, 'Anand'),
// (4, 'Vadodra');

//? 2. Create the courses table correctly:

// CREATE TABLE courses (
//     course_id INT PRIMARY KEY,
//     course_name VARCHAR(100) NOT NULL
// );

// INSERT INTO courses (course_id, course_name)
// VALUES
// (1, 'Btech'),
// (2, 'BCA'),
// (3, 'MBA');


//? 3. Now, create the students table:

// CREATE TABLE students (
//     id INT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     percentage INT,
//     age INT,
//     gender CHAR(1),
//     city INT,
//     courses INT,
//     FOREIGN KEY (city) REFERENCES cities(city_id),
//     FOREIGN KEY (courses) REFERENCES courses(course_id)
// );

// INSERT INTO students (id, name, percentage, age, gender, city, courses)
// VALUES
// (1, 'Ram Kumar', 45, 19, 'M', 1, 1),
// (2, 'Sarita Kumari', 55, 22, 'F', 2, 2),
// (3, 'Salman Khan', 62, 20, 'M', 1, 1),
// (4, 'Juhi Chawla', 47, 18, 'F', 3, 1),
// (5, 'Anil Kapoor', 74, 22, 'M', 1, 3),
// (6, 'John Abraham', 64, 21, 'M', 2, 2),
// (7, 'Shahid Kapoor', 52, 20, 'M', 1, 3);

//?  CROSS JOIN
// SELECT * 
// FROM students p 
// INNER JOIN cities c ON p.city = c.cid 
// INNER JOIN courses cr ON p.courses = cr.course_id;


//! MySQL GROUP BY & HAVING Clause 

//? syntax

// SELECT columns
// FROM table_name
// WHERE condition
// GROUP BY column_name(s);


// SELECT columns
// FROM table1
// INNER JOIN table2 ON table1.column_name = table2.column_name
// WHERE condition
// GROUP BY column_name(s);

// SELECT c.cityname , count(s.city)
// from students s inner join cities c 
// on s.city = c.city_id
// group by city;



// SELECT c.cityname , count(s.city) as total
// from students s inner join cities c 
// on s.city = c.city_id
// where s.age >= 20
// group by city
// order by count(s.city);


// ??  HAVING Clause 

//? syntax

// SELECT columns
// FROM table_name
// GROUP BY column_name(s)
// HAVING condition;

// SELECT c.cityname, COUNT(s.city) AS total
// FROM students s
// INNER JOIN cities c ON s.city = c.city_id
// WHERE s.age >= 20
// GROUP BY s.city
// HAVING COUNT(s.city) >= 3
// ORDER BY COUNT(s.city);


//! MySQL SubQuery with EXISTS & NOT EXISTS 

//? syntax

// SELECT columns
// FROM table1 
// WHERE 
// column = (SELECT column FROM table WHERE condition);

//! EXISTS

// SELECT columns
// FROM table1 
// WHERE 
// EXISTS (SELECT column FROM table WHERE condition);

//! NOT EXISTS

// SELECT columns
// FROM table1 
// WHERE 
// NOT EXISTS (SELECT column FROM table WHERE condition);

// select name from students 
// where courses in ( select course_id from courses where course_name in ("MBA","Btech"));

// select name from students 
// where exists ( select course_id from courses where course_name in ("BCA"));

// select name from students 
// where not exists ( select course_id from courses where course_name in ("BCA"));


//! MySQL UNION & UNION ALL

//? syntax

// SELECT column1 ,column2 FROM table1
// UNION / UNION ALL
// SELECT column1 ,column2 FROM table2;


// select age from students
// union 
// select age from lecturers

// select s.name,s.age,c.cityname 
// from students s inner join cities c
// on s.city = c.city_id
// where c.cityname= "Junagadh"

// union all
// select l.name,l.age,ci.cityname 
//  from lecturers l inner join cities ci
// on l.city = ci.city_id
// where ci.cityname= "Junagadh"


//! MySQL IF & CASE Statement 

//? IF Clause

// SELECT column1 ,column2
// IF(Condition , TRUE Result , FALSE Result) AS alias_name
// FROM table_name



// SELECT id, name , percentage , 
// if(percentage >= 33 , "pass" , "fail") as result
// from students;

//? CASE Clause

//? syntax 

// SELECT column1 ,column2
// CASE

// WHEN Condition1 THEN result1
// WHEN Condition2 THEN result2
// WHEN Condition3 THEN result3
// ELSE result alias_name
// END AS alias_name
// FROM table_name


// SELECT id,name,percentage,
// CASE
// 	WHEN percentage >= 80 and percentage <= 100 THEN "Merit"
// 	WHEN percentage >= 60 and percentage < 80 THEN "1st dividion"
// 	WHEN percentage >= 45 and percentage < 60 THEN "2ed division"
//     WHEN percentage >= 33 and percentage < 45 THEN "3rd division"
//     WHEN percentage < 33  THEN "Failed"
// 	ELSE "Not Correct %"
// END AS Grade
// FROM students
// order by percentage desc;


//?

// update students SET
// percentage = (CASE id
// 	when 8 then 86
// 	when 9 then 66
//     when 11 then 69

// END )
// where id in (8,9,11);


//! MySQL Arithmetic Functions 

//? The image lists arithmetic functions available in MySQL.
//? Here's a categorized and slightly explained version of each:

//!  Basic Arithmetic & Rounding Functions

//*  Function                      Description                                                                 

//?  PI()                        Returns the value of π (approx. 3.141593)                                   
//?  ROUND(x)                    Rounds x to the nearest integer                                           
//?  CEIL(x) or CEILING(x)     Rounds x up to the nearest integer                                    
//?  FLOOR(x)                    Rounds x down to the nearest integer                                  
//?  POW(x, y) or POWER(x, y)  Raises x to the power of y                                              
//?  SQRT(x)                     Returns the square root of x                                              
//?  RAND()                      Returns a random floating-point number between 0 and 1                      
//?  ABS(x)                      Returns the absolute value of x                                           
//?  SIGN(x)                     Returns -1, 0, or 1 depending on whether x is negative, zero, or positive 

//!  Trigonometric Functions

//*  Function       Description                                                                       

//?  SIN(x)       Sine of x (in radians)                                                          
//?  COS(x)       Cosine of x (in radians)                                                        
//?  TAN(x)       Tangent of x (in radians)                                                       
//?  ASIN(x)      Arc sine (inverse sine) of x, returns radians                                   
//?  ACOS(x)      Arc cosine (inverse cosine) of x, returns radians                               
//?  ATAN(x)      Arc tangent of x, returns radians                                               
//?  ATAN2(y, x)  Arc tangent of y/x, considering signs (used to determine angle in polar coords) 
//?  COT(x)       Cotangent of x (1/tan(x))                                                       
//?  RADIANS(x)   Converts degrees to radians                                                       



// select 5 + 6 AS sum, 15 - 6 AS sub , 5 * 6 AS mul ,  65 / 6   AS divsion;
// select round(4.999,2), floor(4.51), ceil(2.68) , pow(4,8) , round(sqrt(5)) , round(rand()*10);
// select abs(-89.25), sign(-98)


//! MySQL String Functions 





//! 🔤 Case Conversion

//*  Function                     Description           

//?  UPPER(str) / UCASE(str)  Converts to uppercase 
//?  LOWER(str) / LCASE(str)  Converts to lowercase 

// SELECT id , lcase(name) as Name ,percentage
// FROM students;


//! 📏 String Length

//*  Function            Description                       

//?  LENGTH(str)       Returns byte length of string     
//?  CHAR_LENGTH(str)  Returns character count of string 

// SELECT id ,name, char_length(name) as Name_lenght ,percentage
// FROM students;


//! ➕ Concatenation

//*  Function                        Description            

//?  CONCAT(str1, str2,…)          Joins strings together 
//?  CONCAT_WS(sep, str1, str2,…)  Joins with a separator 

// SELECT id ,concat(name , age) as Name ,percentage
// FROM students;


//! ✂️ Trimming

//*  Function      Description                              

//?  LTRIM(str)  Removes leading spaces                   
//?  RTRIM(str)  Removes trailing spaces                  
//?  TRIM(str)   Removes both leading and trailing spaces 

// select ltrim("  Harsh  ") AS lName, rtrim("      Harsh  ") AS RName , trim("   prsdio   ")

//! 🔍 Searching & Positioning

//*  Function                   Description                   

//?  POSITION(substr IN str)  Finds position of substring   
//?  LOCATE(substr, str)      Same as POSITION            
//?  INSTR(str, substr)       Returns position of substring 

// select position("PRadip" in "parmar pradip sureshbhai") as name

// SELECT id , name , position("ra" in name ) as Name ,percentage
// FROM students;

// select instr("parmar pradip sureshbhai" , "r") as name

// select LOCATE("r" , "parmar pradip sureshbhai" ) as name





//! 🔧 Substring Extraction

//*  Function                                   Description                              

//?  SUBSTRING(str, start, len) / SUBSTR()  Extracts part of a string                
//?  MID(str, start, len)                     Same as SUBSTRING                      
//?  SUBSTRING_INDEX(str, delim, count)       Returns substring before/after delimiter 



//! ↔️ Left/Right/Pad

//*  Function                  Description                    

//?  LEFT(str, len)          Left part of a string          
//?  RIGHT(str, len)         Right part of a string         
//?  LPAD(str, len, padstr)  Left-pads the string           
//?  RPAD(str, len, padstr)  Right-pads the string          
//?  SPACE(n)                Returns a string of n spaces 



//! 🔁 Other Useful Functions

//*  Function                          Description                             

//?  REVERSE(str)                    Reverses the string                     
//?  REPEAT(str, n)                  Repeats string n times                
//?  REPLACE(str, from_str, to_str)  Replaces substring                      
//?  STRCMP(str1, str2)              Compares two strings                    
//?  FIELD(str, str1, str2,…)        Returns index of string in list         
//?  FIND_IN_SET(str, strlist)       Finds string in a comma-separated list  
//?  FORMAT(number, decimals)        Formats number with commas and decimals 
//?  HEX(str)                        Converts to hexadecimal                 




//! MySQL ALTER Tutorial


//!  ✅ 1. Add Column

//? Used to add a new column to an existing table.

// ALTER TABLE table_name
// ADD column_name datatype;

// 🔸 Example:

// ALTER TABLE Employees
// ADD Email VARCHAR(100);



//!  🛠️ 2. Modify Column

//? Used to change the datatype or definition of an existing column.

// ALTER TABLE table_name
// MODIFY column_name datatype;

// 🔸 Example:

// ALTER TABLE Employees
// MODIFY Salary DECIMAL(12, 2);

// > ☝️ Use `CHANGE` if you also want to rename the column:

// ALTER TABLE Employees
// CHANGE old_column_name new_column_name datatype;



//!  🗑️ 3. Delete Column

//? Used to remove a column from the table.

// ALTER TABLE table_name
// DROP COLUMN column_name;

// 🔸 Example:

// ALTER TABLE Employees
// DROP COLUMN Email;




//! 🔄 1. Rename Column

// Syntax:

// ALTER TABLE table_name
// CHANGE old_column_name new_column_name datatype;

// ✅ You must specify the datatype even if it doesn’t change.

// Example:

// ALTER TABLE Employees
// CHANGE Name FullName VARCHAR(100);



//! 🏷️ 2. Rename Table

// Syntax:

// ALTER TABLE old_table_name
// RENAME TO new_table_name;

// Example:

// ALTER TABLE Employees
// RENAME TO Staff;

// > 💡 Alternative way to rename a table:

// RENAME TABLE old_table_name TO new_table_name;



//! MySQL DROP & TRUNCATE Table 

// truncate table php_pradip.pradip_parmar;
?>
<?php ?>
