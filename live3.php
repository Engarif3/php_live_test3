<!-- Task 1: -->

<?php

$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
];

echo "The age of the student is: " . $student['age'];
echo "<br>";
echo "<br>";

?>

<!-- Task 2: -->

<?php

$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
];

if (array_key_exists('grade', $student)) {
    echo "'grade' key exists in the array.";
} else {
    echo "'grade' key does not exist in the array.";
}

echo "<br>";
echo "<br>";

?>

<!-- Task 3: -->

<?php

$numbers = [100, 200, 50, 40, 50];

foreach ($numbers as $number) {
    echo $number . "<br>";
}
echo "<br>";
?>


<!-- Task 4: -->

<?php

$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];


function startsWithM($name) {
    return substr($name, 0, 1) === 'M';
}

$filteredNames = array_filter($names, 'startsWithM');

foreach ($filteredNames as $name) {
    echo $name . "<br>";
}

echo "<br>";

?>



<!-- Task 5: -->

<?php
$originalString = 'Hello, World!';


$reversedString = strrev($originalString);

echo $reversedString;

?>
