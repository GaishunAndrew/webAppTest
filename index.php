<!DOCTYPE html>
<html>
<head>    
<meta charset="utf-8" /> 
<style> <!--выравниваем форму по центру экрана--->
    form {
        width: 290px;
        margin: 0 auto;
        padding: 8px;
        border: 1px solid black;
    }
</style>
</head>
<body>
<form action="index.php" method="GET"  >
<p><span>Ваше имя:</span> <span style="float: right"><input type="text" size="20"   name="user_name"  /></span></p>
<p><span>Год рождения:</span><span style="float: right"> <input type="number" name="user_year" /></span></p>
<input type="submit" name="submit_form" value="отправить" />
</form>
</body>  
<?php
    if (isset($_GET['submit_form'])) {
        echo "<h2>Сервер отвечает:</h2>";
        echo "Ваше имя:<strong>".$_GET['user_name']."</strong></br>";
        echo "И вы родились в <strong>".$_GET['user_year']."</strong> году!";    
    }
?>  
</html>