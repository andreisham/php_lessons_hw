<?php

function renderTemplate(string $template, array $params =[]){
    extract($params); // создает из массива переменные
    ob_start(); // включили буферизацию вывода
    include VIEWS_DIR . $template . ".php";
    return ob_get_clean(); // отдает содержимое буфера и отчищает его
}

function render(string $template, array $params =[], $useLayout = true){
    $content = renderTemplate($template, $params);
    if ($useLayout) {
        return renderTemplate('layouts/main', ['content' => $content]);
    }
    return $content;
}
