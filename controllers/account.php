<?php

include 'auth.php';
$auth = new Auth;

$auth->isLogged();

class Account {

    function index() {
        include './pages/account/index.php';
    }

    function categoryAdd() {
        if ($_POST) {
            if (isset($_SESSION['categories'])) {
                $_SESSION['categories'][] = [
                        (isset($_POST['title']) ? $_POST['title'] : ''),
                        (isset($_POST['description']) ? $_POST['description'] : '')
                ];
            } else {
                $_SESSION['categories'] = [
                    0 => [
                        (isset($_POST['title']) ? $_POST['title'] : ''),
                        (isset($_POST['description']) ? $_POST['description'] : '')
                    ]
                ];
            }

            $_SESSION['message'] = 'Successfully added';
            $_SESSION['alert'] = 'success';

            header('Location: /account');
        }
        include './pages/account/category_add.php';
    }

    function categoryEdit() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categories = $_SESSION['categories'];

            if (isset($categories[$id])) {
                $_SESSION['curr_cat']['id'] = $id;
                $_SESSION['curr_cat']['title'] = $categories[$id][0];
                $_SESSION['curr_cat']['desc'] = $categories[$id][1];
            }

            if ($_POST) {
                $_SESSION['categories'][$id][0] = $_POST['title'];
                $_SESSION['categories'][$id][1] = $_POST['description'];
                $_SESSION['message'] = 'Successfully edited';
                $_SESSION['alert'] = 'success';

                header('Location: /account');
            }

        } else {
            header('Location: /account');
        }
        include './pages/account/category_edit.php';
    }

    function categoryDelete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['categories'][$id]);
        }
        header('Location: /account');
    }

    function categoryDeleteAll() {
        if (isset($_SESSION['categories'])) {
            unset($_SESSION['categories']);
        }
        header('Location: /account');
    }
}
