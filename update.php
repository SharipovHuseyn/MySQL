<?php
$mysql = new mysqli("localhost", "root", "", "HomeWork");
$mysql->query("SET NAMES 'utf8'"); 


if(isset($_POST['update'])){
$userid = mysqli_real_escape_string($mysql, $_POST["update"]);
$mysql->query("DELETE FROM `users` WHERE id=$userid");
$mysql->close();
}


echo '<h3 >Ввиводите изменения</h3>';
echo'<form action="" method="POST">
<label>Имя:</label><br />
<input type="text" name="name" /><br /><br />
<label>Биография:</label><br />
<input type="text" name="bio"><br /><br />
<input type="submit" name="send" value="Добавить">
</form>';
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["bio"])){
  
    $bio = $_POST["bio"];
}

if(isset($_POST["send"])){
    $mysql->query("INSERT INTO `users` (`name`, `bio`) VALUES('$name', '$bio')");
    header("Location: successfully.php");
}

$mysql->close();
?>