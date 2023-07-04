<?php
if(isset($_POST['id'])){
    $mysql = new mysqli("localhost", "root", "", "HomeWork");
$mysql->query("SET NAMES 'utf8'");

$userid = mysqli_real_escape_string($mysql, $_POST["id"]);
$mysql->query("DELETE FROM `users` WHERE id=$userid");
if($userid==true){
    echo "<h1 style='color: green; display: flex; justify-content: center; '>УСПЕШНО УДАЛЕНО!</h1>";
    echo"<a href='Form.php' ><input type='submit' name='home' style='    margin-left: 900px; padding: 13px; border: 1px; background-color: green; color: white; border-radius: 10px;' value='НА ГЛАВНУЮ' ></a>";
}
$mysql->close();
}
?> 