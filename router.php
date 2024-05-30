<?php

$request = $_SERVER['REQUEST_URI'];

if (strpos($request, 'edit_category/')) {
    require __DIR__ . '/controllers/account.php';
    echo Account::categoryEdit();
    return;
} else if (strpos($request, 'delete_category/')) {
    require __DIR__ . '/controllers/account.php';
    echo Account::categoryDelete();
    return;
}

switch ($request) {
    case '':
    case '/':
        require __DIR__  . '/pages/home.php';
        break;

    case '/login':
        require __DIR__ . '/controllers/auth.php';
        echo Auth::login();
        break;
    case '/logout':
        require __DIR__ . '/controllers/auth.php';
        echo Auth::logout();
        break;
    case '/account':
        require __DIR__ . '/controllers/account.php';
        echo Account::index();
        break;
    case '/account/add_category':
        require __DIR__ . '/controllers/account.php';
        echo Account::categoryAdd();
        break;
    case '/account/delete_all_category':
        require __DIR__ . '/controllers/account.php';
        echo Account::categoryDeleteAll();
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/templates/404.php';
}