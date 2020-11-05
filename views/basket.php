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
    <?php foreach ($_SESSION as $item): ?>
        <tr>
            <td>
                <p> <?= $item['name'] ?> </p>
            </td>
            <td>
                <p> <?= $item['price'] ?> </p>
            </td>
            <td>
                <p> <?= $item['quantity'] ?> </p>
            </td>
            <td>
                <p> <?= $item['sumPrice'] ?> </p>
            </td>
            <td>
                <p> <?= $item['sumPrice'] ?> </p>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="/">На главную</a>