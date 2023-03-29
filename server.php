<?php
//  ESERCIZIO 1
// Dato un array di numeri a scelta,
// scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array 

// $counter = 0;

// $numeri = ;

// foreach($numeri as $num){
//     if(($num % 2) == 0){
//         $counter += $num;
//     }
// }

// function numPari($array) {
//     if($array % 2 == 0) {
//        return true;
//     }
//     return false;
// }

// $arra = ["3", "5", "8", "16", "45", "36"];
// $counter = 0;
// $mioArray = array_filter($arra, "numPari");
// foreach($mioArray as $numPari){
//     $counter += $numPari;
// }
// $media = $counter / count($mioArray);
// print_r($media);



// ESERCIZIO 2
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere,
//  per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o 
// “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere


$persona1 = [
    'nome' => 'Andrea',
    'cognome' => 'Rossi',
    'genere' => 'Uomo',
];
$persona2 = [
    'nome' => 'Giacomo',
    'cognome' => 'Brambilla',
    'genere' => 'Uomo',
];
$persona3 = [
    'nome' => 'Lorenza',
    'cognome' => 'Fiuggi',
    'genere' => 'Donna',
];
$persona4 = [
    'nome' => 'jinx',
    'cognome' => ' ',
    'genere' => 'Fluid',
];


function saluti($array){
    $nome = $array['nome'];
    $cognome = $array['cognome'];
    
    if($array['genere'] == "Uomo"){
        echo "Buongiorno Signor $nome, il suo cognome è $cognome, giusto? \n";
    } else if ($array['genere'] == "Donna"){
        echo "Buongiorno Signora $cognome, il suo nome è $nome, ricordo bene? \n";
    } else {
        echo "Per caso un robot?";
    }
}
// saluti($persona1);
// saluti($persona2);
// saluti($persona3);
// saluti($persona4);




// ESERCIZIO 3
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. 
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero
// ; se multiplo di 5 stampare “JAVASCRIPT”;
//  se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY70".

//trasformato il tutto in una funzione che accetta due valori, il nostro range modificabile dall'utente a piacere
function numeri($min, $max){
    for($i = $min; $i <= $max; $i++){
        switch($i){
            case ($i % 5 == 0 && $i % 3 == 0): // numeri multipli di 5 e di 3
                echo "HACKADEMY70"."\n";
                break;
            case ($i % 5 == 0): // numeri multipli di 5
                echo "JAVASCRIPT"."\n";
                break;
            case ($i % 3 == 0):
                echo "PHP"."\n"; // numeri multipli di 3
                break;
            case ($i % 5 != 0 && $i % 3 != 0): // altri numeri
                echo $i."\n";
                break;
        }
    }
    
}
//richiamo la funzione con il range che più mi piace
numeri(-25, 120);


?>