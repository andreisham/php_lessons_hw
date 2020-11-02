<a href="/admin/products/index.php">Управлять</a>
<a href="/login.php">Войти</a>
<a href="/basket.php">Корзина</a>
<h1>Каталог</h1>
<div style="display: grid; grid-template-columns: repeat(3, 1fr);">
    <?php
    foreach ($product_info as $product_image):
    $imgUrl = "../public/img/{$product_image['path']}";
    $imgResized = "../public/img/resized/{$product_image['path']}";
    img_resize($imgUrl, $imgResized, 200, 300); // после функции стали весить больше :)
    ?>
        <div>
            <h2><?=$product_image['name']?></h2>
            <a href="/product.php?id=<?=$product_image['id']?>">
                <img src="img/resized/<?=$product_image['path']?>" alt="<?=$product_image['name']?>">
            </a>
            <p><?=$product_image['description']?></p>
        </div>
    <? endforeach;?>
</div>