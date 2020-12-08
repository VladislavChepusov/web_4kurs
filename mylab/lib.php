<html>   
	<head> 
		<link rel="SHORTCUT ICON" href="custom\1.png" type="image/x-icon">
		<title>Python&#128293;</title> 
		<link rel="stylesheet" href="php_lab.css" type="text/css"> 
	</head> 
	
	<body> 
	<h1> 
	<br> 
	<span class="txt" ><a href="old/one.html">Данные о библиотеках и их функциях </a>  </span>
	</h1>
	<br>
	<h2><span class="txt2">Библиотеки</span></h2>
    <table border =2 align="center"> 
    <tr>  
        <td>Индификатор</td>
        <td>Имя библиотеки</td>
		<td>Версия</td>
		<td>Принадлежность языку</td>
		<td>Год реализации</td>
		
		<?php 
		
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

	 

		/* Выборка результатов запроса */
		while( $row = mysqli_fetch_assoc($result) ){ 
		printf("<tr ><td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> </tr>", $row['ID_lib'], $row['Name_lib'], $row['Version'], $row['language'], $row['Release_year']  );
		 
		} 
		/* Освобождаем используемую память */ 
		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
	mysqli_close($link); 
?> 


 
    <table border =2 align="center"> 
	<br>
 
		<h2><span class="txt2">Функции</span></h2>
    <tr>  
        <td>Индификатор функции</td>
		<td>Индификатор библиотеки</td>
        <td>Имя функции</td>
		<td>Вовзращаемый тип</td>
		<td>Описание</td>


		 
<?php 
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
		if ($result = mysqli_query($link, 'SELECT * FROM function  ')) 
		{ 

	 

		/* Выборка результатов запроса */
		while( $row = mysqli_fetch_assoc($result) ){ 
		printf("<tr><td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> </tr>", $row['ID_fun'], $row['ID_lib'], $row['Name_fun'], $row['return_type'], $row['Description']  );
		 
		} 
		/* Освобождаем используемую память */ 
		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
	mysqli_close($link); 
?> 
  
		<div id="footer" align="center" onmousemove = "info()">
			@Vladislav Chepusov 2020 v1.3.
		</div>
	</body>  
</html> 

