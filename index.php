<?php

$arrayUno = [
    1,
    2,
    3
];

var_dump($arrayUno);

if (in_array(5, $arrayUno)) {
    echo "C'è il valore 5";
}
else {
    echo "NON c'è il valore 5";
}

$arrayUno[] = 5;

echo "<div>Elemento in posizione 1: ".$arrayUno[1]."</div>";

var_dump($arrayUno);

if (in_array(5, $arrayUno)) {
    echo "C'è il valore 5";
}
else {
    echo "NON c'è il valore 5";
}

echo '<ul>';
for ($i = 0; $i < count($arrayUno); $i++) { // < arrayUno.length
    echo '<li>';
    echo "$i: $arrayUno[$i]";
    echo '</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($arrayUno as $index => $singleNumber) {
    echo '<li>';
    echo "$index: $singleNumber";
    echo '</li>';
}
echo '</ul>';

/* -------------------------------------------------------------------------------------- */

$person = [
    'firstName' => 'Ciccio',
    'lastName' => 'Pasticcio',
    'age' => 26
];

echo '<ul>';
foreach ($person as $key => $value) {
    echo '<li>';
    echo "$key: $value";
    echo '</li>';
}
echo '</ul>';

var_dump($person);

$personKeys = array_keys($person);

var_dump($personKeys);
// var_dump(array_keys($person));

if (array_key_exists('email', $person)) {
    echo 'L\'email è stata impostata';
}
else {
    echo 'L\'email non è stata impostata';
}

echo "<div>Nome: ".$person['firstName']."</div>";
echo "<div>Cognome: ".$person['lastName']."</div>";
echo "<div>Età: ".$person['age']."</div>";

$person['email'] = 'ciccio.pasticcio@email.com';

var_dump($person);

if (array_key_exists('email', $person)) {
    echo 'L\'email è stata impostata';
}
else {
    echo 'L\'email non è stata impostata';
}

/* -------------------------------------------------------------------------------------- */

$people = [

    [
        'id' => 8,
        'firstName' => 'Nicolas',
        'lastName' => 'Chiaravalle',
        'age' => 1,
        'class' => '#84'
    ],
    [
        'id' => 22,
        'firstName' => 'Diletta',
        'lastName' => 'Pelloni',
        'age' => 2,
        'class' => '#84'
    ],
    // ...

];

/* -------------------------------------------------------------------------------------- */

$arrayMix = [
    33,
    'name' => 'Roberto',
    'ciao'
];

var_dump($arrayMix);

echo "<div>Elemento in posizione 0: ".$arrayMix[0]."</div>";
echo "<div>Nome in arrayMix: ".$arrayMix['name']."</div>";
// echo "<div>Nome in arrayMix: ".$arrayMix[1]."</div>";
echo "<div>Terzo elemento in arrayMix: ".$arrayMix[2]."</div>";
echo "<div>Terzo elemento in arrayMix: ".$arrayMix[1]."</div>"; // SOLUZIONE
echo "<div>Terzo elemento in arrayMix: ".$arrayMix['ciao']."</div>";

/* -------------------------------------------------------------------------------------- */

$stringaUno = 'Stringa Uno';
$stringaDue = "Stringa Due";

echo '<div>';
echo $stringaUno;
echo '</div>';

echo '<div>';
echo $stringaDue;
echo '</div>';

echo '<div>';
echo $stringaUno.' - '.$stringaDue;
echo '</div>';

$firstName = 'Alessio';
$lastName = 'Vietri';
$fullName = $firstName.' '.$lastName; // firstname + ' ' + lastName
$fullNameTemplate = "$firstName $lastName"; // `${firstName} ${lastName}`

echo '<div>';
echo $fullName;
echo '</div>';

echo '<div>';
echo $fullNameTemplate;
echo '</div>';

echo '<pre>';
echo "Ciao\nRagazzi\n\tTabulazione";
echo '</pre>';

echo 'Lunghezza di stringa con \n: '.strlen("ciao\n\tciao");

echo '<pre>';
echo 'Ciao\nRagazzi';
echo '</pre>';

/* -------------------------------------------------------------------------------------- */

// isset($variable) -> restituisce un valore booleano a seconda del valore di $variable -> se $variable è diverso da null, restituisce true. Altrimenti false

if (isset($wow)) {  // FALSE
    echo '<div>';
    echo '1. La variabile $wow esiste e ha un valore diverso da null';
    echo '</div>';
}
else {
    echo '<div>';
    echo '1. La variabile $wow NON esiste OPPURE ha un valore uguale a null';
    echo '</div>';
}

$wow = null;
if (isset($wow)) {  // FALSE
    echo '<div>';
    echo '2. La variabile $wow esiste e ha un valore diverso da null';
    echo '</div>';
}
else {
    echo '<div>';
    echo '2. La variabile $wow NON esiste OPPURE ha un valore uguale a null';
    echo '</div>';
}

$wow = 3;
if (isset($wow)) {  // TRUE
    echo '<div>';
    echo '3. La variabile $wow esiste e ha un valore diverso da null';
    echo '</div>';
}
else {
    echo '<div>';
    echo '3. La variabile $wow NON esiste OPPURE ha un valore uguale a null';
    echo '</div>';
}

echo '<br><br><br><br><br><br><br>';

var_dump($_GET);

if (isset($_GET['test'])) {
    $testParam = $_GET['test'];
    echo '<div>';
    echo '$_GET[test] esiste ed è != null';
    echo '</div>';
}
else {
    $testParam = '';
    echo '<div>';
    echo '$_GET[test] NON esiste o è == null';
    echo '</div>';
}

echo '<div>';
echo '$testParam: '.$testParam;
echo '</div>';



echo '<br><br><br><br><br><br><br>';

/* -------------------------------------------------------------------------------------- */

$odds = [
    'first' => 1,
    'second' => 3,
    'third' => 5
];
$evens = [
    'first' => 2,
    'second' => 4,
    'third' => 6
];

$mergedArrays = array_merge($evens, $odds);

var_dump($mergedArrays);

$mergedArrays['second'] = 17;

var_dump($mergedArrays);

var_dump(array_search(17, $mergedArrays));
var_dump(array_search(3, [1, 2, 3]));

$mergedArraysLength = count($mergedArrays);

var_dump($mergedArraysLength);

$mergedArrays['fourth'] = 99;

$mergedArraysLength = count($mergedArrays);

var_dump($mergedArraysLength);


/* -------------------------------------------------------------------------------------- */



	
$animals = [
    "mammals" => ["cow", "pig", "horse", "dog"],
    "birds" => ["duck", "chicken"]
];
 
 
foreach ($animals as $key => $animalClass) {
    echo $key;
    // echo $animalClass;
    echo '<br>';
    foreach($animalClass as $index => $animal) {
        echo $index.': '.$animal;
        echo '<br>';
    }
}


/*

    Array -> mammals
    0: cow
    1: pig
    2: horse
    3: dog
    Array -> birds
    0: duck
    1: chicken

*/