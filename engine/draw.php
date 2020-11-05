<?php
function drawMenu() {
    $menu = [
        [
            'label' => 'Каталог',
            'link' => '/'
        ],
        [
            'label' => 'Корзина',
            'link' => '/basket'
        ],
        [
            'label' => 'Админка',
            'link' => '/admin'
        ]
    ];

    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href=\"{$item['link']}\">{$item['label']}</a></li>";
    }
    echo "</ul>";
}

