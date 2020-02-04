<?php

$character = [
    'name' => @$_POST["name"],
    'class' => @$_POST["class"],
    'race' => @$_POST["race"],
];

$objToVar = (object)$character;

echo "My character's name is: {$objToVar->name} <br>";
echo "My character's class is: {$objToVar->class} <br>";
echo "My character's race is: {$objToVar->race} <br><br>";
?>

<form action="" method="POST">
    <label>Name:</label>
    <input type="text" name="name">
    <br>
    <br>
    
    <label>Class:</label>
    <input type="text" name="class">
    <br>
    <br>

    <label>Race:</label>
    <input type="text" name="race">
    <br>
    <br>

    <button type="submit">Send</button>
</form>

<?php

require 'footer.php';

?>