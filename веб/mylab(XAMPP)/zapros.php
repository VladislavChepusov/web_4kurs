
<?php
   //echo 'Операция выполняется!<br>';
   $key =(int)$_POST['key'];
   $id_lib =(int)$_POST['id']; // инициализируем переменную user, которая содержит переданные скрипту через HTTP метод POST данные (с ключом user)
   $id_del =(int)$_POST['id_del'];
   $name_lib = $_POST['name'];
   $version =(float)$_POST['version'];
   $language = $_POST['language'];
   $year =(int) $_POST['year'];
 //  echo("Введенные данные:<br>");
   //echo "Индификатор=".$id_lib."  название= ".$name_lib." Версия= ".$version."  язык= ".$language." год= ".$year."     "; 
  
  if  ($key == 0){
	  /* Подключение к серверу MySQL */ 
			$link = mysqli_connect( 
				'localhost',  /* Хост, к которому мы подключаемся */ 
				'root',       /* Имя пользователя */ 
				'',   /* Используемый пароль */ 
				'lab6');     /* База данных для запросов по умолчанию */ 

			if (!$link) { 
				printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
				exit; 
						} 

		/* Посылаем запрос серверу */ 
		if ($result = mysqli_query($link, 'SELECT * FROM library  ')) 
		{ 
	//	printf("<table border =2 align='center'>");
		
		printf("<table border =2 align='center'> 
    <tr>  
        <td>Индификатор</td>
        <td>Имя библиотеки</td>
		<td>Версия</td>
		<td>Принадлежность языку</td>
		<td>Год реализации</td>	
	</tr>
	 ");
		/* Выборка результатов запроса */
		while( $row = mysqli_fetch_assoc($result) ){		
		printf(" <tr> <td > %s </td> <td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> </tr> ", $row['ID_lib'], $row['Name_lib'], $row['Version'], $row['language'], $row['Release_year']  );
		} 
		printf("</table>");
		/* Освобождаем используемую память */ 
		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
	mysqli_close($link); 
	  
  }
  if  ($key == 1){
  
  /* Подключение к серверу MySQL */ 
 		$link = mysqli_connect( 
 			'localhost',  /* Хост, к которому мы подключаемся */ 
 			'root',       /* Имя пользователя */ 
 			'',   /* Используемый пароль */ 
 			'lab6');     /* База данных для запросов по умолчанию */ 
 
 		if (!$link) { 
 			printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
 			exit; 
 					} 
 
 	/* Посылаем запрос серверу */ 
 	//mysqli_query($link, 'SELECT * FROM library  ')
 	mysqli_query($link, "INSERT INTO library (ID_lib,Name_lib,Version,language,Release_year) VALUES('$id_lib','$name_lib','$version','$language','$year') ON DUPLICATE KEY UPDATE   Name_lib='$name_lib', Version='$version', language='$language', Release_year='$year' ");
 	printf("<br><br><h2 > <span class='txt2' >Запрос обрабатывается!</span> </h2> ");
 	/* Закрываем соединение */ 
	mysqli_close($link); 
  
  }
  
  
  if ($key == 2){
	  /* Подключение к серверу MySQL */ 
 		$link = mysqli_connect( 
 			'localhost',  /* Хост, к которому мы подключаемся */ 
 			'root',       /* Имя пользователя */ 
 			'',   /* Используемый пароль */ 
 			'lab6');     /* База данных для запросов по умолчанию */ 
 
 		if (!$link) { 
 			printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
 			exit; 
 					} 
 
 	/* Посылаем запрос серверу */ 
 	//mysqli_query($link, 'SELECT * FROM library  ')
 	mysqli_query($link, "DELETE FROM library WHERE ID_lib='$id_del' ");
 	
	printf("<br><br><h2 > <span class='txt2' >Запрос обрабатывается!</span> </h2> ");
 	/* Закрываем соединение */ 
	mysqli_close($link); 
  }
   
?>

