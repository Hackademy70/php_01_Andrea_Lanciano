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

  
// $array = ["3", "5", "8", "16", "45", "36"];
// $counter = 0;
// $mioArray = array_filter($array, "numPari");
// foreach($mioArray as $numPari){
//     $counter += $numPari;
// }
// $media = $counter / count($mioArray);
// print_r($media);



// ESERCIZIO 2
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere,
//  per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o 
// “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere


// $persona1 = [
//     'nome' => 'Andrea',
//     'cognome' => 'Rossi',
//     'genere' => 'Uomo',
// ];
// $persona2 = [
//     'nome' => 'Giacomo',
//     'cognome' => 'Brambilla',
//     'genere' => 'Uomo',
// ];
// $persona3 = [
//     'nome' => 'Lorenza',
//     'cognome' => 'Fiuggi',
//     'genere' => 'Donna',
// ];

// function saluti($array){
//     if($array['genere'] == "Uomo"){
//         $nome = $array['nome'];
//         $cognome = $array['cognome'];
//         echo "Buongiorno Signor $nome, il suo gnome è $cognome, giusto?";
//     } else if ($array['genere'] == "Donna"){
//         $nome = $array['nome'];
//         $cognome = $array['cognome'];
//         echo "Buongiorno Signora $cognome, il suo nome è $nome, ricordo bene?";
//     }
// }
// saluti($persona1);
// saluti($persona2);
// saluti($persona3);

?>