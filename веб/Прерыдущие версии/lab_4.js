function my_sc(x) 
{
		let first ;
		let number ;
		let mas ;
	if (x==Number(1)){
		 first =[1,2,3,5,6,8,9,1,2,3,5,6,11,10,12,13,14,16,111,200];
		 number = 10;
		 mas =[1,2,3,5,6,8,9,1,2,3,5,6,11,10,12,13,14,16,111,200];
	}
    if (x==Number(2)){
		 first =prompt('Введите массив значений');
		 number = Number(prompt('Введите число b'));
		 mas = first.split(",");
	}
		for(let i = mas.length - 1; i >= 0; i--) {
		if(mas[i] < number) {
			mas.splice(i, 1);
			}
		}
		let html = '<h3><b>Было=[' + first + ']</b> '+'<b><br><br>  Элемент b=' +number   +'    <b><br><br>Стало='+"[" +mas  + ']</b></h3>';
		document.getElementById('result').innerHTML = html;	 
  }
 

function clock ()
{ 
	var  datecur,  minute;     
	datecur = new Date();
	minute= datecur.getMinutes();
	var now = new Date().toLocaleTimeString();
				
	tmr = document.getElementById ('tmr');
	tmr.innerText = now; 
	if (minute % 2==0) 
	{
		tmr.style.color = "red";
	}
	else 
	{
		tmr.style.color = "blue";
	}
}

function info()
{ 
	alert("Работа Чепусова Владислава Константиновича  из группы 4736 ")
}

function deleteRow()
{
	let d = document;
	let number;
	number = d.getElementById('number').value;
	//let tbody = d.getElementById('myTable').getElementsByTagName('TBODY')[0];
    d.getElementById('myTable').deleteRow(number);
   
}

function addRow()
{
	var d = document;
	var name;
	var dinam;
	var oop;
	var dec;
	var func;
    // Считываем значения с формы
    name = d.getElementById('name').value;
    dinam = d.getElementById('dinam').value;
    oop = d.getElementById('oop').value;
	dec = d.getElementById('dec').value;
	func = d.getElementById('func').value;
    // Находим нужную таблицу
    var tbody = d.getElementById('myTable').getElementsByTagName('TBODY')[0];
    // Создаем строку таблицы и добавляем ее
    var row = d.createElement("TR");
    tbody.appendChild(row);
    // Создаем ячейки в вышесозданной строке
    // и добавляем тх
    var td1 = d.createElement("TD");
    var td2 = d.createElement("TD");
	var td3 = d.createElement("TD");
	var td4 = d.createElement("TD");
	var td5 = d.createElement("TD");
    row.appendChild(td1);
    row.appendChild(td2);
	row.appendChild(td3);
    row.appendChild(td4);
	row.appendChild(td5);
    // Наполняем ячейки
    td1.innerHTML = name;
    td2.innerHTML = dinam;
	td3.innerHTML =oop;
	td4.innerHTML =dec;
	td5.innerHTML =func;
}

window.onload=function size_change (){
	(function (){
		var o=document.getElementsByName('size');
		for (var i=0; i<o.length; i++) {
			o[i].onmousemove=(function (Obj){
				return function (){
					Obj.style.fontSize=(Obj.style.fontSize == '36px')? '17px': '36px';
				};
			})(o[i]);
		};
	})();
};


/*onclick

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function color(){
color_i=['red','green','orange',"white","pink",'blue']
y=getRandomInt(6)
var selectedVal = color_i[y];
$('head').html('<style>.d{background-color:'+ selectedVal +'}</style>');
}


hameleon.onmousemove = function(event) {
  let target = event.target;
  target.style.background = 'pink';
  target.style.color = 'white';
  target.style.border = "thick solid black";
  
};

hameleon.onmouseout = function(event) {
  let target = event.target;
  target.style.removeProperty('color');
  target.style.removeProperty('background');
   target.style.removeProperty('border');
  //target.style.background = '';
  //target.style.color = 'black';
  
 
};
*/