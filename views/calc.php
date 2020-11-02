<?php
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="number" name="arg_1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="arg_2">
    <input type="submit" value="Посчитать">
    <br>
    <p>Ответ: <?=$result?></p>
</form>