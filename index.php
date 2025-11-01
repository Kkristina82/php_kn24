<?php
// Отримуємо URL після домену
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Масив доступних сторінок і їх назв
$pages = [
    '' => ['file' => 'home.php', 'title' => 'Телебачення і онлайн кінотеатр тільки у SWEET.TV!"'],
    'home' => ['file' => 'home.php', 'title' => 'Телебачення і онлайн кінотеатр тільки у SWEET.TV!"'],
    'login' => ['file' => 'login.php', 'title' => 'Сторінка входу'],
];

// Якщо сторінка існує — підключаємо
if (array_key_exists($request, $pages)) {
    $page = $pages[$request];
    $title = $page['title'];
    include "pages/" . $page['file'];
} else {
    // Якщо не знайдено — показуємо 404
    $title = "Помилка 404";
    include "pages/404.php";
}
?>

