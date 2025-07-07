<!--! variables  -->

<!-- ? type -->

<!--* A variable is a container used to store data — like text, numbers, or more complex data types. -->
<!--* var_dump -->


<!--! Datatype  -->

<!-- ? type -->

<!--* number -->
<!--* string -->
<!--* float -->
<!--* boolean -->
<!--* array -->
<!--* object -->
<!--* null -->

<!--! String's methods -->

<!--?  Function                   Description                                   Example                          -->

<!--*  echo, print            Output a string                              echo "Hello";                  -->
<!--*  strlen()               String length                                strlen("PHP") → 3            -->
<!--*  str_word_count()       Count words                                  str_word_count("Hello World")  -->
<!--*  strrev()               Reverse a string                             strrev("hello") → "olleh"    -->
<!--*  strpos()               Find position of first match                 strpos("hello", "e") → 1     -->
<!--*  stripos()              Case-insensitive version of strpos           stripos("Hello", "h") → 0    -->
<!--*  empty()                Check if string is empty                     empty("") → true         -->
<!--*  isset()                Check if variable exists                     isset($x)                  -->
<!--*  is_string()            Check if variable is string                  is_string("PHP") → true  -->
<!--*  str_replace()          Replace part of string                       str_replace("world", "PHP", "Hello world")  -->
<!--*  substr()               Get part of string                           substr("Hello", 1, 3) → "ell"             -->
<!--*  trim()                 Remove whitespace                            trim("  hi  ") → "hi"                     -->
<!--*  ltrim()                Left trim                                    ltrim("  hi") → "hi"                      -->
<!--*  rtrim()                Right trim                                   rtrim("hi  ") → "hi"                      -->
<!--*  strtolower()           Convert to lowercase                         strtolower("PHP") → "php"                 -->
<!--*  strtoupper()           Convert to uppercase                         strtoupper("php") → "PHP"                 -->
<!--*  ucfirst()              Capitalize first letter                      ucfirst("php") → "Php"                    -->
<!--*  lcfirst()              Lowercase first letter                       lcfirst("PHP") → "pHP"                    -->
<!--*  ucwords()              Capitalize first letter of each word         ucwords("hello world")                      -->
<!--*  nl2br()                Add <br> to new lines in string              nl2br("Line1\nLine2")  -->
<!--*  htmlspecialchars()     Convert special HTML chars                   < → &lt;  -->
<!--*  explode()              Split string into array                      explode(" ", "Hello World")  -->
<!--*  implode() / join()     Join array into string                       implode("-", ["a", "b", "c"])  -->
<!--*  number_format()        Format numbers as strings                    number_format(100000) → 100,000  -->
<!--*  strcmp()               Binary-safe string compare                   strcmp("a", "b") → -1           -->
<!--*  strcasecmp()           Case-insensitive compare                     strcasecmp("a", "A") → 0        -->
<!--*  strncasecmp()          Compare first n chars (case-insens.)         strncasecmp("Hello", "hello", 5)  -->
<!--*  md5()                  Creates a 32-character hash of a string      md5("hello") → 5d41402abc4b2a76b9719d911017c592           -->
<!--*  sha1()                 Creates a 40-character hash of a string      sha1("hello") → aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d  -->
<!--*  base64_encode()        Encodes data in base64 format                base64_encode("php") → cGhw                               -->
<!--*  base64_decode()        Decodes base64 back to original              base64_decode("cGhw") → php                               -->


<!--! PHP Numbers  -->

<!-- ? type -->

<!--* Integer -->
<!--* Float -->
<!--* Number Strings -->
<!--* Infinity -->
<!--* NaN -->



<!--! PHP Casting  -->

<!-- ? type -->

<!--* (string) - Converts to data type String -->
<!--* (int) - Converts to data type Integer -->
<!--* (float) - Converts to data type Float -->
<!--* (bool) - Converts to data type Boolean -->
<!--* (array) - Converts to data type Array -->
<!--* (object) - Converts to data type Object -->
<!--* (unset) - Converts to data type NULL -->


<!--! Math Funtion  -->

<!-- ? type -->

<!--*  abs(x)          -->
<!--*  round(x)        -->
<!--*  ceil(x)         -->
<!--*  floor(x)        -->
<!--*  max(x, y, ...)  -->
<!--*  min(x, y, ...)  -->
<!--*  sqrt(x)         -->
<!--*  pow(x, y)       -->
<!--*  pi() or M_PI    -->


<!--!  PHP Constants  -->

<!-- ? type -->

<!--* define() -->
<!--* const  -->


<!--! Operators  -->

<!-- ? type -->

<!--* Arithmetic: +, -,    *, /, % -->
<!--* Assignment: =, +=, -= -->
<!--* Comparison: ==, !=, >, <, === -->
<!--* Logical: &&, ||, ! -->
<!--* Increment/Decrement operators: ++, -- -->


<!--! Condition statement  -->

<!-- ? type -->

<!--*  if/else            Conditional logic  -->
<!--*  switch             Multiple fixed options  -->
<!--*  for                Counted loops  -->
<!--*  while              Loop with unknown iterations  -->
<!--*  do...while         Loop that runs at least once  -->
<!--*  foreach            Loop through arrays  -->


<!--! function  -->

<!-- ? type -->

<!--*   Create a Function                     -->
<!--*   Call a Function                       -->
<!--*   PHP Function Arguments                -->
<!--*   PHP Default Argument Value            -->
<!--*   PHP Functions - Returning values      -->
<!--*   Passing Arguments by Reference        -->
<!--*   Variable Number of Arguments          -->
<!--*   PHP is a Loosely Typed Language       -->
<!--*   PHP Return Type Declarations          -->


<!--/////////  -->
<!--! Array -->
<!--/////////  -->

<!-- //!  1. Array Creation -->

<!-- //? Function              Purpose                                        Example                   -->
<!--* array()         Create simple array                             array(1, 2, 3)          -->
<!--* range()         Create sequential array                         range(1, 10, 2)         -->
<!--* compact()       From variable names to associative array        compact("name", "age")  -->
<!--* array_fill()    Fill array with repeated values                 array_fill(0, 5, "A")   -->


<!-- //!  2. Add/Remove Elements -->

<!-- ?   Function             What It Does                                  Position Affected       -->

<!--*   array_push()         Add to end                                  End                   -->
<!--*   array_pop()          Remove last item                            End                   -->
<!--*   array_unshift()      Add to beginning                            Start                 -->
<!--*   array_shift()        Remove first item                           Start                 -->
<!--*   unset()              Remove any specific element by key/index    Any index             -->
<!--*   array_splice()       Remove/replace any portion                  Any range or slice    -->


<!-- //!  3. Searching & Checking -->

<!--?  Function              What It Checks                     Returns               -->

<!--*  in_array()          If value exists                true/false          -->
<!--*  array_search()      Finds value and returns key    index/key or false  -->
<!--*  array_key_exists()  If key exists (even if null)   true/false          -->
<!--*  isset()             If key exists and is not null  true/false          -->



<!-- //!  4. Sorting -->

<!-- ?  Function    Sorts By  Order       Keys Preserved?  -->

<!--*  sort()    Value     Ascending   ❌ (reindexed)    -->
<!--*  rsort()   Value     Descending  ❌ (reindexed)    -->
<!--*  asort()   Value     Ascending   ✅                -->
<!--*  arsort()  Value     Descending  ✅                -->
<!--*  ksort()   Key       Ascending   ✅                -->
<!--*  krsort()  Key       Descending  ✅                -->
<!--*  usort()   Value     Custom      ❌ (reindexed)    -->



<!-- //!  5. Combining / Splitting -->

<!-- ?  Function                   Purpose                              Returns            -->

<!--*  array_merge()            Merge arrays                         One flat array     -->
<!--*  array_merge_recursive()  Merge with duplicate keys as arrays  Nested array       -->
<!--*  array_combine()          One array as keys, one as values     Associative array  -->
<!--*  array_chunk()            Split into smaller arrays            Array of arrays    -->
<!--*  array_slice()            Extract part of an array             Partial array      -->
<!--*  explode()                String → Array (by delimiter)        Array              -->
<!--*  implode()                Array → String (join by glue)        String             -->

<!-- //!  6. Modifying / Transforming -->

<!--?  Function           Description                              -->

<!--*  array_map()      Apply function to each element           -->
<!--*  array_filter()   Filter elements using a callback         -->
<!--*  array_reduce()   Reduce array to single value             -->
<!--*  array_walk()     Apply function to each element (by ref)  -->
<!--*  array_replace()  Replace array elements                   -->


<!-- //!  7. Utility -->

<!-- ?  Function             Description                  -->

<!-- //*  count()            Number of elements in array  -->
<!-- //*  sizeof()           Alias of count()           -->
<!-- //*  array_keys()       Get all keys                 -->
<!-- //*  array_values()     Get all values               -->
<!-- //*  array_unique()     Remove duplicate values      -->
<!-- //*  array_reverse()    Reverse array                -->
<!-- //*  array_sum()        Sum of numeric array values  -->
<!-- //*  array_product()    Product of numeric values    -->
<!-- //*  array_key_first()  Get the first key            -->
<!-- //*  array_key_last()   Get the last key             -->


<!--//!  8. Array Comparison -->

<!--?  Function                   Description                      -->

<!--*  array_diff()             Difference of arrays (values)    -->
<!--*  array_diff_assoc()       Difference with keys             -->
<!--*  array_intersect()        Intersection of arrays (values)  -->
<!--*  array_intersect_assoc()  Intersection with keys           -->


<!--//!  9. Miscellaneous -->

<!--?  Function          Description                                            -->

<!--*  array_column()  Return values from a column in multidimensional array  -->
<!--*  array_flip()    Flip keys and values                                   -->
<!--*  shuffle()       Randomize array                                         -->


<!--! PHP Global Variables - Superglobals  -->

<!--? The PHP superglobal variables -->


<!--*   $GLOBALS    -->
<!--*   $_SERVER    -->
<!--*   $_REQUEST   -->
<!--*   $_POST      -->
<!--*   $_GET       -->
<!--*   $_FILES     -->
<!--*   $_ENV       -->
<!--*   $_COOKIE    -->
<!--*   $_SESSION   -->

<!--! PHP Regular Expression Functions-->

<!-- ? type -->

<!--! Function	                    Description -->

<!--* preg_match()                    Returns 1 if the pattern was found in the string and 0 if not -->
<!--* preg_match_all()                Returns the number of times the pattern was found in the string, which may also be 0 -->
<!--* preg_replace()                  Returns a new string where matched patterns have been replaced with another string -->


<!--! Regular Expression Modifiers -->


<!-- ? Modifier	Description	Try it -->

<!--* i	Performs a case-insensitive search	 -->
<!--* m	Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match the beginning or end of each line)	 -->
<!--* u	Enables correct matching of UTF-8 encoded patterns	 -->


<!--//! Regular Expression Patterns -->


<!-- ?  Expression	    Description	Try it -->

<!--* [abc]	        Find one or many of the characters inside the brackets	 -->
<!--* [^abc]	    Find any character NOT between the brackets	 -->
<!--* [a-z]	        Find any character alphabetically between two letters	 -->
<!--* [A-z]	        Find any character alphabetically between a specified upper-case letter and a specified lower-case letter	 -->
<!--* [A-Z]	        Find any character alphabetically between two upper-case letters.	 -->
<!--* [123]	        Find one or many of the digits inside the brackets	 -->
<!--* [0-5]	        Find any digits between the two numbers	 -->
<!--* [0-9]	        Find any digits	 -->


<!--//! Metacharacters -->


<!-- ? Metacharacter	Description	Try it -->

<!--*    |	            Find a match for any one of the patterns separated by | as in: cat|dog|fish	 -->
<!--*    .	            Find any character	 -->
<!--*    ^	            Finds a match as the beginning of a string as in: ^Hello	 -->
<!--*    $	            Finds a match at the end of the string as in: World$	 -->
<!--*    \d	            Find any digits	 -->
<!--*    \D	            Find any non-digits	 -->
<!--*    \s	            Find any whitespace character	 -->
<!--*    \S	            Find any non-whitespace character	 -->
<!--*    \w	            Find any alphabetical letter (a to Z) and digit (0 to 9)	 -->
<!--*    \W	            Find any non-alphabetical and non-digit character	 -->
<!--*    \b	            Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b	 -->
<!--*    \uxxxx	        Find the Unicode character specified by the hexadecimal number xxxx	 -->

<!--//! Quantifiers -->


<!-- ? Quantifier	    Description	Try it -->

<!--* n+	            Matches any string that contains at least one n	 -->
<!--* n*	            Matches any string that contains zero or more occurrences of n	 -->
<!--* n?	            Matches any string that contains zero or one occurrences of n	 -->
<!--* n{3}	        Matches any string that contains a sequence of 3 n's	 -->
<!--* n{2, 5}	        Matches any string that contains a sequence of at least 2, but not more that 5 n's	 -->
<!--* n{3,}	        Matches any string that contains a sequence of at least 3 n's -->



<!--! PHP Forms -->

<!-- ? type -->

<!--* Form Handling -->
<!--* Form Validation -->
<!--* Form Required -->
<!--* Form URL/E-mail -->
<!--* Form Complete -->


<!--!  PHP Date and Time -->

<!-- ? type -->

<!--* The PHP Date() Function -->
<!--* date(format,timestamp) -->
<!--* Get a Date -->
<!--* Get Your Time Zone -->
<!--* Create a Date With mktime() -->
<!--* Create a Date From a String With strtotime() -->

<!--!   PHP Include Files -->

<!-- ? type -->

<!--*  include  Statements  -->
<!--*  require  Statements  -->


<!--!   PHP File handling  13-6 -->

<!-- ? type -->

<!--* PHP Manipulating Files -->
<!--* PHP readfile() Function -->
<!--* PHP File Open/Read/Close -->
<!--* PHP Read Single Character - fgetc() -->
<!--* PHP File Create/Write -->
<!--* PHP File Permissions -->


<!--!   PHP  File Upload  -->

<!-- ? type -->

<!--* Create The Upload File PHP Script -->
<!--* Check if File Already Exists -->
<!--* Limit File Size -->
<!--* Limit File Type -->


<!--!   PHP Cookie  -->

<!-- ? type -->

<!--* PHP Create/Retrieve a Cookie -->
<!--* Modify a Cookie Value -->
<!--* Delete a Cookie -->
<!--* Check if Cookies are Enabled -->

<!--!   PHP Session  -->

<!-- ? type -->

<!--* Start a PHP Session -->
<!--* Get PHP Session Variable Values -->
<!--* Modify a PHP Session Variable -->
<!--* Destroy a PHP Session -->


<!--!   PHP Filter   -->

<!-- ? type -->

<!--* PHP filter_var() Function -->
<!--*    -> Sanitize a String -->
<!--*    -> Validate an Integer -->
<!--*    -> Validate an IP Address -->
<!--*    -> Sanitize and Validate an Email Address -->
<!--*    -> Sanitize and Validate a URL -->
<!--*    -> Validate an Integer Within a Range -->
<!--*    -> Validate IPv6 Address -->
<!--*    -> Validate URL - Must Contain QueryString -->


<!--!   PHP Callback Functions   -->

<!-- ? type -->

<!--* Callback Functions -->



<!--! PHP and JSON   -->

<!-- ? type -->

<!--* PHP - json_encode() -->
<!--* PHP - json_decode() -->
<!--* PHP - Accessing the Decoded Values -->
<!--* PHP - Looping Through the Values -->
<!--* PHP - associative  array  -->

<!--! PHP Exceptions   -->

<!-- ? type -->

<!--* What is an Exception? -->
<!--* Throwing an Exception -->
<!--* The try...catch Statement -->
<!--* The try...catch...finally Statement -->
<!--* The Exception Object -->

<!--! PHP OOP   -->

<!-- ? type -->

<!--*            PHP OOP                                -->
<!--*            Classes and Objects                    -->
<!--*            The __construct Function               -->
<!--*            The __destruct Function                -->
<!--*            The $this Keyword                      -->
<!--*            instanceof                             -->
<!--*            inheritance                            -->
<!--*            Access Modifiers                       -->
<!--*            Overriding Properties & Methods        -->
<!--*            Abstract class                         -->
<!--*            Interfaces                             -->
<!--*            Static Members                         -->
<!--*            Late Static Binding                    -->
<!--*            Traits                                 -->
<!--*            Namespaces                             -->
<!--*            Type Hinting                           -->
<!--*            Method Chaining                        -->
<!--*            Magic Methods                          --> 
<!--*            PHP Magic Constants list               -->
<!--*            PHP OOP Conditional Functions list     -->
 


<!--! PHP MySQL Database   -->

<!-- ? type -->
 
<!--*    MySQL Database                                 -->
<!--*    Create a MySQL Database                        -->
<!--*    Connecting to MySQL and Selecting a Database   -->
<!--*    1. MySQLi (Object-Oriented)                    -->
<!--*    2. MySQLi (Procedural)                         -->
<!--*    3. PDO (PHP Data Objects)                      -->
<!--*    PHP MySQL Create Table                         -->
<!--*    PHP MySQL Insert Data                          -->
<!--*    PHP MySQL Get Last Inserted ID                 -->
<!--*    PHP MySQL Insert Multiple Records              -->
<!--*    PHP MySQL Prepared Statements                  -->
<!--*    PHP MySQL Select Data                          -->
<!--*    PHP MySQL Use The WHERE Clause                 -->
<!--*    PHP MySQL Use The ORDER BY Clause              -->
<!--*    PHP MySQL Delete Data                          -->
<!--*    PHP MySQL Update Data                          -->
<!--*    PHP MySQL Limit Data Selections                -->



<!--*!   MYSQL SERVER                                   -->
<!--*    MySQL Create Table                             -->
<!--*    MySQL Insert                                   -->
<!--*    MySQL INSERT Multiple Rows                     -->
<!--*    MySQL Constraints                              -->
<!--*    MySQL SELECT With WHERE Clause                 -->
<!--*    WHERE condition Operators                      -->
<!--*    MySQL Regular Expression                       -->
<!--*    MySQL ORDER BY & DISTINCT                      -->
<!--*    MySQL IS NULL & IS NOT NULL                    -->
<!--*    MySQL LIMIT & OFFSET                           -->
<!--*    Aggregate functions Count Sum Min Max Avg      -->
<!--*    MySQL COMMIT & ROLLBACK                        -->
<!--*    MySQL DELETE                                   -->
<!--*    MySQL constraints in MySQL                     -->
<!--*    MySQL INNER JOIN                               -->
<!--*    MySQL LEFT JOIN & RIGHT JOIN                   -->
<!--*    MySQL CROSS JOIN                               -->
<!--*    MySQL GROUP BY & HAVING Clause                 -->
<!--*    MySQL SubQuery with EXISTS & NOT EXISTS        -->
<!--*    MySQL UNION & UNION ALL                        -->
<!--*    MySQL IF & CASE Statement                      -->
<!--*    MySQL Arithmetic Functions                     -->
<!--*    MySQL String Functions                         -->
<!--*    MySQL Date Functions                           -->
<!--*    MySQL ALTER                                    -->
<!--*    MySQL DROP & TRUNCATE Table                    -->



<!--! PHP RESTful APIs   -->

<!-- ? type -->

<!--*    Consuming and Creating RESTful APIs with PHP   -->



<!--! PHP AJAX    -->

<!-- ? type -->

<!--*      AJAX Intro                                   -->
<!--*      AJAX PHP                                     -->
<!--*      AJAX Database                                -->
<!--*      AJAX XML                                     -->
<!--*      AJAX Live Search                             -->
<!--*      AJAX Poll                                    -->
























<!-- 
 Today i have learn this topic (25-06-2025):-   
=> MySQL Date Functions
=> MySQL ALTER
=> MySQL DROP & TRUNCATE Table 
=> Consuming and Creating RESTful APIs with PHP
=> AJAX Intro
=> AJAX PHP
=> AJAX Database
=> AJAX XML
=> AJAX Live Search
=> AJAX Poll
-->


<!-- MySQL COMMIT & ROLLBACK  -->











<!--
variables  
Datatype  
String 
PHP Numbers  
PHP Casting  
Math Funtion  
PHP Constants  
Operators  
Condition statement  
function  
Array 
PHP Global Variables - Superglobals  
PHP Regular Expression Functions
Regular Expression Modifiers 
PHP Forms 
PHP Date and Time 
PHP Include Files 
PHP File handling  
PHP File Upload  
PHP Cookie  
PHP Session  
PHP Filter   
PHP Callback Functions   
PHP and JSON   
PHP Exceptions    
PHP OOP? 
PHP Classes and Objects  
PHP The __construct Function 
PHP The __destruct Function 
PHP The $this Keyword  
PHP instanceof 
inheritance  
PHP - Access Modifiers 
PHP OOP Overriding Properties & Methods  
Abstract class 
Interfaces    
PHP OOP Static Members  
PHP OOP Late Static Binding 
Traits                            
Namespaces                        
Type Hinting                      
Method Chaining                   
Magic Methods                      
=>   __construct()                
=>   __destruct()                 
=>   __get()                      
=>   __set()                      
=>   __autoload()                 
=>   __call()                     
=>   __callStatic()               
=>   __isset()                    
=>   __unset()                    
=>   __clone()                    
=>   __wakeup()                   
=>   __toStiring()                
=>   __invoke()                   
PHP Magic Constants list          
=> __LINE__                       
=> __FILE__                       
=> __DIR__                        
=> __FUNCTION__                   
=> __CLASS__                      
=> __METHOD__                     
=> __NAMESPACE__                  
=> __TRAIT__                      
PHP OOP Conditional Functions list
=> class_exists()                 
=> interface_exists()             
=> method_exists()                
=> trait_exists()                 
=> property_exists()              
=> is_a()                         
=> is_subclass_of()               
-->