<h1><?=$info['name'] ?></h1>
<img src="/img/<?=$info['path'] ?>" alt="" width="400px">
<p><?=$info['full_description']?></p>
<p>Цена: <?=$info['price']?> руб.</p>
<form action="/basket.php" method="post">
    <input type="hidden" value="<?=$info['id'] ?>" name="id">
    Количество: <input type="number" name="quantity">
    <input type="submit" value="В корзину">
</form>
<a href="/index.php">Go back</a>

<h2>Резцензии</h2>
<?php
foreach ($reviews as $review):
    ?>
    <div>
        <h2><?=$review['author']?></h2>
        <p><?=$review['text']?></p>
        <p><?=$review['created_at']?></p>
        <hr>
    </div>
<? endforeach;?>

<form action="" method="post" enctype="multipart/form-data">
    <h2>Напишите рецензию</h2>
    <input type="text" name="author" style="display: block;">
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="submit" style="display: block;">
</form>

