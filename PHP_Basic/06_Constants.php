<?php

//! PHP Constants
//? Constants are like variables, except that once they are defined they cannot be changed or undefined. 



//! To create a constant, use the define() function. 

//* Syntax

//? define(name, value);

//* Parameters:
//? name: Specifies the name of the constant
//? value: Specifies the value of the constant



// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;

// define("SITE_NAME", "A Luxury Car Rental");
// echo SITE_NAME;
// echo "<br>";


//! PHP const Keyword

// const MYCAR = "Volvo , BMW , Audi";
// echo MYCAR;




//! NOTE 

//* const vs. define()

//? const cannot be created inside another block scope, like inside a function or inside an if statement.
//? define can be created inside another block scope.


//! PHP Constant Arrays

// define("cars", [
//     "Alfa Romeo",
//     "BMW",
//     "Toyota"
// ]);
// echo cars[0];
// echo "<br>";

// echo cars[1];
// echo "<br>";

// echo cars[2];
// echo "<br>";

// print_r(cars)


//! Constants are Global
//? Constants are automatically global and can be used across the entire script.

// define("GREETING", "Welcome to W3Schools.com!");

// function myTest()
// {
//     echo GREETING;
// }

// myTest();

?>




<?php

//! PHP Magic Constants 



//! __CLASS__	        
//? If used inside a class, the class name is returned.	

// class Fruits
// {
//     public function myValue()
//     {
//         return __CLASS__;
//     }
// }
// $kiwi = new Fruits();
// echo $kiwi->myValue();


//! __DIR__	            
//? The directory of the file.	

// echo __DIR__;

//! __FILE__	        
//? The file name including the full path.	

// echo __FILE__;

//! __FUNCTION__	    
//? If inside a function, the function name is returned.	

// function myValue()
// {
//     return __FUNCTION__;
// }
// echo myValue();

//! __LINE__	        
//? The current line number.	

// echo __LINE__;

//! __METHOD__	        
//? If used inside a function that belongs to a class, both class and function name is returned.	

// class Fruits {
//   public function myValue(){
//     return __METHOD__;
//   }
// }
// $kiwi = new Fruits();
// echo $kiwi->myValue();


//! __NAMESPACE__	    
//? If used inside a namespace, the name of the namespace is returned.	

//  namespace myArea;

// function myValue()
// {
//     return __NAMESPACE__;
// }

// echo myValue();

//! __TRAIT__	        
//? If used inside a trait, the trait name is returned.	

// trait message1 {
//   public function msg1() {
//     echo __TRAIT__; 
//   }
// }

// class Welcome {
//   use message1;
// }

// $obj = new Welcome();
// $obj->msg1();


//! ClassName::class	
//? Returns the name of the specified class and the name of the namespace, if any.

// namespace myArea;

// class Fruits {
//   public function myValue(){
//     return Fruits::class;
//   }
// }

// $kiwi = new Fruits();
// echo $kiwi->myValue();



//! Note:

//* The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.




// $n = 50;

// for ($i = 1; $i <= $n; $i++) {   // Outer loop controls rows
//     for ($j = 1; $j <= $i; $j++) { // Inner loop prints numbers in each row
//         echo $j;
//     }
//     echo "<br>";
// }



// for ($i = 0; $i <= $n; $i++) {

//     for ($j = 0; $j <= $i; $j++) {
//         echo "* ";
//     }
// echo "<br>";
// }

?>