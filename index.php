
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/popup-m1-style.css-v=4.css"  rel="stylesheet" type="text/css"/>



</head>
<body>
<body>
  <div id="w">
    <nav>
      <ul id="ddmenu">
        <li class="list-brigad"><a  href="#">Список бригадиров</a></li>
        <li><a href="#" class="modal-brigadir">Добавить бригадира</a></li>
        <li><a href="#" class="modal-worker">Добавить рабочего</a></li>
      </ul>
    </nav>
  </div>





 
              



        
      
<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal brigadir-modal">
<a class="close-m1"></a>
<div>
<div class="popup-m1-title">Добавить бригадира</div>
<div class="popup-m1-cont"><div class="popup-m1-text1">Заполните все поля и нажмите добавить</div>
<form  method="post" class="popup-m1-form">
<input type="text" name="name"        placeholder="Имя бригадира" required="">
<input type="text" name="description" placeholder="Чем занимаеться бригада" required="">
<input type="text" name="dailySalary" placeholder="Дневная зарплата" required="">
<input type="text" name="position"    placeholder="Должность" required="">
<input type="text" name="idWorker"    placeholder="Ид работников" required="">
<input type="text" name="daysWorked"  placeholder="Кол-во отработаных дней" required="">
<input type="hidden" name="Brigadier" value="1">
<button class="add-brigadir">добавить</button>
</form>
</div></div></div>

<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal worker-modal">
<a class="close-m1"></a>
<div>
<div class="popup-m1-title">Добавить рабочего</div>
<div class="popup-m1-cont"><div class="popup-m1-text1">Заполните все поля и нажмите добавить</div>
<form  method="post" class="popup-m1-form">
<input type="text" name="name"        placeholder="Имя рабочего" required="">
<input type="text" name="listOfTools" placeholder="Список инструментов" required="">
<input type="text" name="dailySalary" placeholder="Дневная зарплата" required="">
<input type="text" name="position"    placeholder="Должность" required="">
<input type="text" name="idBrigadier"    placeholder="Ид работников" required="">
<input type="text" name="daysWorked"  placeholder="Кол-во отработаных дней" required="">
<input type="hidden" name="Worker" value="1">
<button class="add-worker">добавить</button>
</form>
</div></div></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/popup-m1.js-v=4.js" tppabs="http://static.best-gooods.ru/js/popup-m1.js?v=4" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
