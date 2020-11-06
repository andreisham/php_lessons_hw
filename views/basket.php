<style>
    table{
        border-collapse: collapse;
        margin: 10px;
    }
    td   {
        padding: 2px 4px;
        border: 1px solid black;
    }
</style>
<table>
        <tr>
            <td>Название</td>
            <td>Цена за 1шт</td>
            <td>Количество</td>
            <td>Итог</td>
        </tr>
    <?php foreach ($basket as $item): ?>
        <tr>
            <td>
                <p> <?= $item['product']['name'] ?> </p>
            </td>
            <td>
                <p> <?= $item['product']['price'] ?> </p>
            </td>
            <td>
                <p> <?= $item['quantity'] ?> </p>
            </td>
            <td>
                <p> <?= $item['sumPrice'] ?> </p>
            </td>
            <td>
                <form action="basket/edit" method="post">
                    <input type="hidden" name="id" value="<?= $item['product']['id'] ?>">
                    <input type="submit" name="increase" value="Увеличить на 1">
                    <input type="submit" name="decrease" value="Уменьшить на 1">
                    <input type="submit" name="delete" value="Удалить">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
        <tr>
            <td>Сумма заказа:</td>
            <td>
                <?php foreach ($basket as $item){
                    $orderCost += $item['sumPrice'];
                }
                echo $orderCost;
                ?>
            </td>
        </tr>
</table>

<form action="basket/checkout" method="post">
    <input type="submit" value="Оформить заказ" name="checkout">
</form>