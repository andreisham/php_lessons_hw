<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";


// раскидать по файлам
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = hashPassword(post('password'));


    $sql = "select * from users 
            where login = '{$login}' 
            and password = '{$password}'";



    if($user = queryOne($sql)) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $login;
        redirect('profile.php');
    } else {
        echo 'Вы не авторизованы';
    }
}

?>


<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
