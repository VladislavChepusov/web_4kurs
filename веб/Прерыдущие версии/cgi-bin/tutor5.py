#вывод в таблицу
import cgi, sys
#import hashlib 
#import os
form = cgi.FieldStorage()         # извлечь данные из формы
print("Content­type: text/html")  # плюс пустая строка

decision=open('data.txt', 'a')#ФАЙЛ ДЛЯ СОХРАНЕНИЯ ДАННЫХ.ТЕКСТОВЫЙ 
#пОДКЛЮЧЕНИЯ CSS В HEAD 
html1 = """
<html> 
<head>
    <TITLE>Python&#128293;</TITLE>
   <link rel="stylesheet" type="text/css" href="/forma.css" />
</head>
<body>
    <h1> 
			<span class="txt"><a href = "../one.html">Данные пользователя </a> </span>
	</h1>
    <table border =2 align="center"> 
    <tr>  
        <td>Имя поля</td>
        <td>Значение</td>  
     </tr>
</body>
</html> 
"""
# печать заголовка таблицы
print (html1)
ll = ['ФИО','Почта','Уровень','Должность', 'Знания языков','Статус']
data = ['','','','','','','']; 
i=0
for field in ('name','email', 'shoesize', 'job', 'language', 'comment'):
    if not field in form:
        data[i] = '(unknown)'
    else:
     
        if not isinstance(form[field], list):
            data[i] = form[field].value
        else:
            values = [x.value for x in form[field]]
            data[i] = ', '.join(values)
    i+=1

for i in range(6):
   print ('<tr><td> %s </td> <td> %s </td></tr>'% (ll[i], data[i]))
   decision.write('|%s: %s'% (ll[i], data[i]))#ЗАПИСЬ В ФАЙЛ 
decision.write("\n")
print (' </table>')
