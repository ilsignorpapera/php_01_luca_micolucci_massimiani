

<!-- traccia1 -->
<?php 

$integer = 10;


$float = 10.5;


$string = 'ciao';


$boolean = true;


echo ($integer) . "\n";
echo ($float) . "\n";
echo ($string) . "\n";
echo ($boolean) . "\n";

// traccia2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "hai";
$text7 = "bevuto";
$text8 = "tutto";

echo "$text1 $text2 $text3 $text4\n";
echo "$text5 $text6 $text7 $text8\n";

// traccia 3 

$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
];

$e = $words1[6][3][1]; 
$possa = $words2['elemento2']; 
$fortuna = $words2['elemento3'][3][0]; 
$essere = $words1[2]; 
$vostro = $words1[0];
$sempre = $words1[5]; 

$results = "$e $possa la $fortuna $essere $sempre a $vostro favore!";

echo $results;


// traccia 4 

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Giulia', 'surname' => 'Verdi', 'gender' => 'F'],
    ['name' => 'Marco', 'surname' => 'Neri', 'gender' => 'M'],
    ['name' => 'Alex', 'surname' => 'Smith', 'gender' => 'NB']
];

foreach ($users as $user) {
    $name = $user['name'];
    $surname = $user['surname'];
    $gender = $user['gender'];

    if ($gender === 'M') {
        echo "Buongiorno Sig. $name $surname\n";
    } elseif ($gender === 'F') {
        echo "Buongiorno Sig.ra $name $surname\n";
    } elseif ($gender === 'NB') {
        echo "Buongiorno $name $surname\n";
    } else {
        echo "Buongiorno $name $surname\n";
    }
}


// traccia 5 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12,13,14,15,16,17,18,19,20];
$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if ($number % 2 === 0) { 
        $sum += $number;
        $count++;
    }
}

if ($count > 0) {
    $average = $sum / $count;
    echo "La media dei numeri pari è: $average\n";
} else {
    echo "Non ci sono numeri pari nell'array.\n";
}



// traccia 6

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKADEMY\n"; 
    } elseif ($i % 3 === 0) {
        echo "PHP\n";
    } elseif ($i % 5 === 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}