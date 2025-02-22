<?php 
#1. What is the output of print_r($person);?
//Ans:Charlene 25
print_r("Hello");
print_r([1, 2, 3]);

class Person {
    public $name;
    public $age;
}
print_r($person);
$person = new Person();
$person = new("Charlene");
$person = age(25);

#2. What is the output of var_dump($person);?
//Ans: object(Person)#1 (2) { ["name"]=> string(8) "Charlene" ["age"]=> int(25) }
var_dump($Hello);
var_dump($person)
var_dump($Hello! Charlene);
var_dump([1,2,3]);

#3. What is the output of var_dump($cashOnHand);?
//Ans: float(10.5)
$cashOnHand = 10.5;
var_dump($cashOnHand);

#4. What character is used to concatenate strings?
//Ans: The character used to concatenate strings is period (.)
$name = "Charlene";
$greeting = "Hello, " . $name . "!";
echo $greeting;

#5. What is the output of echo HOST?
//Ans: localhost
define("HOST", "localhost");
echo HOST;

#6. How will you define in PHP the variable PI with value 3.1416?
//Ans: Output: 3.1416
define('PI', 3.1416);
echo PI;

#7. What is the output of echo $numbers[3] + $numbers[4];?
//Ans: 9
$numbers = [1, 2, 3, 4, 5];
echo $numbers[3] + $numbers[4];

#8. What is the output of echo $colors[30];?
//Ans: chartreuse
$colors = [
    'red', 'blue', 'green', 'yellow', 'purple', 'orange', 'pink', 'brown', 'black', 'white', 
    'violet', 'indigo', 'grey', 'cyan', 'magenta', 'lime', 'olive', 'maroon', 'navy', 'aqua',
    'teal', 'lavender', 'peach', 'plum', 'orchid', 'salmon', 'gold', 'silver', 'bronze', 'tan', 
    'chartreuse'
];
echo $colors[30];


#9. What are the keys in $person array?
//Ans: name and age
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "Charlene";
$person->age = 25;

$personArray = get_object_vars($person);
print_r(array_keys($personArray));

#10. In PHP, how will you change the green into white in $colors array?
//Ans: we replaced the value at index 1, which was 'green', with 'white'. The print_r function then displays the modified array.
$colors = ['red', 'green', 'blue'];
$colors[1] = 'white';
print_r($colors);

#11. What is the output of echo $hex['red'];?
//Ans: #f00
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];

echo $hex['red'];

#12.What is t he output of echo $matrix[1][2];? 
//Ans: 6
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matrix[1][2];

#13. What is the output of echo $people[0]['frstname'];?
//Ans: Maaeve
$people = [
    [
        'first_name' => 'Maeve',
        'last_name' => 'Reid',
        'email' => 'reid@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];

echo $people[0]['first_name']; 

#14. What is tthe output of echo $people[2]['email'];?
//Ans: jane@gmail.com
$people = [
    [
        'first_name' => 'Maeve',
        'last_name' => 'Reid',
        'email' => 'reid@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];

echo $people[2]['email'];

#15. What is he output of var_dump($chunckedArray);?
/*Ans: array(2) {
  [0]=>
  array(2) {
    [0]=>
    string(5) "apple"
    [1]=>
    string(6) "banana"
  }
  [1]=>
  array(2) {
    [0]=>
    string(6) "cherry"
    [1]=>
    string(4) "date"
  }
}*/
$fruits = ["apple", "banana", "cherry", "date"];
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

?>

#PRACTICE 02
<?php
$fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry'];

echo '<ol>';
for ($i = 0; $i < count($fruits); $i++) {
    echo '<li>' . $fruits[$i] . '</li>';
}
echo '</ol>';
?>

#PRACTTICE 03
<?php
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$row = 0;
$col = 0;

while ($row < count($matrix)) {
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) {
            echo $matrix[$row][$col] . ' ';
        }
        $col++;
    }
    $col = 0;
    $row++;
}
?>


