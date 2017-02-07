<?php
//Общение php с SQL

$connection = mysqli_connect('127.0.0.1', 'root', '','test_db');//соездинение с базой данных (`сервер`, `имя пользователя`, `пароль`, `название базы данных`)

if ($connection == false) {
	echo "Не удалось подключиться к базе данных<br/>";
	echo mysqli_connect_error(); //Показывает ошибку
	exit(); //остановка выполнения скрипта
} 

$result = mysqli_query ($connection, "SELECT * FROM `articles_categories`"); //запрос

if (mysqli_num_rows($result) == 0){
	echo "Записей не найдено<br/>";
} else{
	?>
	<ul>
		<?php
			 while ( ($cat = mysqli_fetch_assoc($result)) ){

			 		$articles_count = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = " . $cat['id']);//Количество статей в записи

			 		echo '<li>' . $cat['title'] . '('. mysqli_num_rows($articles_count) . ') </li>';//Название записи в списке
			 }
		?>
	</ul>
	<?php
}
?>


<?php
mysqli_close($connection);//закрыть соединение
?>