<?php
//! primary keys, foreign keys, unique keys, candidate keys, composite keys, and super keys.

//? MySQL uses various types of keys to manage data efficiently and maintain relationships between tables.
//? These include primary keys, foreign keys, unique keys, candidate keys, composite keys, and super keys.
//? Each key type serves a specific purpose in ensuring data integrity and enabling efficient data retrieval. 

//* Key Types in MySQL:

//! Primary Key:
//? Uniquely identifies each record in a table. It must be unique and cannot contain NULL values.
//? A table can have only one primary key, which may consist of single or multiple columns. 

//! Foreign Key:
//? Establishes a link between data in one table and data in another table. 
//? It ensures referential integrity by referencing the primary key of another table, preventing orphaned records. 

//! Unique Key:
//? Ensures that all values in a column or a set of columns are unique, similar to a primary key but can allow one NULL value. 

//! Candidate Key:
//? Any column or set of columns that can uniquely identify a record in a table. A primary key is chosen from the candidate keys. 

//! Composite Key:
//? A key made up of two or more columns that together uniquely identify a record. This is useful when no single column can ensure uniqueness on its own. 

//! Super Key:
//? A set of attributes that can uniquely identify a record in a table. A super key can contain additional attributes that are not necessary for uniqueness. 

//! Alternate Key:
//? A candidate key that is not selected as the primary key. It still ensures uniqueness and can be used for accessing records. 








//* Primary Key:

//!  📌 What is a Primary Key in MySQL?

//? A Primary Key is a column (or a combination of columns) in a table that uniquely identifies each row (record) in that table.

//!  📖 Key characteristics:

// * ✅ It must be unique for every row.
// * ✅ It cannot contain NULL values.
// * ✅ A table can have only one primary key (but it can be a composite of multiple columns).
// * ✅ It ensures data integrity — no two rows can have the same primary key value.



//!  📌 Example 1: Single-column Primary Key

// CREATE TABLE students (
//     student_id INT PRIMARY KEY,
//     fname VARCHAR(50),
//     lname VARCHAR(50),
//     email VARCHAR(100)
// );


//? Explanation:

// * Here, student_id is the primary key.
// * It will uniquely identify each student in the students table.
// * No two students can have the same student_id, and it can’t be NULL.



//!  📌 Example 2: Primary Key with AUTO\_INCREMENT

//? Commonly, primary keys are auto-incremented for automatically assigning unique IDs.

// CREATE TABLE students (
//     student_id INT AUTO_INCREMENT PRIMARY KEY,
//     fname VARCHAR(50),
//     lname VARCHAR(50),
//     email VARCHAR(100)
// );

//? Explanation:

// * student_id will start from 1 (or specified start value) and increment automatically for each new row.
// * You don’t need to manually insert its value.



//!  📌 Example 3: Composite (Multiple-column) Primary Key

//? You can create a primary key on more than one column, called a composite key.

// CREATE TABLE enrollments (
//     student_id INT,
//     course_id INT,
//     enrollment_date DATE,
//     PRIMARY KEY (student_id, course_id)
// );

//? Explanation:

// * The combination of student_id and course_id must be unique.
// * This means a student cannot enroll in the same course twice.
// * Neither student_id nor course_id can be NULL for any record.



//!  📌 Why use a Primary Key?

// * To maintain uniqueness.
// * To ensure data integrity.
// * It’s essential for defining relationships (foreign keys) in relational databases.



//!  ✅ Summary:

//*  Feature                     Description                                      

//?  Uniqueness                  No duplicate values allowed                      
//?  Not Null                    Cannot have NULL values                          
//?  Single or Multiple columns  Can be one or multiple columns (composite key)   
//?  Only one per table          A table can have only one primary key definition 




//* Foreign Key:

//!  📌 What is a Foreign Key in MySQL?

//? A Foreign Key is a field (or combination of fields) in one table that references the Primary Key in another table.
//? It’s used to link two tables together and maintain referential integrity — ensuring that relationships between records remain valid.

//!  📖 Key Characteristics:

// * ✅ The column(s) in the child table references the primary key in the parent table.
// * ✅ It ensures that the value in the foreign key column must exist in the parent table or be NULL (if allowed).
// * ✅ Prevents orphaned records — records in the child table without a matching parent.

//!  📌 Example:

//!  📄 1️⃣ Parent Table: students


// CREATE TABLE students (
//     student_id INT PRIMARY KEY,
//     fname VARCHAR(50),
//     lname VARCHAR(50)
// );

//!  📄 2️⃣ Child Table: enrollments


// CREATE TABLE enrollments (
//     enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
//     student_id INT,
//     course_name VARCHAR(100),
//     enrollment_date DATE,
//     FOREIGN KEY (student_id) REFERENCES students(student_id)
// );

//? Explanation:

// * student_id in enrollments table is a foreign key.
// * It references student_id in students table.
// * You cannot insert a record into enrollments if the student_id does not exist in students.
// * If a student is deleted or updated, the related enrollments can be restricted or cascaded depending on constraints.

//!  📌 How Referential Integrity Works:

//? ✔️ Valid Insert:


// INSERT INTO students (student_id, fname, lname) VALUES (1, 'Pradip', 'Parmar');
// INSERT INTO enrollments (student_id, course_name, enrollment_date) VALUES (1, 'PHP', '2025-07-04');

//? ❌ Invalid Insert:


// INSERT INTO enrollments (student_id, course_name, enrollment_date) VALUES (2, 'Python', '2025-07-04');

// *→ Error: Because there’s no student with student_id = 2 in the students table.*

//!  📌 On Delete / On Update Rules (Optional)

//? When defining a foreign key, you can also control what happens when a parent record is deleted or updated:


// CREATE TABLE enrollments (
//     enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
//     student_id INT,
//     course_name VARCHAR(100),
//     enrollment_date DATE,
//     FOREIGN KEY (student_id) REFERENCES students(student_id)
//         ON DELETE CASCADE
//         ON UPDATE CASCADE
// );

//! Options:

// * ON DELETE CASCADE → delete related child records when parent is deleted.
// * ON UPDATE CASCADE → automatically update related child records if parent key changes.
// * ON DELETE SET NULL → set child record to NULL if parent is deleted.
// * ON DELETE RESTRICT → prevent deletion of parent if related child exists.

//!  ✅ Summary:

//*  Feature                    Description                                                    

//?  Links tables               Connects child table to parent table using key relationship    
//?  Ensures data integrity     Prevents orphaned records and invalid references               
//?  Referential actions        Can define what happens to child data when parent data changes 
//?  References primary/unique  Must reference a primary key or unique key in the parent table 

//!  ✅ Diagram:

//* students (Parent Table)

//?  student_id  fname   lname  
//   1           Pradip  Parmar 


//? enrollments (Child Table)
//*  enrollment_id  student_id  course_name  enrollment_date 
//      1              1           PHP          2025-07-04     



//* Unique Key:

//!  📌 What is a Unique Key in MySQL?

//? A Unique Key (or Unique Constraint) ensures that all values in a column (or a combination of columns)
//? are unique — no two rows can have the same value in those columns.

//! Unlike a Primary Key:

// * ✅ A table can have multiple unique keys.
// * ✅ Unique keys allow one NULL value per column (since NULL is not considered equal to another NULL in SQL).

//!  📖 Key Characteristics:

// * ✅ Enforces uniqueness of values.
// * ✅ A table can have multiple unique keys.
// * ✅ Allows one NULL value per column.
// * ✅ Often used for fields like email, username, phone_number where uniqueness matters.

//!  📌 Example 1: Single-column Unique Key

// CREATE TABLE users (
//     user_id INT PRIMARY KEY AUTO_INCREMENT,
//     username VARCHAR(50) UNIQUE,
//     email VARCHAR(100),
//     phone VARCHAR(15)
// );

//? Explanation:

// * username column must have unique values.
// * No two users can have the same username.
// * But other columns like email and phone are not restricted.

//!  📌 Example 2: Defining Unique Key on Multiple Columns (Composite Unique Key)

// CREATE TABLE registrations (
//     reg_id INT PRIMARY KEY AUTO_INCREMENT,
//     event_id INT,
//     participant_email VARCHAR(100),
//     UNIQUE (event_id, participant_email)
// );

//? Explanation:

// * Combination of event_id and participant_email must be unique.
// * A participant can register only once for the same event.
// * But can register for different events.

//!  📌 Example 3: Adding Unique Key to an Existing Table

// ALTER TABLE users ADD UNIQUE (email);

//? Explanation:

// * Adds a unique constraint on email column in users table.
// * Now both username and email must be unique.

//!  📌 Behavior with NULL Values

//! Important difference from Primary Key:

// * Unique key columns can have NULL values.
// * Multiple NULLs are allowed if no value is assigned.

//? Example:

// INSERT INTO users (username, email) VALUES ('pradip', 'pradip@gmail.com');
// INSERT INTO users (username, email) VALUES ('john', NULL);
// INSERT INTO users (username, email) VALUES ('jane', NULL); -- ✅ Allowed

//! Why?

// * SQL treats NULL as "unknown", and two NULLs are not considered equal — so they don’t violate the uniqueness.

//!  ✅ Summary:

//*  Feature                         Description                                           

//?  Ensures uniqueness              Values in the column(s) must be unique                
//?  Allows NULL                     One or more NULL values allowed in a unique column    
//?  Multiple unique keys per table  A table can have several unique keys                  
//?  Difference from Primary Key     Primary Key enforces uniqueness + NOT NULL constraint 

//!  ✅ Diagram:

//! users

//*  user_id  username  email            

//  1        pradip    pradip@gmail.com  
//  2        john      NULL              
//  3        jane      NULL               ✅ Allowed




//* Candidate Key:

//!  📌 What is a Candidate Key in MySQL (and RDBMS in general)?

//? A Candidate Key is any column or combination of columns that can uniquely identify each record in a table.

// * ✅ A table can have multiple candidate keys.
// * ✅ From these candidate keys, one is chosen as the Primary Key.
// * ✅ The rest are called Alternate Keys.
//!  📖 Key Characteristics:

// * ✅ Uniquely identifies each record in a table.
// * ✅ Can be one column or a combination of multiple columns.
// * ✅ No NULL values allowed (since they must uniquely identify records).
// * ✅ A table can have multiple candidate keys.
// * ✅ One candidate key becomes the Primary Key.
//!  📌 Example:

//* Imagine a students table like this:

// CREATE TABLE students (
//     student_id INT,
//     email VARCHAR(100),
//     phone VARCHAR(20),
//     registration_number VARCHAR(50)
// );

//! Possible Candidate Keys:

// * student_id
// * email
// * registration_number

//? Each of these can uniquely identify a student — so all three are candidate keys.

//? From these, one is chosen as the Primary Key.

//? For example:

// ALTER TABLE students ADD PRIMARY KEY (student_id);

//? Then the remaining ones like email or registration_number can be declared as Unique Keys if uniqueness needs to be enforced.
//!  📌 Example: Multiple Candidate Keys in Action

// CREATE TABLE employees (
//     employee_id INT,
//     national_id VARCHAR(20),
//     email VARCHAR(100),
//     phone_number VARCHAR(20)
// );

//! Candidate Keys:

// * employee_id
// * national_id
// * email

//? All three can uniquely identify a record.
//? We choose one as the Primary Key:

// ALTER TABLE employees ADD PRIMARY KEY (employee_id);

//? Optionally, others can be enforced as Unique Keys:

// ALTER TABLE employees ADD UNIQUE (national_id);
// ALTER TABLE employees ADD UNIQUE (email);
//!  ✅ Summary Table:

//*  Key Type       Description                                                Can have NULL  Number per table 

//?  Primary Key    Chosen candidate key to uniquely identify each record      ❌              1                
//?  Candidate Key  Any field(s) that could uniquely identify each record      ❌              1 or more        
//?  Unique Key     Enforces uniqueness but allows one NULL (in SQL standard)  ✅ (1 NULL)     Multiple         
//?  Alternate Key  Remaining candidate keys not chosen as Primary Key         ❌              0 or more        

//!  📌 In short:

// * Candidate Keys = possible unique identifiers.
// * Primary Key = one selected candidate key.
// * Alternate Key = remaining candidate keys.
// * Unique Key = enforces uniqueness constraint (can allow one NULL).


//* Composite Key:

//! 📌 What is a Composite Key in MySQL?

//? A Composite Key is a key made up of two or more columns combined together to uniquely identify a record in a table.

//? It’s used when:

// * No single column can uniquely identify a record on its own.
// * But the combination of certain columns can.

//! 📖 Key Characteristics:

// * ✅ Made up of multiple columns.
// * ✅ Ensures uniqueness collectively — meaning the combination of the values must be unique.
// * ✅ Can act as a Primary Key or Unique Key.
// * ✅ Each individual column can have duplicate values, but the combined values across all key columns must be unique.
// * ✅ Common in junction (associative) tables that manage many-to-many relationships.

//! 📌 Example:

//! 📄 Table: enrollments

// CREATE TABLE enrollments (
//     student_id INT,
//     course_id INT,
//     enrollment_date DATE,
//     PRIMARY KEY (student_id, course_id)
// );

//? Explanation:

// * Neither student_id nor course_id alone can uniquely identify a row.
// * But the combination of both together can.
// * A student can register for multiple courses, and each course can have multiple students — but a student can’t register for the same course twice.

//! 📌 Example Data:

//*  student\_id  course\_id  enrollment\_date 

//  101          5001        2025-07-04       
//  101          5002        2025-07-05       
//  102          5001        2025-07-04       

//? ✅ This is valid since each (student_id, course_id) pair is unique.

//? ❌ The following would be invalid:

//*  student\_id  course\_id  enrollment\_date 

//  101          5001        2025-07-04       
//  101          5001        2025-07-05       

// *→ Because the composite key (101, 5001) is repeated.*

//! 📌 Composite Unique Key (not Primary)

//? You can also create a Composite Unique Key:

// CREATE TABLE orders (
//     customer_id INT,
//     product_id INT,
//     order_date DATE,
//     UNIQUE (customer_id, product_id)
// );

//? Explanation:

// * A customer cannot order the same product more than once.
// * But no issue with multiple customers ordering the same product.

//! ✅ Summary:

//*  Feature           Description                                                    

//  Made up of        Two or more columns combined                               
//  Ensures           Collective uniqueness                                      
//  Used when         No single column can uniquely identify a row                   
//  Acts as           Primary Key or Unique Key                                      
//  Commonly used in  Many-to-many relationship tables (junction/associative tables) 

//! ✅ Quick Visual:

//! enrollments

//*  student_id  course_id   enrollment_date 

//  101         5001        2025-07-04       ✅ OK
//  101         5002        2025-07-05       ✅ OK
//  102         5001        2025-07-04       ✅ OK
//  101         5001        2025-07-06       ❌ Duplicate (composite key clash)





//* Super Key:



//! 📌 What is a Super Key in MySQL (or RDBMS theory)?

//? A Super Key is any combination of columns (attributes) that can uniquely identify a record in a table.

// * ✅ It may consist of one or more columns.
// * ✅ It can include additional unnecessary columns along with those needed for uniqueness.
// * ✅ Every Candidate Key is a Super Key, but not every Super Key is a Candidate Key.


//! 📖 Key Characteristics:

// * ✅ Ensures uniqueness of each record.
// * ✅ May contain extra attributes not needed for uniqueness.
// * ✅ A table can have many Super Keys.
// * ✅ The minimal Super Keys (with no extra attributes) are called Candidate Keys.


//! 📌 Example:

//? Let’s consider this table:

// CREATE TABLE employees (
//     emp_id INT,
//     emp_email VARCHAR(100),
//     emp_phone VARCHAR(20),
//     emp_name VARCHAR(50)
// );

//? Assume

// * emp_id is unique.
// * emp_email is unique.


//! 📌 Possible Super Keys:

//*  Combination of Columns            Can Uniquely Identify?    Is it a Candidate Key? 

//?  emp_id                          ✅                         ✅                      
//?  emp_email                       ✅                         ✅                      
//?  emp_id, emp_email               ✅                         ❌ (extra column added) 
//?  emp_id, emp_phone               ✅ (if emp\_id is unique)  ❌                      
//?  emp_id, emp_name                ✅                         ❌                      
//?  emp_email, emp_phone, emp_name  ✅                         ❌                      

//! Explanation

// * All combinations that can uniquely identify a row are Super Keys.
// * The minimal combinations (emp_id and emp_email) without unnecessary columns are Candidate Keys.
// * Others with extra columns are just Super Keys, not Candidate Keys.


//! 📌 Visual Concept:

//? If you imagine it like a set:

// * Super Keys = { all possible unique-identifying combinations }
// * Candidate Keys ⊆ Super Keys (minimal subsets)
// * Primary Key ∈ Candidate Keys (one chosen)


//! ✅ Summary:

//?  Key Type       Can Uniquely Identify       Contains Extra Columns          Number per Table     

//?  Super Key          ✅                      Can have extra columns          Many                 
//?  Candidate Key      ✅                      No (minimal)                    One or more (subset) 
//?  Primary Key        ✅                      No (chosen candidate)           Exactly one          


//! 📌 Quick Example:

//? employees

//*  emp_id  emp_email       emp_phone   emp_name  

//  1       a@company.com   9876543210  John      
//  2       b@company.com   8765432109  Alice     


//! Possible Super Keys:

// * emp_id
// * emp_email
// * emp_id, emp_name
// * emp_id, emp_email
// * emp_email, emp_phone
// * etc.

//! Candidate Keys:

// * emp_id
// * emp_email

//! Primary Key:

// * Choose one, e.g. emp_id



//* Alternate Key:

//! 📌 What is an Alternate Key in MySQL (and RDBMS theory)?

//? An Alternate Key is:

// * A Candidate Key that is not chosen as the Primary Key.
// * It still has the capability to uniquely identify a record in a table.
// * You can enforce its uniqueness using a UNIQUE constraint.

//! 📖 Key Characteristics:

// * ✅ It ensures uniqueness just like a Primary Key.
// * ✅ A table can have multiple alternate keys.
// * ✅ It can be used to access records efficiently.
// * ✅ Can be enforced with a UNIQUE constraint.

//! 📌 Example:

//? Let’s consider this table:

// CREATE TABLE employees (
//     emp_id INT,
//     emp_email VARCHAR(100),
//     emp_national_id VARCHAR(20),
//     emp_name VARCHAR(50)
// );

//? Candidate Keys:

// * `emp_id` (unique for each employee)
// * `emp_email` (unique for each employee)
// * `emp_national_id` (unique national identity number)

//! 📄 Suppose we choose:

// PRIMARY KEY (emp_id)

//? Then:

// * `emp_email` and `emp_national_id` become Alternate Keys.

//? To enforce their uniqueness:

// ALTER TABLE employees ADD UNIQUE (emp_email);
// ALTER TABLE employees ADD UNIQUE (emp_national_id);

//? Now:

// * `emp_id` is the Primary Key
// * `emp_email` and `emp_national_id` are Alternate Keys (enforced by UNIQUE constraints)

//! ✅ Summary Table:

//*  Key Type       Description                                                            

//?  Primary Key    One selected Candidate Key, uniquely identifies each record            
//?  Candidate Key  Any key that could uniquely identify a record                          
//?  Alternate Key  Candidate Keys not selected as Primary Key but still ensure uniqueness 
//?  Unique Key     Enforces uniqueness (may allow one NULL if not a Candidate Key)        

//! 📌 Visual Example:

//* Table: employees

//!  emp\_id  emp\_email                             emp\_national\_id  emp\_name 

//  1        [a@company.com](mailto:a@company.com)  AB1234             John      
//  2        [b@company.com](mailto:b@company.com)  XY9876             Alice     

// * Primary Key: `emp_id`
// * Alternate Keys: `emp_email`, `emp_national_id`

//   (each unique, enforced with UNIQUE constraint)

//! ✅ Quick Recap:

// * Candidate Keys: Possible unique identifiers.
// * Primary Key: Chosen Candidate Key.
// * Alternate Keys: Remaining Candidate Keys.
// * Unique Key: Any column(s) with enforced uniqueness.

?> 
<?php ?>