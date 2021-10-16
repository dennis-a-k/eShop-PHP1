<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <title>eShop | <?= $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            display: grid;
            grid-template: minmax(auto, auto) 1fr minmax(auto, auto) / 1fr;
        }
        main {
            background-color: rgba(0, 0, 0, .1);
            box-shadow: inset 0 0.5em 1.5em rgb(0 0 0 / 10%), inset 0 0.125em 0.5em rgb(0 0 0 / 15%);
        }
    </style>
</head>
<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; ?>

    <main class="py-5">
        <div class="container">
            <?php  include $content; ?>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
