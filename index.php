<?php
echo '<h2> Functions </h2>';

/*clean coding ongeacht wie het leest moet aan de namen van codes
en variabelnamen duidelijk kunnen begrijpen wat er gebeurt*/

#\n is een new line in html

#in php 7 kan je functies ook zonder () aanroepen, maar best wel doen voor leesbaarheid
#return best wel in functie zetten omdat de meeste functies iets teruggeven

#je kan return ook eerder in de functie met een if zetten zodat de functie in een bepaald geval stopt

#functies zet je best onderaan je bestand
#terwijl variabele bovenaan komen te staan

# door global voor de variabele te zetten kan de variabele ook buiten de functie gebruikt worden
/*    global $name;
      $name = $last_name." ".$first_name;
  dus eerst voordefiniëren en dan een waarde geven */
#wordt wel niet veel gebruikt
#normaal variabale buiten de functie definiëren

#beter dat je parameters en return gebruikt

echo '<h3> Parameters </h3>';

function compute_salestax($amount, $custState)
{
  switch($custState)
  {
    case 'CN':
      $salesTaxRate = 0;
      break;
    case 'CA':
      $salesTaxRate = 1.0;
      break;
    default :
      $salesTaxRate = .5;
      break;
  }
  $salesTax = $amount * $salesTaxRate;
  echo $salesTax.'<br>';
}
$cost = 2000.00;
$custState = 'CN';
compute_salestax($cost,$custState);

#je kan ook standaardwaarden meegeven aan parameters
#function add_2_numbers($num1=1, $num2=1)

#inbuilt functions and methods PHP
#http://php.net/manual/en/indexes.functions.php



echo '<h5> oefening 1 </h5>';
#oefening 1
function oppervlakteRechthoek($lengte,$breedte){
  $oppervlakte = $lengte * $breedte;
  echo 'De oppervlakte van de rechthoek is ', $oppervlakte , '. <br/>';
  return;
}

function omtrekRechthoek($lengte,$breedte){
  $omtrek = $lengte * 2 + $breedte * 2;
  echo 'De omtrek van de rechthoek is ', $omtrek , '. <br/>';
  return;
}
$lengteRechthoek = 5;
$breedteRechthoek = 8;
oppervlakteRechthoek($lengteRechthoek,$breedteRechthoek);
omtrekRechthoek($lengteRechthoek,$breedteRechthoek);

echo '<h5> oefening 2 </h5>';
#oefening 2
function oppervlakteCirkel($straal){
  $oppervlakte = $straal*$straal*M_PI;
  echo 'De oppervlakte van de cirkel is ', $oppervlakte , '. <br/>';
  return;
}
$straalCirkel = 2;
oppervlakteCirkel($straalCirkel);

echo '<h5> oefening 3 </h5>';
#oefening 3
function tripple($x){
  $drievoud = $x * 3;
  return $drievoud;
}

function display($x1,$x2){
  echo 'Het drievoud van ', $x1, ' is gelijk aan ', tripple($x1), '. <br/>';
  echo 'Het drievoud van ', $x2, ' is gelijk aan ', tripple($x2), '. <br/>';
  return;
}
$a = 3;
$b = 2;
display($a,$b);

echo '<h5> oefening 4 </h5>';
#oefening 4
function add($x){
  $added = $x + 2;
  return $added;
}

function displayAdd($array){
  foreach($array as $value){
    $added = add($value);
    echo 'Het nieuwe getal is ', $added, '. <br/>';
  }
    $addedOne = add($array[0]);
    $addedLast = add($array[sizeof($array)-1]);
    echo 'De eerste nieuwe is ', $addedOne , ' de laatste nieuwe is ', $addedLast , '.<br/>';
  return;
}

$tab = array(-2,1,4);
displayAdd($tab);

echo '<h5> oefening 5 </h5>';
#oefening 5
#eerst met een ingebouwde functie
for ($x=1;$x<=5; $x++){
  echo str_repeat('*',$x), '<br/>';
}
#nu handmatig
for ($x=1;$x<=7; $x++){
  for ($a=1; $a<=$x;$a++){
    echo '*';
  }
  echo '<br/>';
}
for ($x=1;$x<=9; $x++){
  for ($a=1; $a<=$x;$a++){
    echo '*';
  }
  echo '<br/>';
}
for ($x=1;$x<=3; $x++){
  echo '**';
  echo '<br/>';
}

echo '<h5> oefening 6 </h5>';
#oefening 6
function ranking($x){
  switch (true){
    case ($x>90):
      $rank = 'A';
      break;
    case ($x>80):
      $rank = 'B';
      break;
    case ($x>70):
      $rank = 'C';
      break;
    case ($x>65):
      $rank = 'D';
    default:
      $rank = 'F';
      break;
  }
  echo 'Voor ' , $x , ' punten heb je graad ' , $rank ,'<br/>';
}

for ($x=1; $x<=100; $x +=10){
  ranking($x);
}

echo '<h5> oefening 7 </h5>';
#oefening 7
#los 0 tot 20 deelbaar door 3 weergeven
for ($x=0; $x<=10; $x++) {
  $deelbaarDoorTwee = $x%3;
  if ($deelbaarDoorTwee == 0){
    echo $x , ' is deelbaar door 3.<br/>';
  } else {
    echo $x , ' is niet deelbaar door 3.<br/>';
  }
}

echo '<h5> oefening 8 </h5>';
#oefening 8
/*3 namen acteurs, nummer 1 is en dan de eerste is ... */

$acteurs = array('Tom Cruise','Ben Sandler','Georges Clooney');
$rangtelwoorden = array('eerste','tweede','derde');

function introduction($array){
  $x = 0;
  foreach($array as $value){
    $x++;
    echo $x ,'. ' , $value , '<br/>';
  }
}

function fullIntroduction($names, $rank){
  $x = 0;
  foreach($names as $value){
    echo $value , ' is de ', $rank[$x] , ' acteur. <br/>';
    $x++;
  }
}

introduction($acteurs);
fullIntroduction($acteurs,$rangtelwoorden);

echo '<h5> oefening 9 </h5>';
#oefening 9
$floatSpeed = 1.4;
$lowSpeed = floor($floatSpeed);
$highSpeed = ceil($floatSpeed);
echo $floatSpeed , ' is naar onder afgerond ' , $lowSpeed , ' en naar boven afgerond ' , $highSpeed , '. <br/>';

echo '<h5> oefening 10 </h5>';
#oefening 10
function randomCharacter(){
  $names = array ('Goro','Johnny Cago','Kano','Liu Kano','Raiden','Raptile','Scorpion','Shang Tsun','Sonya','Sub-Zero');
  $number = rand(0,sizeof($names)-1);
  echo 'Je personage is ', $names[$number] , '.<br/>';
}
randomCharacter();
randomCharacter();
randomCharacter();
randomCharacter();



?>
