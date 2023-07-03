<?php
$mysql = new mysqli("localhost", "root", "", "HomeWork");
$mysql->query("SET NAMES 'utf8'");

if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["bio"])){
  
    $bio = $_POST["bio"];
}

if(isset($_POST["send"])){
    $mysql->query("INSERT INTO `users` (`name`, `bio`) VALUES('$name', '$bio')");
}

$mysql->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>HUSEYN.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Форма ввода данных</h3>
<form action="" method="POST">
    <label>Имя:</label><br />
    <input type="text" name="name" /><br /><br />
    <label>Биография:</label><br /><br />
    <textarea type="text" name="bio" cols="30" rows="10" ></textarea><br /><br />
    <input type="submit" name="send" value="Добавить">
</form>
</body>
</html>