<html>   
	<head> 
		<link rel="SHORTCUT ICON" href="custom\1.png" type="image/x-icon">
		<title>Python&#128293;</title> 
		<link rel="stylesheet" href="php_lab.css" type="text/css"> 
	</head> 
	
	<body> 
	<h1> 
	<br> 
	<span class="txt" ><a href="old/one.html">Данные о библиотеках  </a>  </span>
	</h1>
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
		printf("<tr><td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> <td> %s </td> </tr>", $row['ID_lib'], $row['Name_lib'], $row['Version'], $row['language'], $row['Release_year']  );
		 
		} 
		/* Освобождаем используемую память */ 
		mysqli_free_result($result); 
		} 
		/* Закрываем соединение */ 
	mysqli_close($link); 
	
?> 
</tr>


			
		
			<br>
			<TABLE align="center">
				<TR>
					<TH align=right>ID библиотеки:
					<TD> <input type=text name=ID_lib>
				<TR>
				<TR>
					<TH align=right>Название библиотеки:
					<TD> <input type=text name=name_lib>
				<TR>
					<TH align=right>Версия:
					<TD> <input type=text name=version>
				<TR>
					<TH align=right>Язык:
					<TD> <input type=text name=language>
				<TR>
					<TH align=right>Год реализации:
					<TD> <input type=text name=year>
	
			
			<TR align=center>
				<TD colspan=2 align=center class="inviz" >
				 <input type="submit"    value="Сохранить" style="border:none ; width: 300px; height:30 ;"  >
				 </TD>
			</TR>
			</TABLE>
			<br><br>









<div id="footer" align="center" onmousemove = "info()">
			@Vladislav Chepusov 2020 v1.3.
		</div>
	</body>  
</html>