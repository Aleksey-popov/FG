
<?php
$db = new PDO('mysql:host=localhost;dbname=my_site1', 'Alex', '123'); // подключем базу данных

if(isset($_POST['name']) && isset($_POST['text'])) { // проверяем пришли ли данные с формы
$prepare = $db->prepare("INSERT INTO `feedback` (`name`, `message`) VALUES (?, ?)"); //подготавливаем запрос в базу данных
$prepare->execute([ // выполняем запрос
$_POST['name'],
$_POST['text'],
]);
}
header('Location: index.php');
?>