<?php
// namespace mynamespace;



//* PHP What is OOP?
//? OOP stands for Object-Oriented Programming.

//? Procedural programming is about writing procedures or functions that perform operations on the data,
//? while object-oriented programming is about creating objects that contain both data and functions.

//? Object-oriented programming has several advantages over procedural programming:

//? OOP is faster and easier to execute
//? OOP provides a clear structure for the programs
//? OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
//? OOP makes it possible to create full reusable applications with less code and shorter development time


//*!  Term          Meaning                        

//?  class       Blueprint for creating objects 
//?  public      Allows access from anywhere    
//?  property    Variable inside a class        
//?  method      Function inside a class        
//?  set_name()  Sets the value of name       
//?  get_name()  Returns the value of name    
//?  $this       Refers to the current object   


//* PHP - What are Classes and Objects? 

//? Classes and objects are the two main aspects of object-oriented programming.

//? Look at the following illustration to see the difference between class and objects:

//*! class
// Fruit

//*! objects
// Apple
// Banana
// Mango

//? Another example:

//*! class
// Car

//*! objects
// Volvo
// Audi
// Toyota

//? So, a class is a template for objects, and an object is an instance of a class.

//? When the individual objects are created, they inherit all the properties and behaviors from the class,
//? but each object will have different values for the properties.








//* PHP OOP - Classes and Objects

//? A class is a template for objects, and an object is an instance of class.


//*! OOP Case
//? Let's assume we have a class named Fruit. A Fruit can have properties 
//? like name, color, weight, etc. We can define variables like $name,
//? $color, and $weight to hold the values of these properties.

//? When the individual objects (apple, banana, etc.) are created,
//? they inherit all the properties and behaviors from the class,
//? but each object will have different values for the properties.



//* Define a Class
//? A class is defined by using the class keyword, followed by the name of the class and
//? a pair of curly braces ({}). All its properties and methods go inside the braces:

//? Syntax

// class Fruit {
//   // code goes here...
// }

// class Fruit
// {
//     // Properties
//     public $name;
//     public $color;

//     // Methods
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $pradip = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
// $pradip->set_name('Parmar Pradip');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
// echo "<br>";
// echo $pradip->get_name();


// class Fruit
// {
//     // Properties
//     public $name;
//     public $color;

//     // Methods
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
//     function set_color($color)
//     {
//         $this->color = $color;
//     }
//     function get_color()
//     {
//         return $this->color;
//     }
// }

// $apple = new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();


//! PHP - The $this Keyword 

//? The $this keyword refers to the current object, and is only available inside methods.

//? The $this keyword refers to the current object within a class. It’s used to access properties and methods of that object. 

//? Look at the following example:

// class Fruit
// {
//     public $name;
// }

// $apple = new Fruit();

//? So, where can we change the value of the $name property? There are two ways:


// class Person
// {
//     public $name;
//     public function set_name($name)
//     {
//         $this->name = $name;
//     }

//     public function get_name()
//     {
//         return $this->name;
//     }
// }
// $person = new Person();
// $person->set_name("Pradip Parmar");
// echo  $person->get_name();



//*! 1. Inside the class (by adding a set_name() method and use $this):

// class Fruit
// {
//     public $name;
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
// }
// $apple = new Fruit();
// $apple->set_name("Apple");

// echo $apple->name;


//*! 2. Outside the class (by directly changing the property value):

// class Fruit
// {
//     public $name;
// }
// $apple = new Fruit();
// $apple->name = "Apple";

// echo $apple->name;


//! PHP - instanceof

//? The instanceof keyword checks if an object is an instance of a specific class or subclass. 
//? You can use the instanceof keyword to check if an object belongs to a specific class:



// class Animal {}
// class Dog extends Animal {}

// $dog = new Dog();

// if ($dog instanceof Animal) {
//     echo "Dog is an instance of Animal";
// }




// class Car
// {
//     public $modal;
//     public $year;

//     function set_name($modal)
//     {
//         $this->modal = $modal;
//     }
//     function get_name()
//     {
//         return $this->modal;
//     }
// }

// $BMW = new Car();

// // var_dump($BMW instanceof Car);

// $BMW->modal = "BMW M5 Compition";

// echo $BMW->modal;

//* PHP OOP - Constructor

//! PHP - The __construct Function
//? A constructor allows you to initialize an object's properties upon creation of the object.
//? If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
//? Notice that the construct function starts with two underscores (__)!


//? The __construct() method is a constructor — automatically called when an object is created. It’s used to initialize properties.

// class Car {
//     public $brand;

//     function __construct($brand) {
//         $this->brand = $brand;
//     }
// }

// $car = new Car("BMW - M5 CS");
// echo $car->brand; // Output: Toyota



// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
// }

// $apple = new Fruit("Apple");
// $banana = new Fruit("Banana");
// $cherry = new Fruit("Charry");

// echo $apple->get_name();

// echo "<hr>" . $banana->get_name();

// echo "<hr>" . $cherry->get_name();

// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
//     function get_color()
//     {
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();



//* PHP - The __destruct Function

//? A destructor is called when the object is destructed or the script is stopped or exited.
//? If you create a __destruct() function, PHP will automatically call this function at the end of the script.
//? Notice that the destruct function starts with two underscores (__)!

// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function __destruct()
//     {
//         echo "The fruit is {$this->name}.";
//     }
// }

// $apple = new Fruit("Apple");


// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// $apple = new Fruit("Apple", "red");

//?* Tip: As constructors and destructors helps reducing the amount of code, they are very useful!


//* PHP - Access Modifiers

//? Properties and methods can have access modifiers which control where they can be accessed.

//? There are three access modifiers:

//? public - the property or method can be accessed from everywhere. This is default
//? protected - the property or method can be accessed within the class and by classes derived from that class
//? private - the property or method can ONLY be accessed within the class

// class Fruit
// {
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR


//* PHP - What is Inheritance?

//? Inheritance in OOP = When a class derives from another class.
//? The child class will inherit all the public and protected properties and
//? methods from the parent class. In addition, it can have its own properties and methods.

//? An inherited class is defined by using the extends keyword.




// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();



//* PHP - Inheritance and the Protected Access Modifier
//? In the previous chapter we learned that protected properties or methods can be accessed
//? within the class and by classes derived from that class.

// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//     }
// }

// // Try to call all three methods from outside class
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protectedclass Fruit {

// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//         // Call protected method from within derived class - OK
//         $this->intro();
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class




// class calculation
// {
//     public $a, $b, $c;

//     function sum()
//     {
//         $this->c = $this->a + $this->b;
//         return $this->c;
//     }
//     function sub()
//     {
//         $this->c = $this->a - $this->b;
//         return $this->c;
//     }
// }

// $c1 = new calculation();

// $c1->a = 30;
// $c1->b = 26;

// $c2 = new calculation();

// $c2->a = 60;
// $c2->b = 16;


// echo "sum Value of c1 : " . $c1->sum() . "<hr>";
// echo "sub Value of c2 : " . $c2->sub();





// class Person
// {
//     public $name = "pradip";
//     public $age = 0;
//     function __construct($name = "Drasti patel parmar ", $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function show()
//     {
//         echo $this->name . " - " . $this->age;
//     }
// }
// $p1 = new Person("pradip parmar", 20);

// $p1->name = "pradip parmar";
// $p1->age = 20;

// $p1->show();


//! inheritance 
//? Inheritance allows a class (child) to inherit properties and methods from another class (parent).

// class Animal
// {
//     public function sound()
//     {
//         echo "Animal makes a sound";
//     }
// }

// class Dog extends Animal
// {
//     public function sound()
//     {
//         echo "Dog barks";
//     }
// }

// $dog = new Dog();
// $dog->sound(); 



// class employee
// {
//     public $name;
//     public $age;
//     public $salary;

//     // function __construct($n, $a, $s)
//     // {
//     //     $this->name = $n;
//     //     $this->age = $a;
//     //     $this->salary = $s;
//     // }

//     function __construct()
//     {
//         echo "<h3>Employee construct</h3>";
//     }

//     function info()
//     {
//         echo "<h3>Employee Profile</h3>";
//         echo "Employee name : " . $this->name  . "<br>";
//         echo "Employee age : " . $this->age  . "<br>";
//         echo "Employee salary : " . $this->salary  . "<br>";
//     }
// }


// class manager extends employee
// {
//     // function __construct()
//     // {
//     //     echo "<h3>Manager construct</h3>";
//     // }
// }


// $E1 = new manager("pradip parmar", 20, 20000);

// $E1->info();


//! PHP - Access Modifiers
//? ✅ Types:
//? public — accessible everywhere
//? protected — accessible in the class and child classes
//? private — accessible only in the class itself

// class Test
// {
//     public $x = 1;
//     protected $y = 2;
//     private $z = 3;

//     public function show()
//     {
//         echo $this->z; // OK
//     }
// }

// $obj = new Test();
// echo $obj->x;    // OK
// $obj1 = new Test();
// echo $obj1->y; // ❌ Error
// $obj2 = new Test();
// echo $obj2->z; // ❌ Error



// class base
// {
//     // public $name;
//     // protected $name;
//     private $name;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }

//     protected function show()
//     {
//         echo "Your Name : " . $this->name . "<br>";
//     }
// }
// class derived extends base
// {

//     public function get()
//     {
//         echo "Your Name : " . $this->name . "<br>";
//     }
// }

// // $test = new base("Pradip Parmar");
// $test = new derived("Pradip Parmar");

// // $test->name = "Parmar Pradip";

// // $test->show();
// $test->get();


//! PHP OOP Overriding Properties & Methods 

//? Child classes can override methods or properties of a parent class.

// class ParentClass
// {
//     public $name = "parent";

//     public function show()
//     {
//         echo " from parent";
//     }
// }
// class ChildClass extends ParentClass
// {
//     public $name = "child";

//     public function show()
//     {
//         echo " from child";
//     }
// }

// $new = new ParentClass();

// echo $new->name;
// $new->show();


// class base
// {
//     public $name = "parent Class";

//     public function calc($a, $b)
//     {
//         return $a * $b;
//     }
// }
// class derived extends base
// {
//     public $name = "child Class";

//     public function calc($a, $b)
//     {
//         return $a + $b;
//     }
// }
// $test = new base();
// $test1 = new derived();

// // echo $test->name;
// echo $test->calc(5, 10);
// echo "<hr>";

// // echo $test1->name;
// echo $test1->calc(5, 10);
// echo "<hr>";


//! Abstract class

//? An abstract class cannot be instantiated. It can define abstract methods that must be implemented in child classes.

// abstract class Shape
// {
//     abstract public function area();
// }

// class Circle extends Shape
// {
//     public function area()
//     {
//         return 55 + 45;
//     }
// }

// $circle = new Circle();
// echo $circle->area(); // Output: 78.5



//! Interfaces   
//? An interface defines a contract — all implementing classes must define the methods declared in the interface.

//!  Key Takeaways
//? Interface = contract
//? No method bodies, just method signatures
//? Enforced by the implements keyword
//? A class can implement multiple interfaces (comma-separated)
//? Promotes clean architecture and Dependency Inversion



//* ✅ Interface Rules
//? An interface only has method names, no code inside.
//? A class must use implements to follow the interface.
//? A class must write the actual code for all methods in the interface.



// interface parent1
// {
//     function calc($a, $b);
// }
// interface parent2
// {
//     function sub($a, $b);
// }
// interface parent3
// {
//     function mul($a, $b);
// }
// interface parent4
// {
//     function div($a, $b);
// }
// class childClass implements parent1, parent2, parent3, parent4
// {
//     public function calc($a, $b)
//     {
//         echo $a + $b;
//     }
//     public function sub($a, $b)
//     {
//         echo $a - $b;
//     }
//     public function mul($a, $b)
//     {
//         echo $a * $b;
//     }
//     public function div($a, $b)
//     {
//         echo $a / $b;
//     }
// }

// $test = new childClass();
// echo "Addition ";
// $test->calc(220, 135);
// echo "<hr> subtraction ";
// $test->sub(220, 135);
// echo "<hr> multipication ";
// $test->mul(220, 135);
// echo "<hr> division ";
// $test->div(220, 135);
// echo "<hr> ";


//! PHP OOP Static Members 

//? In PHP, a static method is a method that belongs to the class itself,
//? not to a specific object instance. You can call it without creating an object of the class.

//? Static properties or methods belong to the class, not the instance.
//? They are accessed with ClassName:: instead of $object->.

// class MathUtil
// {
//     public static $pi = 3.14;

//     public static function square($n)
//     {
//         return $n * $n;
//     }
// }

// echo MathUtil::$pi . "<hr>";            // Output: 3.14
// echo MathUtil::square(4);      // Output: 16



// class base
// {
//     public static $name = "pradip parmar";

//     // public static function show()
//     // {
//     //     // echo $this->name;
//     //     echo self::$name;
//     // }

//     // public function __construct($n)
//     // {
//     //     self::$name = $n;
//     // }
// }
// class derived extends base
// {
//     public static function show()
//     {
//         echo parent::$name;
//     }
// }

// // base::$name;
// // base::show();


// // $test = new base("Pradip Parmar");
// $test = new derived();

// $test->show();



// class Counter
// {
//     public static $count = 0;

//     public static function increment()
//     {
//         self::$count++;
//     }
//     public static function decrement()
//     {
//         self::$count--;
//     }

//     public static function getCount()
//     {
//         return self::$count;
//     }
// }

// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// Counter::increment();
// echo Counter::getCount(); // Output: 2
// Counter::decrement();
// Counter::decrement();
// Counter::decrement();
// Counter::decrement();
// Counter::decrement();
// echo "<hr>";
// echo Counter::getCount(); // Output: 2



// class domain
// {
//     protected static function getWebsiteName()
//     {
//         return "<a href='https://www.w3schools.com/php/php_oop_static_methods.asp'>W3Schools.com</a>";
//     }
// }

// class domainW3 extends domain
// {
//     public $websiteName;
//     public function __construct()
//     {
//         $this->websiteName = parent::getWebsiteName();
//     }
// }

// $domainW3 = new domainW3;
// echo $domainW3->websiteName;

//! ✅ PHP OOP – Static Properties Explained

//? In PHP, a static property belongs to the class itself,
//? not to any particular object. You can access it without creating an instance of the class.

//! 🔹 Syntax

// class ClassName {
//     public static $propertyName;
// }

// You access it using:

// ClassName::$propertyName;

// Or from within the class:

// self::$propertyName;

//! ✅ Example: Basic Static Property

// class Counter {
//     public static $count = 0;

//     public static function increment() {
//         self::$count++;
//     }

//     public static function getCount() {
//         return self::$count;
//     }
// }

// Counter::increment();
// Counter::increment();

// echo "Current Count: " . Counter::getCount(); // Output: 2

//! 🔸 Use Cases

// * Shared data across all objects of a class
// * Global state or counters
// * Configuration or constants

//! ✅ Static Property in Inheritance

// class A {
//     public static $value = "Hello from A";
// }

// class B extends A {
// }

// echo B::$value; // Output: Hello from A

// You can also override static properties in child classes if needed.

//! ⚠️ Important Notes

//*  Rule                                 Example / Explanation                        
//?  Use self:: inside the class        self::$count                               
//?  Use ClassName:: outside the class  Counter::$count                            
//?  No need to create an object          You can access directly via class name       
//?  Static properties are shared         All instances share the same static property 

//! 🔄 Comparing with Instance Properties
 
//*  Feature                Static Property         Instance Property        

//?  Belongs to             Class                   Object                   
//?  Accessed with          ClassName::$property  $object->property      
//?  Shared across objects  Yes                     No                       
//?  Memory                 Shared memory           Separate for each object 



//! PHP OOP Late Static Binding

//? ✅ What is it?
//? Late static binding lets you reference the called class in a static context, especially useful when using inheritance.

// class ParentClass
// {
//     public static function who()
//     {
//         echo __CLASS__;
//     }

//     public static function test()
//     {
//         static::who(); // late static binding
//     }
// }

// class ChildClass extends ParentClass
// {
//     public static function who()
//     {
//         echo __CLASS__;
//     }
// }

// ChildClass::test(); 




// class base
// {
//     protected static $name = "pradip parmar";

//     public function show()
//     {
//         echo static::$name . "<hr>";
//         echo self::$name ;
//     }
// }

// class derived extends base
// {
//     protected static $name = "web devloper";
// }

// $test =  new derived();
// $test->show();


//! PHP OOP - Class Constants 

//! Topic: PHP Constants in Classes
//? In PHP OOP, you can define constants inside a class using the const keyword. 
//? These are fixed values that do not change and are accessed without creating an object.

// class greet
// {
//     const LEAVING_MESSAGE = "Thank you for visiting my website";
// }
// echo greet::LEAVING_MESSAGE;



//* Constants
// class User
// {
//     const ROLE_ADMIN = 'admin';
//     const ROLE_EDITOR = 'editor';
//     const ROLE_VIEWER = 'viewer';

//     public $name;
//     public $role;

//     function __construct($name, $role)
//     {
//         $this->name = $name;
//         $this->role = $role;
//     }

//     function checkAccess()
//     {
//         if ($this->role === self::ROLE_ADMIN) {
//             echo "{$this->name} has full access.";
//         } elseif ($this->role === self::ROLE_EDITOR) {
//             echo "{$this->name} can edit content.";
//         } elseif ($this->role === self::ROLE_VIEWER) {
//             echo "{$this->name} can only view content.";
//         } else {
//             echo "Unknown role.";
//         }
//     }
// }


// $user1 = new User("Pradip", User::ROLE_ADMIN);
// $user1->checkAccess();


?>





<?php ?>




<?php





//* ✅ 1. __construct() – Constructor
//? 🔹 Purpose:
//? Automatically called when an object is created. Used to initialize properties.

//? 🧪 Example:

// class Car {
//     public $brand;
//     function __construct($brand) {
//         $this->brand = $brand;
//     }
// }
// $myCar = new Car("Toyota");
// echo $myCar->brand; // Output: Toyota



//* ✅ 2. __destruct() – Destructor
//? 🔹 Purpose:
//? Automatically called when the object is destroyed. Used for cleanup.

//? 🧪 Example:

// class Test {
//     function __destruct() {
//         echo "Object destroyed!";
//     }
// }
// $obj = new Test(); // When script ends or object is unset, destructor is called.



//* ✅ 3. $this Keyword
//? 🔹 Purpose:
//? Refers to the current object. Used to access class properties/methods inside the class.

//? 🧪 Example:

// class Person {
//     public $name;
//     function setName($name) {
//         $this->name = $name;
//     }
// }



//* ✅ 4. instanceof
//? 🔹 Purpose:
//? Used to check if an object is an instance of a class.

//? 🧪 Example:

// class Animal {}
// $dog = new Animal();

// if ($dog instanceof Animal) {
//     echo "Yes, it's an Animal.";
// }



//* ✅ 5. Inheritance
//? 🔹 Purpose:
//? One class inherits properties and methods from another class.

//? 🧪 Example:

// class Animal {
//     public function sound() {
//         echo "Animal sound";
//     }
// }

// class Dog extends Animal {
//     public function bark() {
//         echo "Woof!";
//     }
// }

// $d = new Dog();
// $d->sound(); // Inherited method
// $d->bark();  // Dog's own method



//* ✅ 6. Access Modifiers: public, private, protected
//? 🔹 Purpose:
//? Control visibility of properties/methods.

//!  Modifier     Access From Same Class  Subclass  Outside Class 

//?  public       ✅                       ✅         ✅             
//?  protected    ✅                       ✅         ❌             
//?  private      ✅                       ❌         ❌             

//? 🧪 Example:

// class Demo {
//     public $a = 1;
//     private $b = 2;
//     protected $c = 3;
// }



//* ✅ 7. Overriding Properties & Methods
//? 🔹 Purpose:
//? Child class modifies behavior of parent class.

//? 🧪 Example:

// class A {
//     function greet() {
//         echo "Hello from A";
//     }
// }

// class B extends A {
//     function greet() {
//         echo "Hello from B";
//     }
// }

// $obj = new B();
// $obj->greet(); // Output: Hello from B



//* ✅ 8. Abstract Classes
//? 🔹 Purpose:
//? Base class that cannot be instantiated; used for shared structure.

//? 🧪 Example:

// abstract class Shape {
//     abstract public function area();
// }

// class Circle extends Shape {
//     public function area() {
//         return 3.14 * 5 * 5;
//     }
// }



//* ✅ 9. Interfaces
//? 🔹 Purpose:
//? Like abstract classes, but all methods are abstract. Used for multiple inheritance or common contracts.

//? 🧪 Example:

// interface Animal {
//     public function makeSound();
// }

// class Dog implements Animal {
//     public function makeSound() {
//         echo "Bark!";
//     }
// }



//* ✅ 10. Static Members
//? 🔹 Purpose:
//? Belong to the class, not the object. Accessed with ClassName::method().

//? 🧪 Example:

// class Math {
//     public static function add($a, $b) {
//         return $a + $b;
//     }
// }
// echo Math::add(3, 4); // Output: 7



//* ✅ 11. Late Static Binding
//? 🔹 Purpose:
//? Used when you want to use the class that was called, not where the method was defined. Useful in inheritance.

//? 🧪 Example:

// class ParentClass {
//     public static function who() {
//         echo static::class;
//     }
// }

// class ChildClass extends ParentClass {}

// ChildClass::who(); // Output: ChildClass



//! PHP - What are Traits?

//? PHP only supports single inheritance: a child class can inherit only from one single parent.
//? So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
//? Traits are used to declare methods that can be used in multiple classes.
//? Traits can have methods and abstract methods that can be used in multiple classes,
//? and the methods can have any access modifier (public, private, or protected).
//? Traits are declared with the trait keyword:

//* Syntax

// trait TraitName {
//   // some code...
// }


//* To use a trait in a class, use the use keyword:


// class MyClass {
//   use TraitName;
// }








// trait message1 {
// public function msg1() {
//     echo "OOP is fun! ";
//   }
// }

// class Welcome {
//   use message1;
// }

// $obj = new Welcome();
// $obj->msg1();



// trait Sum
// {
//     public $a;
//     public $b;
//     public $c;

//     public function add()
//     {
//         $this->c = $this->a + $this->b;
//         return "this is a sum of number 1 and  number 2 <hr>" . $this->c;
//     }
// }

// class Submit
// {
//     use Sum;

//     public function __construct($a, $b)
//     {
//         $this->a = $a;
//         $this->b = $b;
//     }
// }

// $submit = new Submit(3, 20);
// echo $submit->add(); // Output: 23

// trait message1
// {
//     public function msg1()
//     {
//         echo "OOP is fun! ";
//     }
// }

// trait message2
// {
//     public function msg2()
//     {
//         echo "OOP reduces code duplication!";
//     }
// }

// class Welcome
// {
//     use message1;
// }

// class Welcome2
// {
//     use message1, message2;
// }

// $obj = new Welcome();
// $obj->msg1();
// echo "<br>";

// $obj2 = new Welcome2();
// $obj2->msg1();
// echo "<br>";
// $obj2->msg2();


//! PHP OOP Type Hinting


// function fruits(array $names)
// {
//     foreach ($names as $name) {
//         echo $name . "<br>";
//     }
// }

// $test = ["Apple", "Banana", "Orange"];
// fruits($test);


// class hello
// {
//     public function sayhello()
//     {
//         echo "hello Everyone this is by sayhello";
//     }
// }
// class bye
// {
//     public function saybye()
//     {
//         echo "bye Everyone this is by saybye";
//     }
// }

// function wow(bye $c)
// {
//     $c->saybye();
// }

// $test = new bye();

// wow($test);

// class School
// {
//     public function get_names(student $names)
//     {
//         echo "<ul>";
//         foreach ($names->Names() as $name) {
//             echo "<li>" . $name . "</li>";
//         }
//         echo "</ul>";
//     }
// }
// class student
// {
//     public function Names()
//     {
//         return ["pradip", "parmar", "drasti"];
//     }
// }

// class library {}

// $lib = new library();
// $stu = new student();
// $stu1 = new School();

// $stu1->get_names($stu);




// require 'fun.php';
// require 'test.php';


// $obj = new test\product();
// $obj1 = new pro\product();

//! PHP OOP Method Chaining

// class chaining
// {
//     public function first()
//     {
//         echo "<h1>this is a first class heading</h1>";
//         return $this;
//     }
//     public function second()
//     {
//         echo "<h2>this is a Second class heading</h2>";
//         return $this;
//     }
//     public function three()
//     {
//         echo "<h3>this is a three class heading</h3>";
//         return $this;
//     }
//     public function fourth()
//     {
//         echo "<h4>this is a fourth class heading</h4>";
//         return $this;
//     }
//     public function fiveth()
//     {
//         echo "<h5>this is a fiveth class heading</h5>";
//         return $this;
//     }
//     public function sixeth()
//     {
//         echo "<h6>this is a sixeth class heading</h6>";
//         return $this;
//     }
// }


// $chain = new chaining();

// $chain->first()->second()->three()->fourth()->fiveth()->sixeth();



// ! PHP OOP Magic Methods

// * Methods

// __construct()
// __destruct()
// __get()
// __set()
// __autoload()
// __call()
// __callStatic()
// __isset()
// __unset()
// __clone()
// __wakeup()
// __toStiring()
// __invoke()

//! __autoload()

// require 'test.php';
// require 'fun.php';



// function __autoload($a)
// {
//     require $a . ".php";
// }


// $test = new first();
// // $test = new second();

//! __get()

// class abc
// {
//     public $data = ["name" => "pradip", "learn" => "php", "fees" => "2000"];

//     public function __get($property)
//     {
//         echo "you are trying to access Non Existing or private property($property)";
//     }
// }

// $test = new abc();
// print_r($test->data);

//! __set()

// class student
// {
//     private $name;

//     public function __get($property)
//     {
//         echo "you are trying to access Non Existing or private property($property)";
//     }
//     public function __set($property, $value)
//     {
//         if (property_exists($this, $property)) {
//             $this->$property = $value;
//         } else {
//             echo "This is non existing or private Property: $property ";
//         }
//     }
// }

// $test = new student();
// // print_r($test->data);
// $test->name = "Pradip Parmar";


//! __call()
//? Purpose: Invoked when calling inaccessible or non-existing instance methods. 

// class Demo
// {
//     function __call($name, $args)
//     {
//         echo "Method $name not found!";
//     }
// }
// $obj = new Demo();
// $obj->hello();

// class student
// {
//     private $Frist_name;
//     private $last_name;

//     private function setName($fname, $lname)
//     {
//         $this->Frist_name = $fname;
//         $this->last_name = $lname;
//     }

//     public function __call($method, $arguments)
//     {
//         // echo "This is Private or Existing Method : $method";
//         // print_r($arguments);

//         if (method_exists($this, $method)) {
//             call_user_func_array([$this, $method], $arguments);
//         } else {
//             echo "Method does not existing : $method";
//         }
//     }
// }

// $test = new student();
// // print_r($test->data);
// $test->setName("Pradip", "Parmar");

// echo "<pre>";
// print_r($test);
// echo "</pre>";

//! __callStatic()
//? Purpose: Same as __call, but for static methods.

// class Demo {
//     static function __callStatic($name, $args) {
//         echo "Static method $name not found!";
//     }
// }
// Demo::hello(); 


// class stud
// {
//     private static function hello($name)

//     {
//         echo "this is a private static method <br>";
//         echo "this is a $name";
//     }
//     public static function __callStatic($method, $args)
//     {
//         // echo "this is a private method : $method";
//         if (method_exists(__CLASS__, $method)) {
//             call_user_func_array([__CLASS__, $method], $args);
//         } else {
//             echo "Method does not exist : $method";
//         }
//     }
// }

// stud::hello("Parmar Pradip");




//! __isset()

//? Purpose: Triggered when using isset() on an inaccessible or undefined property.

// class A {
//     private $x = 100;
//     function __isset($name) {
//         return isset($this->$name);
//     }
// }


// class stud
// {
//     public $course;
//     private $first_name;
//     private $last_name;
//     private $detail = ['name' => 'test name', 'age' => '20'];


//     public function setName($fname, $lname)
//     {
//         $this->first_name = $fname;
//         $this->last_name = $lname;
//     }
//     public function __isset($name)
//     {
//         echo isset($this->detail[$name]);
//     }
// }

// $test = new stud();
// // $test->course = "PHP";
// // $test->setName("parmar", "pradip");

// echo isset($test->name) . "<br>";
// echo isset($test->age);


//! __unset()
//? Purpose: Triggered when using unset() on an inaccessible or undefined property.

// class A {
//     private $x = 100;
//     function __unset($name) {
//         unset($this->$name);
//     }
// }


// class stud
// {
//     public $course = "PHP";
//     private $first_name;
//     private $last_name;
//     // private $detail = ['name' => 'test name', 'age' => '20'];


//     public function setName($fname, $lname)
//     {
//         $this->first_name = $fname;
//         $this->last_name = $lname;
//     }
//     public function __unset($name)
//     {
//         unset($this->$name);
//     }
// }

// $test = new stud();
// $test->setName("parmar", "pradip");

// unset($test->first_name);
// print_r($test);

//! __toStiring()
//? Purpose: Called when object is used as a string (echo $obj).

// class dars
// {
//     public function __toString()
//     {
//         return "can't print object as a string class :" . get_class($this);
//     }
// }
// $test = new dars();
// echo $test;

//! __sleep()

// class stud
// {
//     public $course = "PHP";
//     private $First_name;  // ✅ Fixed spelling
//     private $Last_name;

//     public function setName($fname, $lname)
//     {
//         $this->First_name = $fname;
//         $this->Last_name = $lname;
//     }

//     public function __sleep()
//     {
//         return array('First_name', 'Last_name'); // ✅ Matches property names
//     }
// }

// $obj = new stud();
// $obj->setName("parmar", "pradip");
// $srl = serialize($obj);
// echo $srl;



//! __wakeup()
//? Purpose: Called during unserialize() to reconnect or reinitialize resources like DB.

// class stud
// {
//     public $course = "PHP";
//     private $First_name;
//     private $Last_name;
//     private $Conn;

//     public function setName($fname, $lname)
//     {
//         $this->First_name = $fname;
//         $this->Last_name = $lname;
//     }

//     public function __construct()
//     {
//         // Replace "oop_practice" with your actual DB name
//         $this->Conn = mysqli_connect("localhost", "root", "", "oop_practice");

//         if (!$this->Conn) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
//     }

//     public function __sleep()
//     {
//         mysqli_close($this->Conn);
//         return array('First_name', 'Last_name');
//     }

//     public function __wakeup()
//     {
//         $this->Conn = mysqli_connect("localhost", "root", "", "oop_practice");
//         echo "This is a wakeup method. <hr>";
//     }
// }

// $obj = new stud();
// $obj->setName("parmar", "pradip");

// $srl = serialize($obj);       // __sleep called
// $unsrl = unserialize($srl);   // __wakeup called

// print_r($unsrl);

// echo $srl;



//! __clone()
//? Purpose: Called after an object is cloned. Used to copy or reset internal properties.

// class stud
// {
//     public $name;
//     public $course;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }
//     public function setCourse(course $c)
//     {
//         $this->course = $c;
//     }
// }

// class course
// {
//     public $cname;

//     public function __construct($cn)
//     {
//         $this->cname = $cn;
//     }
// }

// $student1 = new stud("pradip parmar");
// $course1 = new course("PHP");

// $student1->setCourse($course1);

// $student2 = clone $student1;

// $student2->name = "drasti patel";
// $student2->course->cname = "drasti Pradip parmar";
// // echo $student1->name;
// print_r($student1);
// print_r($student2);


//! __invoke()
//? Purpose: Called when an object is used like a function.

// class calc
// {
//     public $a, $b;

//     public function __construct($a, $b)
//     {
//         $this->a = $a;
//         $this->b = $b;
//     }

//     public function sum()
//     {
//         echo $this->a + $this->b;
//     }

//     public function __invoke()
//     {
//         echo "Addition: " . ($this->a + $this->b) . "<hr>";
//         echo "Subtraction: " . ($this->a - $this->b) . "<hr>";
//         echo "Multiplication: " . ($this->a * $this->b) . "<hr>";
//         echo "Division: " . ($this->a / $this->b) . "<hr>";
//     }
// }

// $obj = new calc(420, 20);
// // $obj->sum();
// $obj();


//! 🔮 What Are Magic Methods?

//? Magic methods in PHP are special methods that start with double underscores __.
//? These are automatically triggered by PHP during specific object events — like when an object is created,
//? a property is accessed, or a method is called.



//! 1. __construct() – Constructor

//* Triggered When: Object is created.
//* Use: Initialize values like database connections, property setup.

// class User {
//     public $name;
//     function __construct($name) {
//         $this->name = $name;
//     }
// }
// $u = new User("Pradip");
// echo $u->name;  // Output: Pradip



//! 2. __destruct() – Destructor

//* Triggered When: Script ends or object is destroyed.
//* Use: Clean up (e.g., close DB connection, delete temp files).

// class User {
//     function __destruct() {
//         echo "Object destroyed";
//     }
// }
// $u = new User();  // Output: (at the end): Object destroyed



//! 3. __get($property)

//* Triggered When: Accessing private or undefined property.
//* Use: Custom behavior for private data access.

// class Test {
//     private $name = "Pradip";
//     function __get($prop) {
//         return $this->$prop;
//     }
// }
// $t = new Test();
// echo $t->name;  // Output: Pradip



//! 4. __set($property, $value)

//* Triggered When: Setting value to private/undefined property.

// class Test {
//     private $data = [];
//     function __set($key, $value) {
//         $this->data[$key] = $value;
//     }
//     function printData() {
//         print_r($this->data);
//     }
// }
// $t = new Test();
// $t->age = 25;
// $t->printData();  // Output: Array ( [age] => 25 )



//! 5. __isset($property)

//* Triggered When: isset() is used on private/undefined property.

// class Test {
//     private $name = "Pradip";
//     function __isset($prop) {
//         return isset($this->$prop);
//     }
// }
// $t = new Test();
// var_dump(isset($t->name));  // Output: bool(true)



//! 6. __unset($property)

//* Triggered When: unset() is used on private/undefined property.

// class Test {
//     private $name = "Pradip";
//     function __unset($prop) {
//         unset($this->$prop);
//     }
// }
// $t = new Test();
// unset($t->name);  // Internally triggers __unset



//! 7. __call($method, $arguments)

//* Triggered When: Call to undefined or inaccessible method.

// class Demo {
//     function __call($name, $args) {
//         echo "Calling method '$name' with args: " . implode(', ', $args);
//     }
// }
// $d = new Demo();
// $d->greet("Pradip");  // Output: Calling method 'greet' with args: Pradip



//! 8. __callStatic($method, $arguments)

//* Triggered When: Same as __call() but for static methods.

// class Demo {
//     static function __callStatic($name, $args) {
//         echo "Static method '$name' with args: " . implode(', ', $args);
//     }
// }
// Demo::greet("World");  // Output: Static method 'greet' with args: World



//! 9. __clone()

//* Triggered When: clone keyword is used.

// class Person {
//     public $name;
//     function __clone() {
//         $this->name = "Cloned";
//     }
// }
// $p1 = new Person();
// $p1->name = "Original";
// $p2 = clone $p1;
// echo $p2->name;  // Output: Cloned



//! 10. __wakeup()

//* Triggered When: Object is unserialized().

// class Demo {
//     function __wakeup() {
//         echo "Object has been unserialized!";
//     }
// }
// $d = new Demo();
// $ser = serialize($d);
// $unser = unserialize($ser);  // Output: Object has been unserialized!



//! 11. __sleep() *(Not in your original list but paired with __wakeup)*

//* Triggered When: Object is serialized. Returns array of properties to serialize.

// class Demo {
//     private $name = "Pradip";
//     private $conn;
//     function __sleep() {
//         return ['name'];  // Only serialize 'name'
//     }
// }



//! 12. __toString()

//* Triggered When: Object is used as a string (echo $obj).

// class Demo {
//     function __toString() {
//         return "I'm an object";
//     }
// }
// $d = new Demo();
// echo $d;  // Output: I'm an object



//! 13. __invoke()

//* Triggered When: Object is called like a function.

// class Demo {
//     function __invoke($name) {
//         echo "Hello, $name!";
//     }
// }
// $d = new Demo();
// $d("Pradip");  // Output: Hello, Pradip!



//! 14. __autoload($className) *(Deprecated — use spl_autoload_register)*

//* Automatically include class files.

// function __autoload($class) {
//     include "$class.php";
// }
// $obj = new MyClass();  // Will try to load MyClass.php

//* Use modern:

// spl_autoload_register(function ($class) {
//     include $class . '.php';
// });



//! ✅ Summary: When to Use What?

//*   Magic Method               Use Case                              

//?   __construct()            Object setup                          
//?   __destruct()             Cleanup                               
//?   __get()/__set()          Accessing private/undefined props     
//?   __call()                 Handling unknown method calls         
//?   __callStatic()           Handling unknown static method calls  
//?   __isset()                Custom logic with isset()           
//?   __unset()                Custom logic with unset()           
//?   __clone()                Clone customization                   
//?   __wakeup()               Reinitialize after unserialize()    
//?   __sleep()                Control what to serialize             
//?   __toString()             Return a string when object is echoed 
//?   __invoke()               Call object like a function           
//?   __autoload()             Load classes automatically *(old)*    



//! PHP Magic Constants list    


// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __METHOD__
// __NAMESPACE__
// __TRAIT__



//! __LINE__
//? Current line number in the file. 

// echo " <h1 style='color:grey;max-width:1140px;margin:0 auto;text-align:center;'> this is a line number " . __LINE__ . "</h1>";

//! __FILE__
//? Full path and filename of the file.

// echo " <h1 style='color:grey;max-width:1140px;margin:0 auto;text-align:center;'> this is a full file Path :  " . __FILE__ . "</h1>";

//! __DIR__
//? Directory of the file.

// echo " <h1 style='color:grey;max-width:1140px;margin:0 auto;text-align:center;'> this is a DIR Path :  " . __DIR__ . "</h1>";

//! __FUNCTION__
//? Function name.

// function myname()
// {
//     echo "this is my function name : " . __FUNCTION__;
// }
// myname();

//! __CLASS__
//? Class name (case-sensitive).

// class myClass
// {
//     function myname()
//     {
//         echo "this is my class name : " . __CLASS__;
//     }
// }
// $obj = new myClass();
// echo $obj->myname();

//! __METHOD__
//? Class method name (with class).

// class myClass
// {
//     function myname()
//     {
//         echo "this is my method name : " . __METHOD__;
//     }
// }
// $obj = new myClass();
// echo $obj->myname();

//! __NAMESPACE__
//? Namespace name of the current context.
// class myClass
// {
//     function myname()
//     {
//         echo "this is my namespace name : " . __NAMESPACE__;
//     }
// }
// $obj = new myClass();
// echo $obj->myname();

//! __TRAIT__
//? Name of the trait used.

// trait mt_trait
// {
//     public function getTraitName()
//     {
//         return "this is my namespace name : " . __TRAIT__;
//     }
// }
// class myclass
// {
//     use mt_trait;
// }
// $obj = new myClass();
// echo $obj->getTraitName();


//! PHP OOP Conditional Functions list 

//! class_exists()
//! interface_exists()
//! method_exists()
//! trait_exists()
//! property_exists()
//! is_a()
//! is_subclass_of()

//! class_exists()
//? Checks if a class exists. 

// class exist {}
// if (class_exists('exist')) {
//     echo "this class was exist";
// } else {
//     echo "this class was not exist";
// }

//! interface_exists()
//? Checks if an interface is defined.

// interface myinterface {}
// class exist {}
// if (interface_exists('myinterface')) {
//     echo "this myinterface was exist" ;
// } else {
//     echo "this myinterface was not exist";
// }


//! method_exists()
//? Check if method exists in the object/class.

// class exist
// {
//     public function mymethod() {}
// }
// $obj = new exist();
// if (method_exists($obj, 'mymethod')) {
//     echo "this mymethod was exist";
// } else {
//     echo "this mymethod was not exist";
// }


//! trait_exists()
//? Check if a trait exists.

// trait mt_trait
// {
//     public function getTraitName()
//     {
//         return "this is my namespace name : " . __TRAIT__;
//     }
// }
// class myclass
// {
//     use mt_trait;
// }
// // $obj = new myClass();
// // echo $obj->getTraitName();

// if (trait_exists('mt_trait')) {
//     echo "this mt_trait was exist";
// } else {
//     echo "this mt_trait was not exist";
// }


//! property_exists()
//? Check if a property exists.

// class exist
// {
//     public $test;
//     public function mymethod() {}
// }

// if (property_exists('exist', 'test')) {
//     echo "this property_exists was exist";
// } else {
//     echo "this property_exists was not exist";
// }

//! is_a()
//? Check if object is an instance of a class.

// class exist
// {
//     public $test;
//     public function mymethod() {}
// }
// $obj = new exist();
// if (is_a($obj, 'exist')) {
//     echo "this object is of class exist";
// } else {
//     echo "this object is not of class exist";
// }


//! is_subclass_of()
//? Check if object is a subclass of a given class.


// class parentClass
// {
//     public $test;
//     public function mymethod() {}
// }
// class childClass extends parentClass {}
// $obj = new childClass();
// if (is_subclass_of($obj, 'parentClass')) {
//     echo "this \$obj is a  object of subclass of parentClass";
// } else {
//     echo "this \$obj is  not a  object of subclass of parentClass";
// }


//! PHP OOP Get method list Functions

//! get_class();
//! get_parent_class();
//! get_class_methods();
//! get_class_vars();
//! get_object_vars();
//! get_called_class();
//! get_declared_classes();
//! get_declared_interfaces();
//! get_declared_traits();
//! class_alias();




//! get_class();

// class myclass
// {
//     function name()
//     {
//         echo "Class Name : " . get_class($this) . "<hr>";
//     }
// }

// $obj = new myclass();
// $obj->name();

// echo "Class Name is : " . get_class($obj);


//! get_parent_class();

// class myclass {}

// class child extends myclass
// {
//     function name()
//     {
//         echo "Class Name : " . get_parent_class($this) . "<hr>";
//     }
// }

// $obj = new child();
// $obj->name();

// echo "Class Name is : " . get_class($obj);

//! get_class_methods();


// class mymethod
// {
//     function __construct() {}
//     function myfunction1() {}
//     function myfunction2() {}
// }

// $class_method = get_class_methods('mymethod');

// // print_r($class_method);

// foreach ($class_method as $method) {
//     echo $method . "<br>";
// }

//! get_class_vars();


// class myClass
// {
//     public $var1;
//     public $var2 = "hello";
//     public $var3 = 100;
//     private $var4;

//     function __construct()
//     {
//         print_r(get_class_vars(__CLASS__));
//     }
// }

// $obj = new myclass();
// $class_var = get_class_vars(get_class($obj));
// print_r($class_var);

//! get_object_vars();



//! get_called_class();



//! get_declared_classes();



//! get_declared_interfaces();



//! get_declared_traits();



//! class_alias();





//? 📌 Summary Table:

//!  Topic                Why It's Used                                    

//?  __construct()        Initialize object properties                     
//?  __destruct()         Cleanup before object is destroyed               
//?  $this                Refers to current object                         
//?  instanceof           Checks object class                              
//?  Inheritance          Share code between classes                       
//?  Access Modifiers     Control visibility of data                       
//?  Overriding           Change parent method behavior in child class     
//?  Abstract class       Base blueprint for other classes                 
//?  Interface            Contract all implementing classes must follow    
//?  Static Members       Share methods/properties without creating object 
//?  Late Static Binding  Refers to the class used in runtime              

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-Oriented Programming</title>
</head>

<body style="
    font-size: 23px;
    font-family: 'Segoe UI' , Tahoma, Geneva, Verdana, sans-serif;
    /* margin: 0 auto;
    max-width: 1500px;
    text-align: center; */
     ">






</body>

</html>