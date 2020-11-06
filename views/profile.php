<h1>С возвращением <?= $_SESSION['user_name'] ?>!</h1>

<?php foreach ($orders_ID_total as $order_ID_total) :?>
    <table >
        <tr>
            <td align="center" colspan="4">Номер заказа: <?= $order_ID_total['id'] ?></td>
        </tr>
        <tr>
            <td>Название товара</td>
            <td>Цена за 1шт</td>
            <td>Количество</td>
            <td>Сумма</td>
        </tr>
        <?php
        $orders = queryAll($sql . " and op.order_id = {$order_ID_total['id']} ");
        foreach ($orders as $order) :?>
            <tr>
                <td><?= $order['name'] ?></td>
                <td><?= $order['price'] ?></td>
                <td><?= $order['quantity'] ?></td>
                <td><?= $order['total_prod_price'] ?></td>
            </tr>
        <?php endforeach;?>


    </table>
    <p>Итого: <?= $order_ID_total['total_price'] ?></p>
    <p>Адрес доставки: <?= $order_ID_total['adress'] ?></p>
    <p>Телефон: <?= $order_ID_total['phone'] ?></p>
    <form action="/login/profile" method="post">
        <input type="hidden" name="id" value="<?= $order_ID_total['id'] ?>">
        <input type="submit" value="Отменить заказ" name="cancel">
    </form>
<?php endforeach;?>