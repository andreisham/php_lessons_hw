<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = hashPassword(post('password'));


    $sql = "select * from users 
            where login = '{$login}' 
            and password = '{$password}'";



    if($user = queryOne($sql)) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $login;
        redirect('profile');
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
