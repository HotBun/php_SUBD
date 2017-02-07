$r1 = mysqli_fetch_assoc($result);     //Возвращает запись 1,2 и т.д.
...................................................................................

print_r($r1);      //Получение значений из mysqli_fetch_assoc 
...................................................................................


//Вывод всех записей
while ( ($record = mysqli_fetch_assoc($result)) ) {
print_r($record);
echo "<hr/>";
}
mysqli_close($connection); //закрыть соединение
...................................................................................

<!--//Вывод списком всех записей
	<ul>
		<?php
			// while ( ($cat = mysqli_fetch_assoc($result)) ){
			 	//	echo '<li>' . $cat['title'] . '</li>';
			 }
		?>
	</ul>
-->


...................................................................................
echo 'Записей найдено' .  mysqli_num_rows($result); //Количество записей
...................................................................................



//Статьи в списке и количество записей в них

$result = mysqli_query ($connection, "SELECT * FROM `articles_categories`"); //запрос

if (mysqli_num_rows($result) == 0){
echo "Записей не найдено<br/>";
} else{
?>
<ul>
	<?php
	while ( ($cat = mysqli_fetch_assoc($result)) ){

			 		$articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total _count` FROM `articles` WHERE `categories_id` = " . $cat['id']);//Количество статей в записи
			 		$articles_count_result = mysqli_fetch_assoc($articles_count);
			 		echo '<li>' . $cat['title'] . '('. $articles_count_result['total _count'] . ') </li>';//Название записи в списке
			 	}
			 	?>
			 </ul>
			 <?php
			}
			?>


			<?php
mysqli_close($connection);//закрыть соединение
?>

...................................................................................

//Дата
echo date('d.m.Y H:i:s');
echo '<br/><br/>';

//TimeStamp = тайм стэмп - время прошедшее с начала основания UNIX
//Дата основания UNIX - 1970.01.01
//Время (в секундах) TimeStamp = echo time();



//Узнать сколько дней прошло
$start_date = '1996-11-10 00:00:00';
$start_date_timestemp = strtotime($start_date);
$diff = time() - $start_date_timestemp;
$days_passed = floor((($diff / 60 ) / 60) / 24);
echo 'Между ' . date('d.m.Y H:i:s', $start_date_timestemp) . ' и ' . date('d.m.Y H:i:s') . ' прошло ' . $days_passed . 'дня!';

echo '<br/><br/>';