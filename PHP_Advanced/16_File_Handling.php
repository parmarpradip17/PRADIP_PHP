<?php

//? File handling is an important part of any web application. You often need to open and process a file for different tasks.

//* PHP Manipulating Files

//? PHP has several functions for creating, reading, uploading, and editing files.

//? Be careful when manipulating files!
//? When you are manipulating files you must be very careful.
//? You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.

//* PHP readfile() Function

//? The readfile() function reads a file and writes it to the output buffer.


// readfile("today_work.md");



//* PHP File Open/Read/Close


//! PHP Open File - fopen()

//? A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
//? The first parameter of fopen() contains the name of the file to be opened and 
//? the second parameter specifies in which mode the file should be opened

// $myfile = fopen("today_work.md", "r") or die("Unable to open file!");
// echo fread($myfile, filesize("today_work.md"));
// fclose($myfile);



//! Tip: The fread() and the fclose() functions will be explained below.


//? The file may be opened in one of the following modes:


//! Modes	Description
//? r	    Open a file for read only. File pointer starts at the beginning of the file
//? w	    Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
//? a	    Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
//? x	    Creates a new file for write only. Returns FALSE and an error if file already exists
//? r+	    Open a file for read/write. File pointer starts at the beginning of the file
//? w+	    Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
//? a+	    Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
//? x+	    Creates a new file for read/write. Returns FALSE and an error if file already exists



//! PHP Read File - fread()

//? The fread() function reads from an open file.

//? The first parameter of fread() contains the name of the file to read from and
//? the second parameter specifies the maximum number of bytes to read.


//! PHP Close File - fclose()

//? The fclose() function is used to close an open file.

//? It's a good programming practice to close all files after you have finished with them.
//? You don't want an open file running around on your server taking up resources!

//! PHP Read Single Line - fgets()

//? The fgets() function is used to read a single line from a file.


//! PHP Check End-Of-File - feof()

//? The feof() function checks if the "end-of-file" (EOF) has been reached.
//? The feof() function is useful for looping through data of unknown length.

// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }
// fclose($myfile);

//* PHP Read Single Character - fgetc()

//? The fgetc() function is used to read a single character from a file.




//* PHP File Create/Write


//! PHP Create File - fopen()

//? The fopen() function is also used to create a file. Maybe a little confusing, but in PHP,
//? a file is created using the same function used to open files. 
//? If you use fopen() on a file that does not exist, it will create it,
//? given that the file is opened for writing (w) or appending (a).



//* PHP File Permissions

//? If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.

//! PHP Write to File - fwrite()

//? The fwrite() function is used to write to a file.

//? The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.


// $myfile = fopen("we.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);


//! PHP Overwriting

//? Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing.
//? All the existing data will be ERASED and we start with an empty file.
//? In the example below we open our existing file "newfile.txt", and write some new data into it:



// $myfile = fopen("new.txt", "w") or die("Unable to open file!");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);
// fclose($myfile);

//! PHP Append Text
//? You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file,
//? while the "w" mode overrides (and erases) the old content of the file. 
//? In the example below we open our existing file "newfile.txt", and append some text to it:


// $myfile = fopen("new.txt", "a") or die("Unable to open file!");
// $txt = "Donald Duck\n";
// fwrite($myfile, $txt);
// $txt = "Goofy Goof\n";
// fwrite($myfile, $txt);
// fclose($myfile);


?>

<?php ?>