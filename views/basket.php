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
<!--                форма удаления и изменения количестваа-->
                <p> <?= $item['sumPrice'] ?> </p>
            </td>
        </tr>
    <?php endforeach; ?>
</table>