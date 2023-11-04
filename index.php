 
<?php
    if (isset($_GET['submit_form'])) {
        echo "<h2>Сервер отвечает:</h2>";
        echo "Ваше имя:<strong>".$_GET['user_name']."</strong></br>";
        echo "И вы родились в <strong>".$_GET['user_year']."</strong> году!";    
    }
?>  
