<?php
// конкатинация - обьединние строк

$name = "Vasiliy";
$surname = "Oleinik<br><br/>";

echo $name . ` ` . $surname;

//For
for ($i = 1; $i <=10; $i++){
	echo $i;

	if( $i % 2 == 0){
		echo ' - четное число';
	} else {
		echo " - не четное число";
	}
	echo "<br/>";
}
echo "<br/>";
echo "<br/>";

//While
$hello = 1;
while( $hello <= 10){
	echo 'Hello' .$hello.'<br/>';
	$hello++;
}
echo "<br/>";
echo "<br/>";

//Foreach
$name = array (
	'Tapok',
	'Tapok B',
	'Tort',
	'Maus'
	);
foreach ($name as $count){
	echo $count. '<br/>';
}
echo "<br/>";
echo "<br/>";

$numbers = array (2,4,8,16,32);
foreach ($numbers as $calk){
	echo 'Куб числа ' .$calk. ':'. ($calk * $calk). '<br/>';
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//Function
function myfunction(){
	echo 'My first function php';
}
myfunction();

echo "<br/>";
echo "<br/>";

function get_bigger($a, $b){
	if ($a > $b){
		echo 'Большее число:' . $a . '<br/>';
	} else  {
		echo 'Большее число:' . $b . '<br/>';
	}
}
get_bigger(1, 2);
get_bigger(66, 32);
get_bigger(8, 777);

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

//abs, round, ceil, floor, raind, ,min,max

echo 'ABS: '.abs(-3000). '<br/>'; //абсолютное число (модуль)
echo 'ROUND: '.round(50.55). '<br/>'; //округление по общим правилам
echo 'CEIL: '.ceil(50.55). '<br/>'; //округляет в большую сторону
echo 'FLOOR: '.floor(50.55). '<br/>'; //округляет в меньшую сторону
echo 'RAND: '.rand(0, 100). '<br/>'; //генерирует случайное число
echo 'MIN: '.min(5,8,33,64636). '<br/>'; //возвращает минимальное число
echo 'MAX: '.max(5,8,33,64636). '<br/>'; //возвращает максимальное число