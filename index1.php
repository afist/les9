
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<body>
  <div id="w">
    <nav>
      <ul id="ddmenu">
        <li><a href="#">Список бригадиров</a></li>
        <li><a href="#">О нас</a>
          
          	<table border="3">
          		<caption>Список рабочих</caption>
          		<tr>
    				<th>Имя</th>
    				<th>id</th>
    				<th>инструменты</th>
    				<th>зп</th>
    				<th>должность</th>

   				</tr>
          	
            <tr>
    			<td>Вася</td>
    			<td>2</td>
    			<td>Нож, долото</td>
    			<td>79</td>
    			<td>бродяга</td>
   </tr>
   </table>
          
        </li>
        <li><a href="#">Продукты</a>
          <ul>
            <li><a href="#">Логитипы</a></li>
            <li><a href="#">Шаблоны</a></li>
            <li><a href="#">Иконки</a></li>
            <li><a href="#">Плагины jQuery</a></li>
            <li><a href="#">маркетинг Internet</a></li>
          </ul>
        </li>
        <li><a href="#">Интернационализация</a>
          <ul>
            <li><a href="#">Китай</a></li>
            <li><a href="#">Япония</a></li>
            <li><a href="#">Канада</a></li>
            <li><a href="#">Автсралия</a></li>
            <li><a href="#">Южная Америка</a></li>
          </ul>
        </li>
        <li><a href="#">Контакт</a></li>
      </ul>
    </nav>
  </div>
<script type="text/javascript">
$(document).ready(function(){
  $('a').on('click', function(e){
    e.preventDefault();
  });
    
  $('#ddmenu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('table',this).stop(true,true).slideDown(200);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('table',this).stop(true,true).slideUp(200);
    }, this), 700));
  });

});
</script>

</body>
</html>
