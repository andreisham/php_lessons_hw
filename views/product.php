<h1><?=$info['name'] ?></h1>
<img src="/img/<?=$info['path'] ?>" alt="" width="400px">
<p><?=$info['full_description']?></p>
<p>Цена: <?=$info['price']?> руб.</p>



    Количество: <input id="qty_input" type="number" name="quantity">
    <input data-id="<?=$info['id']?>" id="add_to_card" type="submit" value="В корзину">

<script>

    $(function () {
        $("#add_to_card").on('click', function () {
            var id = $(this).data('id');
            var qty = $("#qty_input").val();
            console.log(id);
            console.log(qty);

            $.ajax({
                url : "/basket/add",
                type: "POST",
                data: {
                    id: id,
                    quantity: qty
                },
                success : function (response) {
                    response = JSON.parse(response);
                    if(response.status == 'success'){
                        alert(response.message)
                    }
                }
            })
        })
    })
</script>

<h2>Резцензии</h2>
<?php
foreach ($info['reviews'] as $review):
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

