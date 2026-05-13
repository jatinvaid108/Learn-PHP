<?php
$name="Hello World";
echo "$name";
?>

<!--=============================
PHP BASICS NOTES
=============================

1. PHP is a server-side scripting language.
- PHP code runs on the server.
- Browser only sees the final output.

2. PHP files use .php extension.
Example:
index.php

3. PHP code is written inside tags:

<?php
/*// PHP code
*/?>

4. echo is used to print output.

Example:
echo "Hello";

5. Every PHP statement ends with semicolon (;)

Example:
$name = "Jatin";

6. Variables in PHP always start with $

Example:
$name = "Jatin";

7. PHP is a dynamically typed language.
- No need to define datatype manually.
- PHP automatically detects datatype.

Example:
$age = 20;

8. Common Data Types in PHP:
- String
- Integer
- Float
- Boolean
- Array

9. String example:
$name = "Jatin";

10. Integer example:
$age = 20;

11. Float example:
$price = 99.99;

12. Boolean example:
$isLoggedIn = true;

13. String concatenation uses dot (.)

Example:
echo "Hello " . $name;

14. Comments in PHP:

Single line:
// comment

Multi-line:
/*
comment
*/

15. Variable Naming Rules:
Valid:
$name
$_name
$name1

Invalid:
$1name
$name-age

16. PHP files can contain both:
- PHP code
- HTML code

17. Practice Habit:
- Create separate files for each topic
- Run code manually
- Practice syntax repeatedly

18. Basic PHP Project Structure:

php-basics/
│
├── index.php
├── variables.php
├── datatype.php
├── practice.php

19. Run PHP file using terminal:

php filename.php

Example:
php index.php
-->