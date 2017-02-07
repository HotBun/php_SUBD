$r1 = mysqli_fetch_assoc($result);     //Возвращает запись 1,2 и т.д.


print_r($r1);      //Получение значений из mysqli_fetch_assoc 



//Вывод всех записей
while ( ($record = mysqli_fetch_assoc($result)) ) {
	print_r($record);
	echo "<hr/>";
}
mysqli_close($connection); //закрыть соединение


<!--//Вывод списком всех записей
	<ul>
		<?php
			// while ( ($cat = mysqli_fetch_assoc($result)) ){
			 	//	echo '<li>' . $cat['title'] . '</li>';
			 }
		?>
	</ul>
-->



echo 'Записей найдено' .  mysqli_num_rows($result); //Количество записей