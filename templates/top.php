<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOK test task</title>
    <link href="/styles/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="/styles/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>

    <div class="container mt-5 p-5 border">

        <?php if ( (isset($_SESSION['message']) && isset($_SESSION['alert'])) && $_SESSION['message'] ) { ?>
            <div class="alert alert-<?= $_SESSION['alert'] ?>" role="alert">
                <?= $_SESSION['message']; ?>
            </div>
        <?php
            unset($_SESSION['message']);
            unset($_SESSION['alert']);
        }
        ?>