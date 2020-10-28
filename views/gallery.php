<?php
foreach ($images as $image):
    $imgUrl = "/img/{$image['path']}";
    ?>
    <a href="/photo.php?id=<?=$image['id']?>">
        <img src="<?= $imgUrl ?>">
    </a>
<? endforeach;?>
<!--форма для загрузки файлов в галерею-->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>


