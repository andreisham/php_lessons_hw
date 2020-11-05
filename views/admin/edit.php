<form action="" method="post" enctype="multipart/form-data">
    <? if (!is_null($product)): ?>
        <input type="hidden" value="<?= $product['id'] ?>" name="product[id]">
    <? endif; ?>
    <div>
        <label for="">Название</label>
        <input type="text" value="<?= $product['name'] ?? ''?>" name="product[name]">
    </div>
    <div>
        <label for="">Описание</label>
        <input type="text" value="<?= $product['description'] ?? ''?>" name="product[description]">
    </div>
    <div>
        <label for="">Описание</label>
        <textarea name="product[full_description]" placeholder="<?= $product['full_description'] ?? ''?>" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="">Цена</label>
        <input type="text" value="<?= $product['price'] ?? 0?>" name="product[price]">
    </div>
    <div>
        <label for="">Изображение</label>
        <input type="file" name="image">
    </div>
    <input type="submit" value="<?=is_null($product)? 'Создать' : 'Редактировать'?>">
</form>

